async function includeHTML(id, url) {
  const res = await fetch(url);
  const html = await res.text();
  document.getElementById(id).innerHTML = html;
}

function initMenu() {
  const menuButton = document.getElementById('menuButton');
  const sideMenu = document.getElementById('sideMenu');

  if (menuButton && sideMenu) {
    menuButton.addEventListener('click', () => {
      menuButton.classList.toggle('active');
      sideMenu.classList.toggle('open');
    });
  }
}

function getSavedLanguage() {
  return localStorage.getItem("lang") || "de";
}

function saveLanguage(lang) {
  localStorage.setItem("lang", lang);
}

function getCurrentPageKey() {
  const parts = location.pathname
    .split("/")
    .filter(p => p && p !== "index.html");
  return parts.length ? parts.join("_") : "home";
}

async function setLanguage(lang) {
  const pageKey = getCurrentPageKey();
  const langObj = await loadLangObject(pageKey);
  if (!langObj) return;

  const fullData = await langObj.json();
  const texts = fullData["body"][lang];
  if (!texts) {
    console.error(`Sprache '${lang}' nicht in /lang/${pageKey}.json gefunden`);
    return;
  }

  // insert contents
  Object.keys(texts).forEach(key => insertContent(key, texts[key]));

  // check for meta tags of partials and insert in case
  const meta = fullData["meta"];
  if (meta)
    for (const key of Object.keys(meta)) {
      if (!meta[key]) continue;
      const partialLangObj = await loadLangObject(key);
      if (!partialLangObj) continue;
      const texts = (await partialLangObj.json())["body"][lang];
      if (!texts) {
        console.error(`Sprache '${lang}' nicht in /lang/${pageKey}.json gefunden`);
        return;
      }
      Object.keys(texts).forEach(key => insertContent(key, texts[key]));
    }

  // set <html lang="…">
  document.documentElement.lang = lang;

  saveLanguage(lang);
}

async function loadLangObject(pageKey) {
  const res = await fetch(`/lang/${pageKey}.json`);
  if (!res.ok) {
    console.error(`Couldn't locate lang file: /lang/${pageKey}.json`);
    return null;
  } else return res;
}

function insertContent(elementId, text) {
  const el = document.getElementById(elementId);
  if (el) {
    // replace \n with <br> 
    el.innerHTML = text.replace(/\n/g, "<br>");
  } else {
    console.warn(`Couldn't find element with id='${elementId}'.`);
  }
}

function switchLanguage() {
  const currentLang = getSavedLanguage();
  const newLang = currentLang === "de" ? "en" : "de";
  setLanguage(newLang);
}

async function init() {
  await includeHTML('menu', '/partials/menu.partial.html');
  await includeHTML('footer', '/partials/footer.partial.html');
  await includeHTML('lang-toggle', '/partials/lang-switch.partial.html');
  const lang = getSavedLanguage();
  setLanguage(lang);
  document.getElementById('lang-switch').addEventListener('click', e => {
    e.preventDefault();
    switchLanguage();
  })
  initMenu();
}

document.addEventListener('DOMContentLoaded', init);

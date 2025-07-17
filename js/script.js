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

async function init() {
  await includeHTML('menu', '/partials/menu.partial.html');
  await includeHTML('footer', '/partials/footer.partial.html');
  initMenu();
}

document.addEventListener('DOMContentLoaded', init);

<div class="menu-button" id="menuButton">
  <div class="bar top"></div>
  <div class="bar middle"></div>
  <div class="bar bottom"></div>
</div>
<nav class="side-menu" id="sideMenu">
  <ul>
    <li><a href="/home/"><?= htmlspecialchars(t('menu', 'home', $lang, $translations)) ?></a></li>
    <li><a href="/business/"><?= htmlspecialchars(t('menu', 'business', $lang, $translations)) ?></a></li>
    <li><a href="/personal/"><?= htmlspecialchars(t('menu', 'personal', $lang, $translations)) ?></a></li>
    <li><a href="/cv/"><?= htmlspecialchars(t('menu', 'cv', $lang, $translations)) ?></a></li>
    <li><a href="/theses/"><?= htmlspecialchars(t('menu', 'theses', $lang, $translations)) ?></a></li>
    <li><a href="/gadgets/"><?= htmlspecialchars(t('menu', 'gadgets', $lang, $translations)) ?></a></li>
    <li><a href="/links/"><?= htmlspecialchars(t('menu', 'links', $lang, $translations)) ?></a></li>
  </ul>
</nav>
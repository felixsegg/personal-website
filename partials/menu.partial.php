<?php
$currentPath = strtok($_SERVER['REQUEST_URI'], '?');
function isActive(string $path, string $currentPath): string {
    return (strpos($currentPath, $path) === 0) ? ' class="active"' : '';
}
?>
<div class="menu-button" id="menuButton">
  <div class="bar top"></div>
  <div class="bar middle"></div>
  <div class="bar bottom"></div>
</div>
<nav class="side-menu" id="sideMenu">
  <ul>
    <li<?= isActive('/home/', $currentPath) ?>><a href="/home/"><?= htmlspecialchars(t('menu', 'home', $lang, $translations)) ?></a></li>
    <li<?= isActive('/business/', $currentPath) ?>><a href="/business/"><?= htmlspecialchars(t('menu', 'business', $lang, $translations)) ?></a></li>
    <li<?= isActive('/personal/', $currentPath) ?>><a href="/personal/"><?= htmlspecialchars(t('menu', 'personal', $lang, $translations)) ?></a></li>
    <li<?= isActive('/cv/', $currentPath) ?>><a href="/cv/"><?= htmlspecialchars(t('menu', 'cv', $lang, $translations)) ?></a></li>
    <li<?= isActive('/theses/', $currentPath) ?>><a href="/theses/"><?= htmlspecialchars(t('menu', 'theses', $lang, $translations)) ?></a></li>
    <li<?= isActive('/gadgets/', $currentPath) ?>><a href="/gadgets/"><?= htmlspecialchars(t('menu', 'gadgets', $lang, $translations)) ?></a></li>
    <li<?= isActive('/links/', $currentPath) ?>><a href="/links/"><?= htmlspecialchars(t('menu', 'links', $lang, $translations)) ?></a></li>
  </ul>
</nav>

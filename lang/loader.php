<?php
if (!defined('BASE_PATH'))
    include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

session_start();

// fetch lang from ?lang= or session
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'de';

// load translation file
$translations = include BASE_PATH . '/lang/lang.php';

// helper to query texts
function t(string $section, string $key, string $lang, array $translations): string {
    return $translations[$section][$lang][$key] ?? '';
}

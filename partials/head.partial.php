<?php
// $pageTitle and optionally $pageDescription expected as already set
$fullTitle = 'Felix Seggebäing' . ($pageTitle ? ' - ' . htmlspecialchars($pageTitle) : '');
$pageDescription = $pageDescription ?? '';
?>
<meta charset="UTF-8" />
<title><?= $fullTitle ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

<!-- Open Graph for social media previews -->
<meta property="og:title" content="<?= $fullTitle ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
<meta property="og:image" content="/assets/icons/preview.png">

<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/css/style.css" />
<link rel="icon" type="image/png" href="/assets/icons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/assets/icons/favicon.svg" />
<link rel="shortcut icon" href="/assets/icons/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Felix Seggebäing" />
<link rel="manifest" href="/manifest.webmanifest" />

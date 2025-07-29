<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include BASE_PATH . '/lang/loader.php';

$pageTitle = t('imprint', 'title', $lang, $translations);
$pageDescription = t('imprint', 'description', $lang, $translations);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <?php include BASE_PATH . '/partials/head.partial.php'; ?>
</head>

<body>
    <div class="content">
        <div class="lang-switch">
            <?php include BASE_PATH . '/partials/lang-switch.partial.php'; ?>
        </div>

        <h1><?= htmlspecialchars($pageTitle) ?></h1>
        <h2><?= htmlspecialchars(t('imprint', 'address-title', $lang, $translations)) ?></h2>
        <p><?= nl2br(t('imprint', 'address-content', $lang, $translations)) ?></p>

        <h2><?= htmlspecialchars(t('imprint', 'contact-title', $lang, $translations)) ?></h2>
        <p><?= nl2br(t('imprint', 'contact-content', $lang, $translations)) ?></p>

        <h2><?= htmlspecialchars(t('imprint', 'disclaimer-title', $lang, $translations)) ?></h2>
        <h3><?= htmlspecialchars(t('imprint', 'web-presence-title', $lang, $translations)) ?></h3>
        <p><?= nl2br(t('imprint', 'web-presence-content', $lang, $translations)) ?></p>

        <h3><?= htmlspecialchars(t('imprint', 'external-links-title', $lang, $translations)) ?></h3>
        <p><?= nl2br(t('imprint', 'external-links-content', $lang, $translations)) ?></p>

        <h2><?= htmlspecialchars(t('imprint', 'privacy-title', $lang, $translations)) ?></h2>
        <p><?= nl2br(t('imprint', 'privacy-content', $lang, $translations)) ?></p>

        <?php include BASE_PATH . '/partials/menu.partial.php'; ?>
    </div>

    <?php include BASE_PATH . '/partials/footer.partial.php'; ?>

    <script src="/js/script.js"></script>
</body>

</html>

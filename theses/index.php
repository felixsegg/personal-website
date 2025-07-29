<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include BASE_PATH . '/lang/loader.php';

$pageTitle = t('theses', 'title', $lang, $translations);
$pageDescription = t('theses', 'description', $lang, $translations);
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
    <p><?= nl2br(t('theses', 'desc', $lang, $translations)) ?></p>

    <h2><?= htmlspecialchars(t('theses', 'bachelor-title', $lang, $translations)) ?></h2>
    <p><?= nl2br(t('theses', 'bachelor-desc', $lang, $translations)) ?></p>

    <hr>

    <h2><?= htmlspecialchars(t('theses', 'master-title', $lang, $translations)) ?></h2>
    <p><?= nl2br(t('theses', 'master-desc', $lang, $translations)) ?></p>

    <?php include BASE_PATH . '/partials/menu.partial.php'; ?>
  </div>

  <?php include BASE_PATH . '/partials/footer.partial.php'; ?>

  <script src="/js/script.js"></script>
</body>

</html>

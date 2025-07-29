<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include BASE_PATH . '/lang/loader.php';

$pageTitle = t('gadgets', 'title', $lang, $translations);
$pageDescription = t('gadgets', 'description', $lang, $translations);
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
    <p><?= nl2br(t('gadgets', 'content', $lang, $translations)) ?></p>

    <?php include BASE_PATH . '/partials/menu.partial.php'; ?>
  </div>

  <?php include BASE_PATH . '/partials/footer.partial.php'; ?>

  <script src="/js/script.js"></script>
</body>

</html>

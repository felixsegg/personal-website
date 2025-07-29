<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include BASE_PATH . '/lang/loader.php';

$pageTitle = t('links', 'title', $lang, $translations);
$pageDescription = t('links', 'description', $lang, $translations);
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
    <div class="social-links">
      <a class="social-button" href="https://github.com/felixsegg" target="_blank">
        <img src="/assets/icons/github-white.svg" class="logo-dark" alt="GitHub">
        <img src="/assets/icons/github-black.svg" class="logo-light" alt="GitHub">
      </a>
      <a class="social-button" href="https://www.linkedin.com/in/felix-seggeb%C3%A4ing-a669a0374/" target="_blank">
        <img src="/assets/icons/InBug-White.png" class="logo-dark" alt="LinkedIn">
        <img src="/assets/icons/InBug-Blue.png" class="logo-light" alt="LinkedIn">
      </a>
    </div>

    <?php include BASE_PATH . '/partials/menu.partial.php'; ?>
  </div>

  <?php include BASE_PATH . '/partials/footer.partial.php'; ?>

  <script src="/js/script.js"></script>
</body>

</html>

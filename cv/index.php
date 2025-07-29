<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include BASE_PATH . '/lang/loader.php';

$pageTitle = t('cv', 'title', $lang, $translations);
$pageDescription = t('cv', 'description', $lang, $translations);
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

    <div class="cv content">
      <?php for ($i = 5; $i >= 0; $i--): ?>
        <div class="element">
          <div class="year"><?= htmlspecialchars(t('cv', "year-$i", $lang, $translations)) ?></div>
          <div class="info">
            <div class="title"><?= htmlspecialchars(t('cv', "element-title-$i", $lang, $translations)) ?></div>
            <div class="location"><?= htmlspecialchars(t('cv', "location-$i", $lang, $translations)) ?></div>
            <div class="desc"><?= t('cv', "desc-$i", $lang, $translations) ?></div>
          </div>
        </div>
      <?php endfor; ?>
    </div>

    <?php include BASE_PATH . '/partials/menu.partial.php'; ?>
  </div>

  <?php include BASE_PATH . '/partials/footer.partial.php'; ?>

  <script src="/js/script.js"></script>
</body>

</html>

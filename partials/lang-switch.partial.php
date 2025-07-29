<?php 
$targetLang = $lang === 'de' ? 'en' : 'de';

// remember other url param values
$query = $_GET;
$query['lang'] = $targetLang; // add or substitute lang 

// build new url
$newUrl = strtok($_SERVER['REQUEST_URI'], '?') . '?' . http_build_query($query);
?>
<a href="<?= htmlspecialchars($newUrl) ?>">
    <?= htmlspecialchars(t('lang-switch', 'lang-switch', $lang, $translations)) ?>
</a>

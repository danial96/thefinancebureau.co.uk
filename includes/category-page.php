<?php
/**
 * Renders a category landing page. Expects $catSlug to be set by the caller
 * before including this file; pulls the rest from services-data.php.
 */
$baseUrl = '../..';
require __DIR__ . '/services-data.php';
require __DIR__ . '/icons.php';
$catIcons = ['startup' => 'briefcase', 'accounting' => 'chart', 'artwork' => 'palette', 'marketing' => 'megaphone'];
$cat = $services[$catSlug];
$pageTitle = $cat['label'];
$pageDescription = $cat['desc'];
require __DIR__ . '/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb">
      <a href="<?= $baseUrl ?>/">Home</a>
      <span class="sep">/</span>
      <span><?= htmlspecialchars($cat['label']) ?></span>
    </div>
    <div class="page-hero-icon"><?= icon($catIcons[$catSlug], 26) ?></div>
    <h1><?= htmlspecialchars($cat['label']) ?></h1>
    <p class="lede"><?= htmlspecialchars($cat['desc']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cat-grid">
      <?php foreach ($cat['items'] as $item): ?>
      <a class="cat-card" href="<?= $baseUrl ?>/services/<?= $catSlug ?>/<?= $item['slug'] ?>" data-reveal>
        <div class="service-icon"><?= icon($catIcons[$catSlug], 22) ?></div>
        <div>
          <h3><?= htmlspecialchars($item['label']) ?></h3>
          <p><?= htmlspecialchars($item['desc']) ?></p>
          <span class="learn">Learn more <?= icon('arrow', 14) ?></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="cta-band" data-reveal>
      <h2>Not sure which <?= htmlspecialchars($cat['label']) ?> service you need?</h2>
      <p>Tell us about your business and we'll recommend the right fit.</p>
      <a href="<?= $baseUrl ?>/contact" class="btn btn-accent">Talk to us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>

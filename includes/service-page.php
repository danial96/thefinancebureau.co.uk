<?php
/**
 * Renders a single service page from a $service array set by the caller.
 * Expected keys: category, catLabel, catSlug, catIcon, label, slug, tagline,
 * intro (array of paragraphs), features (array of [label, desc]), faqs (array of [q, a]).
 */
$baseUrl = '../..';
$pageTitle = $service['label'];
$pageDescription = $service['tagline'];
require __DIR__ . '/header.php';
?>
<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $service['label'],
    'description' => $service['tagline'],
    'serviceType' => $service['label'],
    'areaServed' => 'GB',
    'provider' => ['@type' => 'ProfessionalService', 'name' => 'The Finance Bureau', 'url' => SITE_URL],
    'url' => $canonicalUrl,
], JSON_UNESCAPED_SLASHES) ?>
</script>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb">
      <a href="<?= $baseUrl ?>/index.php">Home</a>
      <span class="sep">/</span>
      <a href="<?= $baseUrl ?>/services/<?= $service['catSlug'] ?>/"><?= htmlspecialchars($service['catLabel']) ?></a>
      <span class="sep">/</span>
      <span><?= htmlspecialchars($service['label']) ?></span>
    </div>
    <div class="page-hero-icon"><?= icon($service['catIcon'], 26) ?></div>
    <h1><?= htmlspecialchars($service['label']) ?></h1>
    <p class="lede"><?= htmlspecialchars($service['tagline']) ?></p>
    <?php if (!empty($service['price'])): ?>
    <div class="price-chip"><?= icon('shield', 14) ?> <?= htmlspecialchars($service['price']) ?></div>
    <?php endif; ?>
    <div class="hero-actions" style="margin-top: var(--space-md);">
      <a href="<?= $baseUrl ?>/contact.php?service=<?= urlencode($service['label']) ?>" class="btn btn-primary">Get Started</a>
      <a href="<?= $baseUrl ?>/services/<?= $service['catSlug'] ?>/" class="btn btn-ghost">Back to <?= htmlspecialchars($service['catLabel']) ?></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container content-layout">
    <div class="content-main" data-reveal>
      <?php foreach ($service['intro'] as $para): ?>
      <p><?= $para ?></p>
      <?php endforeach; ?>

      <h2>What's included</h2>
      <ul class="feature-check">
        <?php foreach ($service['features'] as $f): ?>
        <li>
          <span class="fc-ico"><?= icon('check', 14) ?></span>
          <span><strong><?= htmlspecialchars($f[0]) ?></strong><span><?= htmlspecialchars($f[1]) ?></span></span>
        </li>
        <?php endforeach; ?>
      </ul>

      <?php if (!empty($service['faqs'])): ?>
      <h2>Frequently asked questions</h2>
      <div class="faq-list">
        <?php foreach ($service['faqs'] as $faq): ?>
        <div class="faq-item">
          <div class="faq-q"><span><?= htmlspecialchars($faq[0]) ?></span><span class="chev"><?= icon('chevron', 18) ?></span></div>
          <div class="faq-a"><p><?= $faq[1] ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>

    <aside class="sidebar-card" data-reveal data-reveal-delay="1">
      <h3><?= htmlspecialchars($service['label']) ?></h3>
      <?php if (!empty($service['price'])): ?>
      <div class="sidebar-price"><?= htmlspecialchars($service['price']) ?></div>
      <?php endif; ?>
      <p>Tell us what you need and our team will be in touch to confirm the details.</p>
      <ul class="sidebar-list">
        <li><span class="fc-ico"><?= icon('shield', 14) ?></span> Fixed, transparent pricing</li>
        <li><span class="fc-ico"><?= icon('bolt', 14) ?></span> Fast turnaround</li>
        <li><span class="fc-ico"><?= icon('users', 14) ?></span> Dedicated account manager</li>
      </ul>
      <a href="<?= $baseUrl ?>/contact.php?service=<?= urlencode($service['label']) ?>" class="btn btn-primary">Get Started</a>
      <div class="sidebar-divider"></div>
      <p class="sidebar-note">No payment required to enquire. We'll confirm scope and pricing with you first.</p>
    </aside>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="cta-band" data-reveal>
      <h2>Ready to get started with <?= htmlspecialchars($service['label']) ?>?</h2>
      <p>Tell us what you need. We'll take it from there.</p>
      <a href="<?= $baseUrl ?>/contact.php?service=<?= urlencode($service['label']) ?>" class="btn btn-accent">Get Started</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>

<?php
$baseUrl = '';
$pageTitle = 'About Us';
$pageDescription = 'The Finance Bureau was built by entrepreneurs who\'ve navigated UK company formation themselves.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb"><a href="<?= $baseUrl ?>/index.php">Home</a><span class="sep">/</span><span>About</span></div>
    <p class="eyebrow">About The Finance Bureau</p>
    <h1>We don't just support UK businesses, we build them.</h1>
    <p class="lede">We started The Finance Bureau because we'd been through the frustration ourselves: five different agencies for formation, accounting, design and marketing, none of them talking to each other. We built the Bureau we wish we'd had.</p>
  </div>
</section>

<section class="section">
  <div class="container prose" data-reveal>
    <h2>Why we exist</h2>
    <p>Registering a UK company is meant to take a day. In practice, most founders spend weeks piecing together a registered agent, an accountant, a designer and a marketer, each with their own pricing, their own process, and no idea what the others are doing.</p>
    <p>The Finance Bureau brings all of it under one roof: company formation, ongoing accounting, brand design, and marketing, with fixed pricing and one team who actually knows your business.</p>

    <h2>How we work</h2>
    <p>No cart, no upsells buried in checkout. You tell us what you need, we confirm scope and pricing directly with you, and a dedicated account manager sees it through, from your first enquiry to ongoing support.</p>
  </div>

  <div class="container">
    <div class="value-grid">
      <div class="value-card" data-reveal>
        <div class="service-icon"><?= icon('shield', 22) ?></div>
        <h3>Transparent, always</h3>
        <p>Fixed pricing agreed upfront. No hidden fees, no surprise invoices.</p>
      </div>
      <div class="value-card" data-reveal data-reveal-delay="1">
        <div class="service-icon"><?= icon('users', 22) ?></div>
        <h3>One point of contact</h3>
        <p>A dedicated account manager who actually knows your business.</p>
      </div>
      <div class="value-card" data-reveal data-reveal-delay="2">
        <div class="service-icon"><?= icon('bolt', 22) ?></div>
        <h3>Built for speed</h3>
        <p>Company formation in as little as 24 hours, not weeks.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="cta-band" data-reveal>
      <h2>Ready to get started?</h2>
      <p>Tell us what your business needs. We'll take it from there.</p>
      <a href="<?= $baseUrl ?>/contact.php" class="btn btn-accent">Get Started</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

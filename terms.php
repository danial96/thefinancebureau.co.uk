<?php
$baseUrl = '';
$pageTitle = 'Terms & Conditions';
$pageDescription = 'The terms governing use of The Finance Bureau website and services.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb"><a href="<?= $baseUrl ?>/index.php">Home</a><span class="sep">/</span><span>Terms</span></div>
    <p class="eyebrow">Legal</p>
    <h1>Terms &amp; Conditions</h1>
    <p class="lede">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="container prose" data-reveal>
    <!-- Placeholder legal copy — have a solicitor review before this page goes live. -->
    <p><em>This is placeholder text. Replace this page with Terms &amp; Conditions reviewed by a qualified solicitor before launch, covering service scope, payment terms, liability and cancellation.</em></p>
    <h2>Use of this website</h2>
    <p>This website is provided to help you learn about and enquire regarding The Finance Bureau's services. Submitting an enquiry does not create a binding agreement. Service terms are confirmed directly with you before any work begins.</p>
    <h2>Service scope</h2>
    <p>The specific scope, pricing and delivery timeline for any service is agreed individually and confirmed in writing before work commences.</p>
    <h2>Limitation of liability</h2>
    <p>The Finance Bureau provides business formation, accounting, design and marketing services with reasonable skill and care. Full liability terms will be set out in your individual service agreement.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

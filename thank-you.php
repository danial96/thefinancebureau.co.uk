<?php
$baseUrl = '';
$pageTitle = 'Thank You';
$pageDescription = 'Your enquiry has been received. The Finance Bureau team will be in touch shortly.';
$noIndex = true;
require __DIR__ . '/includes/header.php';

$name = isset($_GET['name']) ? trim($_GET['name']) : '';
$firstName = $name !== '' ? explode(' ', $name)[0] : '';
?>

<section class="page-hero" style="text-align:center; padding-bottom: var(--space-2xl);">
  <div class="container" style="position:relative; max-width:640px; margin:0 auto;">
    <div class="thanks-icon"><?= icon('check', 34) ?></div>
    <p class="eyebrow" style="justify-content:center;">Enquiry Received</p>
    <h1><?= $firstName !== '' ? 'Thanks, ' . htmlspecialchars($firstName) . '.' : 'Thanks, that\'s been sent.' ?></h1>
    <p class="lede" style="margin-left:auto; margin-right:auto;">Your enquiry has landed with our team. Most clients hear back within minutes during business hours, we'll follow up by email or phone to confirm the details and next steps.</p>

    <div class="thanks-steps">
      <div class="thanks-step">
        <span class="thanks-step-num">1</span>
        <div><strong>We review your enquiry</strong><p>Our team reads what you've told us and matches it to the right specialist.</p></div>
      </div>
      <div class="thanks-step">
        <span class="thanks-step-num">2</span>
        <div><strong>We get in touch</strong><p>Expect an email or call to confirm scope, timeline and pricing.</p></div>
      </div>
      <div class="thanks-step">
        <span class="thanks-step-num">3</span>
        <div><strong>We get to work</strong><p>Once you're happy to proceed, your dedicated account manager takes it from there.</p></div>
      </div>
    </div>

    <div class="hero-actions" style="justify-content:center; margin-top: var(--space-lg);">
      <a href="<?= $baseUrl ?>/" class="btn btn-primary">Back to Home</a>
      <a href="<?= $baseUrl ?>/#services" class="btn btn-ghost">Explore Services</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

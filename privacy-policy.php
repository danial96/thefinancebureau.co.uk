<?php
$baseUrl = '';
$pageTitle = 'Privacy Policy';
$pageDescription = 'How The Finance Bureau collects, uses and protects your data.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb"><a href="<?= $baseUrl ?>/">Home</a><span class="sep">/</span><span>Privacy Policy</span></div>
    <p class="eyebrow">Legal</p>
    <h1>Privacy Policy</h1>
    <p class="lede">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="container prose" data-reveal>
    <!-- Placeholder legal copy — have a solicitor review before this page goes live. -->
    <p><em>This is placeholder text. Replace this page with a Privacy Policy reviewed by a qualified solicitor before launch, covering UK GDPR and Data Protection Act 2018 requirements.</em></p>
    <h2>Information we collect</h2>
    <p>When you submit an enquiry through this website, we collect the information you provide, such as your name, email address, phone number, and details of the service you're interested in.</p>
    <h2>How we use your information</h2>
    <p>We use this information solely to respond to your enquiry and, where you've agreed, to contact you about our services.</p>
    <h2>Data retention</h2>
    <p>We retain enquiry information only for as long as necessary to respond to your request and maintain business records.</p>
    <h2>Your rights</h2>
    <p>Under UK data protection law, you have the right to access, correct, or request deletion of your personal data. Contact us at info@thefinancebureau.co.uk to make a request.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

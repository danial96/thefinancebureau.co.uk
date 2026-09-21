<?php
$baseUrl = '';
$pageTitle = 'Contact Us';
$pageDescription = 'Tell us what your business needs. No payment required, our team will be in touch.';
require __DIR__ . '/includes/header.php';

$prefillService = isset($_GET['service']) ? trim($_GET['service']) : '';
$error = isset($_GET['error']);
?>

<section class="page-hero">
  <div class="container page-hero-inner">
    <div class="breadcrumb"><a href="<?= $baseUrl ?>/">Home</a><span class="sep">/</span><span>Contact</span></div>
    <p class="eyebrow">Get Started</p>
    <h1>Tell us what your business needs.</h1>
    <p class="lede">No payment details, no commitment. Just tell us what you're looking for and our team will reach out to confirm scope and pricing.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-layout">
    <div data-reveal>
      <div class="contact-info-card">
        <h3>Talk to The Finance Bureau</h3>
        <p>Most enquiries get a reply within minutes during business hours.</p>
        <div class="contact-info-row">
          <span class="ico"><?= icon('mail', 18) ?></span>
          <div><strong>Email</strong><span>info@thefinancebureau.co.uk</span></div>
        </div>
        <div class="contact-info-row">
          <span class="ico"><?= icon('phone', 18) ?></span>
          <div><strong>Phone / WhatsApp</strong><span>+44 (0) 000 000 0000</span></div>
        </div>
        <div class="contact-info-row">
          <span class="ico"><?= icon('building', 18) ?></span>
          <div><strong>Office</strong><span>London, United Kingdom</span></div>
        </div>
      </div>
    </div>

    <div class="form-card" data-reveal data-reveal-delay="1">
      <?php if ($error): ?>
        <div class="form-error">Please check your name and email address and try again.</div>
      <?php endif; ?>

      <form action="<?= $baseUrl ?>/handlers/submit-quote.php" method="POST">
        <div class="hp-field" aria-hidden="true">
          <label for="company_website">Leave this field empty</label>
          <input type="text" id="company_website" name="company_website" tabindex="-1" autocomplete="off">
        </div>
        <input type="hidden" name="ts" value="<?= time() ?>">
        <div class="form-row">
          <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" placeholder="e.g. 07123 456789">
          </div>
          <div class="form-group">
            <label for="service">Service you're interested in</label>
            <select id="service" name="service">
              <option value="General enquiry">General enquiry</option>
              <?php foreach ($services as $cat): ?>
                <optgroup label="<?= htmlspecialchars($cat['label']) ?>">
                  <?php foreach ($cat['items'] as $item): ?>
                    <option value="<?= htmlspecialchars($item['label']) ?>" <?= $prefillService === $item['label'] ? 'selected' : '' ?>><?= htmlspecialchars($item['label']) ?></option>
                  <?php endforeach; ?>
                </optgroup>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Tell us a bit about what you need</label>
          <textarea id="message" name="message" placeholder="e.g. I want to register a UK Ltd company as a non-resident..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%;">Send Enquiry</button>
        <p class="form-note">No payment is taken here. We'll confirm pricing with you directly before any work begins.</p>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

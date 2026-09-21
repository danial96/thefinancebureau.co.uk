<?php
$baseUrl = '';
$pageTitle = 'UK Business Formation, Accounting & Marketing, One Bureau';
$pageDescription = 'Register your UK company, manage your accounts, and grow your brand, all from one Bureau. Fixed pricing, no agency markups.';
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="hero-glow"></div>
  <div class="container hero-inner">
    <div data-reveal>
      <p class="eyebrow">UK Business Services, Under One Roof</p>
      <h1>Register your UK company, manage your accounts, and <em>grow your brand</em>.</h1>
      <p class="hero-sub">One Bureau, fixed prices, no agency markups. From company formation to accounting, design and marketing, we handle it end to end.</p>
      <div class="hero-actions">
        <a href="<?= $baseUrl ?>/contact" class="btn btn-primary">Get Started Today</a>
        <a href="#services" class="btn btn-ghost">Explore Services</a>
      </div>
      <div class="hero-badges">
        <div class="hero-badge"><span class="dot">&#10003;</span> UK company formation support in as little as 24 hours</div>
        <div class="hero-badge"><span class="dot">&#10003;</span> Transparent, fixed pricing, no hidden fees</div>
        <div class="hero-badge"><span class="dot">&#10003;</span> A dedicated account manager for every client</div>
      </div>
    </div>
    <div class="hero-visual" data-reveal data-reveal-delay="1">
      <div class="hero-orbit"></div>
      <div class="hero-center-badge"><?= icon('building', 40) ?></div>
      <div class="hero-card hero-card-1"><span class="hc-ico"><?= icon('bolt', 18) ?></span><span><strong>24hrs</strong><span>Formation turnaround</span></span></div>
      <div class="hero-card hero-card-2"><span class="hc-ico"><?= icon('shield', 18) ?></span><span><strong>Fixed</strong><span>Pricing, always</span></span></div>
      <div class="hero-card hero-card-3"><span class="hc-ico"><?= icon('users', 18) ?></span><span><strong>1:1</strong><span>Account manager</span></span></div>
    </div>
  </div>
</section>

<section class="trust-bar">
  <div class="container trust-row">
    <span>Company Formation</span>
    <span>Accounting &amp; Tax</span>
    <span>Brand &amp; Design</span>
    <span>Marketing &amp; SEO</span>
    <span>AEO Ready</span>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center" data-reveal>
      <p class="eyebrow">How It Works</p>
      <h2>Getting started is simple</h2>
      <p>Pick what you need, tell us the details, and our team takes care of everything else.</p>
    </div>
    <div class="steps">
      <div class="step" data-reveal>
        <span class="step-ghost">01</span>
        <div class="step-icon"><?= icon('check', 24) ?></div>
        <h3>Choose Your Service</h3>
        <p>Browse company formation, accounting, design or marketing services built for UK businesses.</p>
      </div>
      <div class="step" data-reveal data-reveal-delay="1">
        <span class="step-ghost">02</span>
        <div class="step-icon"><?= icon('pencil', 24) ?></div>
        <h3>Tell Us What You Need</h3>
        <p>Fill a short form with your details. No payment needed to get started.</p>
      </div>
      <div class="step" data-reveal data-reveal-delay="2">
        <span class="step-ghost">03</span>
        <div class="step-icon"><?= icon('phone', 24) ?></div>
        <h3>We Get In Touch</h3>
        <p>Our team contacts you to confirm the details and manages the entire process for you.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="services">
  <div class="section-dark-bg"></div>
  <div class="container" style="position:relative;">
    <div class="section-head center" data-reveal>
      <p class="eyebrow">Business Made Simple</p>
      <h2>One partner for every business need</h2>
      <p>Whether you're launching a new brand or scaling an existing one, The Finance Bureau brings everything under one roof.</p>
    </div>
    <div class="services-list">
      <?php $i = 1; foreach ($services as $cat): ?>
      <a class="services-row" href="<?= $baseUrl ?>/services/<?= $cat['slug'] ?>/" data-reveal>
        <span class="services-row-num"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span>
        <div class="services-row-icon"><?= icon($catIcons[$cat['slug']], 24) ?></div>
        <div class="services-row-main">
          <h3><?= htmlspecialchars($cat['label']) ?></h3>
          <p><?= htmlspecialchars($cat['desc']) ?></p>
        </div>
        <div class="services-row-tags">
          <?php foreach ($cat['items'] as $item): ?>
          <span><?= htmlspecialchars($item['label']) ?></span>
          <?php endforeach; ?>
        </div>
        <span class="services-row-arrow"><?= icon('arrow', 20) ?></span>
      </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container why-grid">
    <div data-reveal>
      <p class="eyebrow">Why The Finance Bureau</p>
      <h2>We don't just support businesses, we build them</h2>
      <p>One trusted Bureau to manage formation, accounts, branding and ongoing growth, without juggling five different agencies.</p>
      <div class="stats-row">
        <div class="stat">
          <div class="stat-icon"><?= icon('users', 18) ?></div>
          <strong>500+</strong>
          <span>UK businesses launched</span>
        </div>
        <div class="stat">
          <div class="stat-icon"><?= icon('chart', 18) ?></div>
          <strong>4</strong>
          <span>Services, one platform</span>
        </div>
        <div class="stat">
          <div class="stat-icon"><?= icon('bolt', 18) ?></div>
          <strong>2 min</strong>
          <span>Average reply time</span>
        </div>
      </div>
    </div>
    <ul class="why-list" data-reveal data-reveal-delay="1">
      <li>
        <span class="ico"><?= icon('shield', 20) ?></span>
        <div><strong>Fixed, transparent pricing</strong><p>No hidden fees, no surprise invoices, ever.</p></div>
      </li>
      <li>
        <span class="ico"><?= icon('briefcase', 20) ?></span>
        <div><strong>Built by entrepreneurs</strong><p>We've navigated UK company formation ourselves, so we know what actually matters.</p></div>
      </li>
      <li>
        <span class="ico"><?= icon('users', 20) ?></span>
        <div><strong>A dedicated account manager</strong><p>One point of contact who knows your business, from setup onward.</p></div>
      </li>
      <li>
        <span class="ico"><?= icon('phone', 20) ?></span>
        <div><strong>Fast, human replies</strong><p>Most clients hear back from our team within minutes, not days.</p></div>
      </li>
    </ul>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head center" data-reveal>
      <p class="eyebrow">Our Promise</p>
      <h2>What you can hold us to</h2>
      <p>No reviews to hide behind yet, we're a new Bureau. So instead, here's exactly what we commit to on every engagement.</p>
    </div>
    <div class="promise-grid">
      <div class="promise-card" data-reveal>
        <div class="promise-icon"><?= icon('shield', 26) ?></div>
        <h3>No hidden fees</h3>
        <p>The price we quote is the price you pay. Agreed upfront, in writing, before any work starts.</p>
      </div>
      <div class="promise-card" data-reveal data-reveal-delay="1">
        <div class="promise-icon"><?= icon('check', 26) ?></div>
        <h3>No long contracts</h3>
        <p>Work with us project by project or month to month. Nothing locks you in beyond what you've agreed.</p>
      </div>
      <div class="promise-card" data-reveal data-reveal-delay="2">
        <div class="promise-icon"><?= icon('building', 26) ?></div>
        <h3>Real UK expertise</h3>
        <p>Your work is handled by qualified UK professionals directly, never outsourced without your knowledge.</p>
      </div>
      <div class="promise-card" data-reveal data-reveal-delay="3">
        <div class="promise-icon"><?= icon('users', 26) ?></div>
        <h3>A named contact</h3>
        <p>One dedicated account manager you can reach directly, not a rotating support queue.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <h2>Ready to register your company?</h2>
      <p>It takes less than 10 minutes to tell us what you need. We'll take it from there.</p>
      <a href="<?= $baseUrl ?>/contact" class="btn btn-accent">Get Started</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

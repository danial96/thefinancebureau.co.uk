<?php
// Prevent browsers/proxies from serving a stale page after a deploy.
// no-store (not just no-cache) is what actually stops back/forward-cache
// from restoring an old snapshot on browser back-navigation — static
// assets (CSS/JS) are separately cache-busted via a ?v= query param.
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/services-data.php';
require_once __DIR__ . '/icons.php';
require_once __DIR__ . '/logo.php';
$catIcons = ['startup' => 'briefcase', 'accounting' => 'chart', 'artwork' => 'palette', 'marketing' => 'megaphone'];

$resolvedTitle = isset($pageTitle) ? $pageTitle . ' | The Finance Bureau' : 'The Finance Bureau | UK Business Formation, Accounting & Marketing';
$resolvedDescription = $pageDescription ?? 'The Finance Bureau helps UK businesses form, account for and grow: company formation, accounting, brand design and marketing under one roof.';
$canonicalPath = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$canonicalUrl = SITE_URL . $canonicalPath;
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($resolvedTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($resolvedDescription) ?>">
<?php if (!empty($noIndex)): ?><meta name="robots" content="noindex, nofollow"><?php endif; ?>
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
<link rel="icon" type="image/svg+xml" href="<?= $baseUrl ?? '' ?>/favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $baseUrl ?? '' ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $baseUrl ?? '' ?>/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $baseUrl ?? '' ?>/apple-touch-icon.png">
<link rel="manifest" href="<?= $baseUrl ?? '' ?>/site.webmanifest">
<meta name="theme-color" content="#0B1E3D">
<meta property="og:type" content="website">
<meta property="og:site_name" content="The Finance Bureau">
<meta property="og:title" content="<?= htmlspecialchars($resolvedTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($resolvedDescription) ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?= htmlspecialchars($resolvedTitle) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($resolvedDescription) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= $baseUrl ?? '' ?>/assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: '1' ?>">
<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => 'The Finance Bureau',
    'url' => SITE_URL,
    'description' => 'UK company formation, accounting, brand design and marketing services for business owners.',
    'areaServed' => 'GB',
    'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'GB'],
], JSON_UNESCAPED_SLASHES) ?>
</script>
</head>
<body id="top">

<header class="site-header" id="siteHeader">
  <div class="nav-inner">
    <a href="<?= $baseUrl ?? '' ?>/" class="brand"><?= renderLogoMark(38) ?><span class="brand-word">The Finance <em>Bureau</em></span></a>

    <nav class="nav-links" id="navLinks">
      <?php foreach ($services as $navCat): ?>
      <div class="nav-item">
        <span class="nav-link"><?= htmlspecialchars($navCat['label']) ?> <svg class="chev" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></span>
        <div class="mega">
          <div class="mega-intro">
            <div>
              <div class="mega-intro-icon"><?= icon($catIcons[$navCat['slug']], 20) ?></div>
              <strong><?= htmlspecialchars($navCat['label']) ?></strong>
              <span><?= htmlspecialchars($navCat['desc']) ?></span>
            </div>
            <a href="<?= $baseUrl ?? '' ?>/services/<?= $navCat['slug'] ?>/">View all <?= icon('arrow', 14) ?></a>
          </div>
          <div class="mega-list">
            <?php foreach ($navCat['items'] as $item): ?>
            <a class="mega-item" href="<?= $baseUrl ?? '' ?>/services/<?= $navCat['slug'] ?>/<?= $item['slug'] ?>">
              <span class="mega-item-icon"><?= icon('check', 14) ?></span>
              <span>
                <strong><?= htmlspecialchars($item['label']) ?></strong>
                <span><?= htmlspecialchars($item['desc']) ?></span>
              </span>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <a href="<?= $baseUrl ?? '' ?>/about" class="nav-link">About</a>
      <a href="<?= $baseUrl ?? '' ?>/contact" class="btn btn-primary mobile-cta">Get Started</a>
    </nav>

    <div class="nav-cta">
      <a href="<?= $baseUrl ?? '' ?>/contact" class="btn btn-ghost btn-sm">Contact</a>
      <a href="<?= $baseUrl ?? '' ?>/contact" class="btn btn-primary btn-sm">Get Started</a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

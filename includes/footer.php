<footer class="site-footer">
  <div class="footer-bg"></div>
  <div class="container" style="position:relative;">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= $baseUrl ?? '' ?>/index.php" class="brand"><?= renderLogoMark(38) ?><span class="brand-word">The Finance <em>Bureau</em></span></a>
        <p>UK company formation, accounting, brand design and marketing. One Bureau, fixed pricing, no agency markups.</p>
        <div class="footer-contact">
          <a href="mailto:info@thefinancebureau.co.uk"><?= icon('mail', 16) ?> info@thefinancebureau.co.uk</a>
        </div>
      </div>
      <?php foreach ($services as $cat): ?>
      <div class="footer-col">
        <h4><?= htmlspecialchars($cat['label']) ?></h4>
        <?php foreach ($cat['items'] as $item): ?>
        <a href="<?= $baseUrl ?? '' ?>/services/<?= $cat['slug'] ?>/<?= $item['slug'] ?>.php"><?= htmlspecialchars($item['label']) ?></a>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> The Finance Bureau. All rights reserved.</span>
      <span class="footer-legal">
        <a href="<?= $baseUrl ?? '' ?>/privacy-policy.php">Privacy Policy</a>
        <a href="<?= $baseUrl ?? '' ?>/terms.php">Terms</a>
      </span>
      <a href="#top" class="footer-top-link">Back to top <?= icon('arrow', 14) ?></a>
    </div>
  </div>
</footer>

<script src="<?= $baseUrl ?? '' ?>/assets/js/main.js"></script>
</body>
</html>

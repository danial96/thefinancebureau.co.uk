<footer class="site-footer">
  <div class="footer-bg"></div>
  <div class="container" style="position:relative;">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?= $baseUrl ?? '' ?>/" class="brand"><?= renderLogoMark(38) ?><span class="brand-word">The Finance <em>Bureau</em></span></a>
        <p>UK company formation, accounting, brand design and marketing. One Bureau, fixed pricing, no agency markups.</p>
        <div class="footer-contact">
          <a href="mailto:info@thefinancebureau.co.uk"><?= icon('mail', 16) ?> info@thefinancebureau.co.uk</a>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener"><?= icon('phone', 16) ?> +44 7308 504426</a>
        </div>
      </div>
      <?php foreach ($services as $cat): ?>
      <div class="footer-col">
        <h4><?= htmlspecialchars($cat['label']) ?></h4>
        <?php foreach ($cat['items'] as $item): ?>
        <a href="<?= $baseUrl ?? '' ?>/services/<?= $cat['slug'] ?>/<?= $item['slug'] ?>"><?= htmlspecialchars($item['label']) ?></a>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> The Finance Bureau. All rights reserved.</span>
      <span class="footer-legal">
        <a href="<?= $baseUrl ?? '' ?>/privacy-policy">Privacy Policy</a>
        <a href="<?= $baseUrl ?? '' ?>/terms">Terms</a>
      </span>
      <a href="#top" class="footer-top-link">Back to top <?= icon('arrow', 14) ?></a>
    </div>
  </div>
</footer>

<a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" rel="noopener" class="whatsapp-float" aria-label="Message us on WhatsApp">
  <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M17.5 14.4c-.3-.1-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.4-1.5-.9-.8-1.5-1.8-1.6-2.1-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.1.2-.3.2-.4.1-.2 0-.3 0-.5-.1-.1-.7-1.6-.9-2.2-.2-.5-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4s1 2.8 1.2 3c.1.2 2.1 3.2 5 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.6.2-1.2.2-1.3-.1-.2-.3-.3-.6-.4z"/>
    <path d="M12 2C6.5 2 2 6.5 2 12c0 1.9.5 3.6 1.4 5.1L2 22l5-1.4C8.4 21.5 10.1 22 12 22c5.5 0 10-4.5 10-10S17.5 2 12 2zm0 18.2c-1.7 0-3.3-.5-4.6-1.3l-.3-.2-3 .8.8-2.9-.2-.3C3.9 15 3.2 13.5 3.2 12 3.2 7.1 7.1 3.2 12 3.2S20.8 7.1 20.8 12 16.9 20.2 12 20.2z"/>
  </svg>
</a>

<script src="<?= $baseUrl ?? '' ?>/assets/js/main.js?v=<?= @filemtime(__DIR__ . '/../assets/js/main.js') ?: '1' ?>"></script>
</body>
</html>

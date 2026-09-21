<?php
/**
 * Renders the brand mark: a crest-style badge (rounded square, inset seal
 * ring, FB monogram) rather than a plain text-in-a-box placeholder.
 */
function renderLogoMark($size = 36) {
    $id = 'logoGrad' . mt_rand(1000, 9999);
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 40 40" fill="none" class="logo-mark" aria-hidden="true">
        <defs>
          <linearGradient id="' . $id . '" x1="2" y1="2" x2="38" y2="38" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#16305C"/>
            <stop offset="1" stop-color="#0B1E3D"/>
          </linearGradient>
        </defs>
        <rect x="1" y="1" width="38" height="38" rx="10" fill="url(#' . $id . ')"/>
        <circle cx="20" cy="20" r="14.5" stroke="#C9A24B" stroke-width="1" opacity="0.55"/>
        <text x="20" y="26" text-anchor="middle" font-family="Fraunces, Georgia, serif" font-weight="600" font-size="16" fill="#F3E8CC">FB</text>
        <circle cx="20" cy="7.5" r="1.1" fill="#C9A24B"/>
      </svg>';
}

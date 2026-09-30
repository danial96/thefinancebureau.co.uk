<?php
/**
 * Renders the brand mark image. $size is the rendered height in px;
 * width is derived from the source image's aspect ratio (1500:1656)
 * so the "F" mark is never stretched/squished.
 */
function renderLogoMark($size = 36, $baseUrl = '') {
    $width = round($size * (1500 / 1656));
    return '<img src="' . $baseUrl . '/assets/images/logo-mark.png" alt="The Finance Bureau" width="' . $width . '" height="' . $size . '" class="logo-mark" style="display:block; width:' . $width . 'px; height:' . $size . 'px;">';
}

/**
 * Full lockup (icon + wordmark baked into one image). $height is the
 * rendered height in px; width is derived from the source's aspect
 * ratio (2000:758).
 */
function renderLogoLockup($height = 40, $baseUrl = '') {
    $width = round($height * (2000 / 758));
    return '<img src="' . $baseUrl . '/assets/images/logo-lockup.png" alt="The Finance Bureau" width="' . $width . '" height="' . $height . '" class="logo-lockup-img" style="display:block; width:' . $width . 'px; height:' . $height . 'px;">';
}

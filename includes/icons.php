<?php
function icon($name, $size = 24) {
    $paths = [
        'briefcase'  => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5.5A1.5 1.5 0 0 1 10.5 4h3A1.5 1.5 0 0 1 15 5.5V7"/><path d="M3 12.5h18"/>',
        'chart'      => '<rect x="4" y="11" width="4" height="9" rx="0.5"/><rect x="10" y="5.5" width="4" height="14.5" rx="0.5"/><rect x="16" y="14.5" width="4" height="5.5" rx="0.5"/>',
        'palette'    => '<circle cx="7.5" cy="13" r="3.5"/><circle cx="14" cy="7.5" r="3.5"/><circle cx="16.5" cy="15.5" r="3.5"/>',
        'megaphone'  => '<path d="M4 10.5v3a1 1 0 0 0 1 1h1.6l3.9 3.7V5.8L6.6 9.5H5a1 1 0 0 0-1 1Z"/><path d="M14.5 8.3a4 4 0 0 1 0 7.4"/><path d="M17.5 5.7a8 8 0 0 1 0 12.6"/>',
        'check'      => '<path d="M20 6 9 17l-5-5"/>',
        'arrow'      => '<path d="M5 12h14"/><path d="M13 6l6 6-6 6"/>',
        'shield'     => '<path d="M12 2.5 4 5.5V11c0 5 3.4 8.7 8 9.9 4.6-1.2 8-4.9 8-9.9V5.5Z"/><path d="m9 12 2 2 4-4"/>',
        'pencil'     => '<path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"/><path d="M14.5 5.5l3 3"/>',
        'users'      => '<circle cx="9" cy="8" r="3.2"/><path d="M2.5 20c0-3.6 2.9-6.5 6.5-6.5s6.5 2.9 6.5 6.5"/><path d="M16.5 4.7a3.2 3.2 0 0 1 0 6.2"/><path d="M18.5 13.8c2.3.7 4 2.9 4 5.5"/>',
        'bolt'       => '<path d="M13 2 4 13.5h6L10 22l9.5-11.5h-6Z"/>',
        'phone'      => '<path d="M6.6 10.8c1.3 2.6 3.4 4.7 6 6l1.9-1.9a1 1 0 0 1 1.1-.2c1.1.4 2.3.6 3.5.6a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.7 21 3 13.3 3 4a1 1 0 0 1 1-1h3.7a1 1 0 0 1 1 1c0 1.2.2 2.4.6 3.5a1 1 0 0 1-.2 1.1Z"/>',
        'mail'       => '<rect x="2.5" y="4.5" width="19" height="15" rx="2"/><path d="m3 6 9 7 9-7"/>',
        'building'   => '<rect x="4" y="2.5" width="12" height="19" rx="1"/><path d="M8 7h1M8 11h1M8 15h1M12 7h1M12 11h1M12 15h1"/><path d="M16 10h3.5A1.5 1.5 0 0 1 21 11.5V21"/><path d="M16 21.5h5"/>',
        'chevron'    => '<path d="m6 9 6 6 6-6"/>',
    ];
    $p = $paths[$name] ?? $paths['check'];
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">' . $p . '</svg>';
}

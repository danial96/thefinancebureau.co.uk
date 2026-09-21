<?php
$service = [
    'category' => 'artwork', 'catLabel' => 'Artwork', 'catSlug' => 'artwork', 'catIcon' => 'palette',
    'label' => 'Stationery & Business Essentials',
    'tagline' => 'The everyday brand assets that make a new company look like an established one.',
    'price' => 'From £180',
    'intro' => [
        "First impressions rarely come from your website. They come from an email signature, an invoice, or a business card handed over at a meeting. We design the everyday essentials your business needs, consistent with your brand from the very first document you send.",
        "Everything is delivered print-ready and digitally, so you're covered whether you're handing out cards or sending your hundredth invoice.",
    ],
    'features' => [
        ['Business card design', 'Print-ready cards that reflect your brand identity.'],
        ['Letterhead design', 'A professional letterhead for official correspondence.'],
        ['Email signature design', 'A consistent, branded signature for your whole team.'],
        ['Invoice & quote templates', 'Branded templates ready to drop your details into.'],
        ['Compliment slips & envelopes', 'Matching stationery for a complete, professional set.'],
        ['Source files included', 'Editable files handed over, not just flattened exports.'],
    ],
    'faqs' => [
        ['Do you design a logo as part of this?', 'This service assumes you already have brand assets or a logo in place. If you need a logo designed first, let us know and we\'ll scope that separately.'],
        ['What file formats will I receive?', 'Print-ready PDFs plus editable source files, so you can make small updates yourself down the line.'],
        ['How long does it take?', 'Typical turnaround is a few working days once your brand details are confirmed.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

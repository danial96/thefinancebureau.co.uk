<?php
$service = [
    'category' => 'marketing', 'catLabel' => 'Marketing', 'catSlug' => 'marketing', 'catIcon' => 'megaphone',
    'label' => 'Search Engine Marketing',
    'tagline' => 'Google & YouTube Ads that convert, managed by people who watch the numbers weekly.',
    'intro' => [
        "Paid search can be one of the fastest ways to reach customers who are already looking for what you offer, or one of the quickest ways to burn through a budget with nothing to show for it. We manage Google and YouTube Ads campaigns built around actual conversions, not just clicks.",
        "That means proper keyword research, conversion tracking set up correctly, and ongoing optimisation, not a campaign that gets set up once and left alone.",
    ],
    'features' => [
        ['Keyword & market research', 'Targeting the searches that actually lead to business, not just traffic.'],
        ['Google Search & Display campaigns', 'Campaigns built and structured for measurable performance.'],
        ['YouTube Ads', 'Video campaigns to reach audiences beyond search.'],
        ['Conversion tracking setup', 'Proper tracking so you know exactly what your ad spend is delivering.'],
        ['Landing page recommendations', 'Guidance on what to fix if your landing pages are holding back conversions.'],
        ['Weekly optimisation', 'Bids, targeting and creative reviewed and adjusted regularly, not left on autopilot.'],
    ],
    'faqs' => [
        ['What\'s the minimum ad spend?', 'This varies by industry and goals. We\'ll recommend a realistic starting budget once we understand your market.'],
        ['Is ad spend included in your fee?', 'No, our management fee is separate from the ad spend paid directly to Google.'],
        ['How soon will I see results?', 'Search campaigns can generate leads quickly, but meaningful optimisation typically takes a few weeks of data to get right.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

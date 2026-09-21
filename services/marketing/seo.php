<?php
$service = [
    'category' => 'marketing', 'catLabel' => 'Marketing', 'catSlug' => 'marketing', 'catIcon' => 'megaphone',
    'label' => 'Search Engine Optimisation',
    'tagline' => 'On & off page, and technical SEO: built for rankings that hold up over time.',
    'intro' => [
        "SEO that works isn't a one-off checklist. It's ongoing work across your content, your site's technical health, and how the rest of the web references you. We cover all three, rather than optimising one area while ignoring the rest.",
        "The goal isn't just higher rankings for their own sake, but rankings for the searches that actually bring in customers.",
    ],
    'features' => [
        ['Technical SEO audit', 'Site speed, crawlability and indexing issues identified and fixed.'],
        ['On-page optimisation', 'Titles, meta descriptions, headings and content structured properly.'],
        ['Keyword strategy', 'Targeting search terms with real commercial intent for your business.'],
        ['Off-page & link building', 'Building your site\'s authority through legitimate, relevant links.'],
        ['Local SEO', 'Optimising for local search if your business serves specific areas.'],
        ['Monthly reporting', 'Rankings, traffic and progress tracked and reported clearly.'],
    ],
    'faqs' => [
        ['How long does SEO take to show results?', 'Meaningful movement typically takes a few months. SEO is a compounding, long-term channel rather than an instant one.'],
        ['Do you write the content too?', 'We advise on content strategy and structure; let us know if you\'d also like full content writing included in scope.'],
        ['Will this work alongside paid ads?', 'Yes, SEO and paid search work well together and we\'re happy to coordinate both if you\'re running both services with us.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

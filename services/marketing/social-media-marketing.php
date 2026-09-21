<?php
$service = [
    'category' => 'marketing', 'catLabel' => 'Marketing', 'catSlug' => 'marketing', 'catIcon' => 'megaphone',
    'label' => 'Social Media Marketing',
    'tagline' => 'Meta, TikTok & LinkedIn, managed end-to-end: from content to paid campaigns.',
    'intro' => [
        "Posting occasionally isn't a social media strategy. We manage your presence across Meta (Facebook & Instagram), TikTok and LinkedIn with a proper content plan, consistent posting, and paid campaigns that actually target the right audience.",
        "You get a clear content calendar, performance reporting, and a team that adapts the approach based on what's actually working, not just what looks good on paper.",
    ],
    'features' => [
        ['Platform strategy', 'A tailored approach for each platform your audience actually uses.'],
        ['Content planning & calendar', 'A consistent posting schedule planned around your business goals.'],
        ['Organic content creation', 'Posts, captions and creative built for each platform.'],
        ['Paid campaign management', 'Meta, TikTok and LinkedIn ads set up, targeted and optimised.'],
        ['Community management', 'Comments and messages monitored and responded to.'],
        ['Monthly performance reporting', 'Clear reporting on reach, engagement and conversions.'],
    ],
    'faqs' => [
        ['Which platforms do you cover?', 'Meta (Facebook & Instagram), TikTok and LinkedIn as standard. Let us know if you need another platform covered.'],
        ['Do you create the content, or just post it?', 'We handle both, from planning and creating content through to publishing and community management.'],
        ['Is paid advertising included?', 'Paid campaign management is available as part of this service; ad spend itself is separate from our management fee.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

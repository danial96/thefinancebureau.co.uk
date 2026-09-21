<?php
$service = [
    'category' => 'startup', 'catLabel' => 'Startup', 'catSlug' => 'startup', 'catIcon' => 'briefcase',
    'label' => 'UK Business Formation',
    'tagline' => 'Register your UK Limited Company properly, quickly, and without the paperwork headache.',
    'intro' => [
        "Starting a UK company shouldn't mean weeks of back-and-forth with Companies House or guesswork about what documents you actually need. We handle the entire registration from start to finish, so you can focus on running your business rather than filing paperwork.",
        "Whether you're based in the UK or forming a company from abroad, we set you up as a properly registered, ready-to-trade UK Limited Company, with all the supporting documents and accounts you'll need from day one.",
    ],
    'features' => [
        ['Companies House registration', 'Your Limited Company registered and confirmed, ready to trade.'],
        ['Registered office address', 'A compliant UK office address included for your first year.'],
        ['Company documents, digitally', 'Certificate of Incorporation, Memorandum & Articles of Association emailed to you.'],
        ['Government Gateway account', 'Your HMRC tax account created and linked to your company.'],
        ['UTR & Corporation Tax setup', 'Your Unique Taxpayer Reference obtained and Corporation Tax activated.'],
        ['Name availability check', 'We confirm your chosen company name is available before you commit.'],
        ['No signatures, no paperwork', 'The entire process is handled online, nothing to print or post.'],
    ],
    'faqs' => [
        ['How long does registration take?', 'Most companies are registered with Companies House within 24 hours of us receiving your details, though this can occasionally take longer during high-demand periods.'],
        ['Can I register a UK company if I don\'t live in the UK?', 'Yes, non-UK residents can form a UK Limited Company. You\'ll need a registered office address in the UK, which we provide as part of this service.'],
        ['What do I need to get started?', 'Your proposed company name, details of directors and shareholders, and proof of identity. We\'ll guide you through exactly what\'s needed once you get in touch.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

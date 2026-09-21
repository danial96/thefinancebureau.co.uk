<?php
$service = [
    'category' => 'startup', 'catLabel' => 'Startup', 'catSlug' => 'startup', 'catIcon' => 'briefcase',
    'label' => "LTD's, LLP's & Self Employment",
    'tagline' => 'Not sure which business structure fits? We help you choose, then set it up correctly.',
    'intro' => [
        "Limited Company, Limited Liability Partnership, or registering as self-employed: each structure has real consequences for your tax bill, your personal liability, and how much admin you'll be doing every year. Picking the wrong one is a common, costly mistake.",
        "We walk through your situation with you, how you plan to grow, who else is involved, and how much liability protection you actually need, and then register the right structure on your behalf.",
    ],
    'features' => [
        ['A structure recommendation', 'A clear, plain-English recommendation based on your specific situation.'],
        ['Limited Company formation', 'Full company registration if a Ltd structure suits you best.'],
        ['LLP registration', 'Partnership formation for multi-partner professional or trading businesses.'],
        ['Self-employment registration', 'HMRC registration for sole traders, including your UTR.'],
        ['Ongoing structure reviews', 'As your business grows, we flag when it\'s time to switch structures.'],
        ['Plain-English guidance', 'No jargon, just a clear explanation of what each option means for you.'],
    ],
    'faqs' => [
        ['What\'s the difference between an LTD and self-employment?', 'A Limited Company is a separate legal entity, which limits your personal liability but comes with more reporting obligations. Self-employment is simpler to run but offers no separation between you and the business\'s debts.'],
        ['When does an LLP make sense?', 'LLPs typically suit businesses with multiple partners, such as professional practices, who want liability protection along with partnership-style profit sharing.'],
        ['Can I switch structures later?', 'Yes, many businesses start as sole traders and incorporate as an LTD once they grow. We can help you make that transition when the time is right.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

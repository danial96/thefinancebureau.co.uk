<?php
$service = [
    'category' => 'accounting', 'catLabel' => 'Accounting', 'catSlug' => 'accounting', 'catIcon' => 'chart',
    'label' => 'UK Accountancy',
    'tagline' => 'Qualified UK accountants handling your bookkeeping and year-end accounts, so nothing slips.',
    'intro' => [
        "Falling behind on bookkeeping is one of the easiest ways for a growing business to end up with a nasty surprise at year end. Our accountants keep your books current throughout the year, not just when a deadline is looming.",
        "You get a dedicated accountant who understands your business, plus year-end accounts prepared and filed with Companies House and HMRC on time, every time.",
    ],
    'features' => [
        ['Monthly bookkeeping', 'Your income, expenses and transactions kept accurately up to date.'],
        ['Year-end statutory accounts', 'Prepared to Companies House standards and filed on your behalf.'],
        ['Companies House filing', 'Confirmation statements and annual accounts submitted on time.'],
        ['A dedicated accountant', 'One qualified accountant who knows your business, not a rotating call centre.'],
        ['Cloud accounting software', 'Real-time visibility of your numbers, wherever you are.'],
        ['Deadline reminders', 'We flag upcoming filing dates well before they\'re due.'],
    ],
    'faqs' => [
        ['Do you work with businesses outside the UK?', 'Yes, many of our clients run UK companies while based elsewhere. All communication and reporting is handled remotely.'],
        ['What software do you use?', 'We work with leading cloud accounting platforms so you always have real-time access to your figures.'],
        ['Is this a rolling monthly service?', 'Yes, this is an ongoing service billed monthly, not a one-off filing.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

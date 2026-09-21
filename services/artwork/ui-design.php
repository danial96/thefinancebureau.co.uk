<?php
$service = [
    'category' => 'artwork', 'catLabel' => 'Artwork', 'catSlug' => 'artwork', 'catIcon' => 'palette',
    'label' => 'UI Design',
    'tagline' => 'Modern UI/UX design for web & apps that\'s as functional as it is good-looking.',
    'price' => 'From £600',
    'intro' => [
        "Good UI design isn't just aesthetics. It's the difference between a visitor converting into a customer or bouncing within seconds. We design interfaces for websites and applications that are clear, on-brand, and built around how people actually use them.",
        "From early wireframes through to polished, developer-ready screens, we work closely with you so the end result matches both your brand and your users' expectations.",
    ],
    'features' => [
        ['UX research & wireframing', 'Structuring the user journey before a single pixel is polished.'],
        ['High-fidelity UI design', 'Pixel-perfect screens for web and mobile, on-brand throughout.'],
        ['Design systems', 'Reusable components and style guides so your product stays consistent as it grows.'],
        ['Responsive layouts', 'Designs that work across desktop, tablet and mobile.'],
        ['Prototyping', 'Clickable prototypes so you can test the flow before development starts.'],
        ['Developer handoff', 'Clean, organised files ready for your development team to build from.'],
    ],
    'faqs' => [
        ['Do you also build the website or app?', 'This service covers design. If you need development as well, let us know your requirements and we\'ll advise on the best way forward.'],
        ['What tools do you design in?', 'We use industry-standard design tools and hand off files in formats your developers can work with directly.'],
        ['Can you redesign an existing product?', 'Yes, we regularly work on redesigns as well as new products, starting with an audit of what\'s currently working and what isn\'t.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

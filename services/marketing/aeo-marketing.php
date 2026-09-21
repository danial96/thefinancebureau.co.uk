<?php
$service = [
    'category' => 'marketing', 'catLabel' => 'Marketing', 'catSlug' => 'marketing', 'catIcon' => 'megaphone',
    'label' => 'AEO Marketing',
    'tagline' => 'Get recommended by AI search & answer engines, not just ranked on a results page.',
    'intro' => [
        "More people now ask ChatGPT, Perplexity, Google's AI Overviews and similar tools for recommendations instead of clicking through ten blue links. Answer Engine Optimisation (AEO) is about structuring your content so these AI systems can understand it, trust it, and cite your business as the answer.",
        "This is a newer discipline than traditional SEO, and the businesses that get it right early gain a real edge in where AI tools point their users. We build your content and site structure to be genuinely useful source material for these engines.",
    ],
    'features' => [
        ['AI visibility audit', 'Checking whether AI engines currently reference your business at all, and how.'],
        ['Structured content & schema markup', 'Making your content machine-readable so AI systems can parse it accurately.'],
        ['Answer-first content structuring', 'Content written to directly and clearly answer the questions your customers ask.'],
        ['Entity & brand consistency', 'Ensuring your business is described consistently across the web, which AI models rely on.'],
        ['FAQ & knowledge content', 'Building out the question-and-answer content AI engines pull from most.'],
        ['Ongoing monitoring', 'Tracking how and where your brand appears in AI-generated answers over time.'],
    ],
    'faqs' => [
        ['Is AEO different from SEO?', 'They overlap but aren\'t the same. SEO targets search engine result pages, while AEO focuses on being the source an AI system cites or recommends directly in its answer.'],
        ['Which AI tools does this cover?', 'We optimise for the major answer engines and AI search tools, including AI-generated overviews in traditional search results.'],
        ['Can you guarantee we\'ll be cited by AI tools?', 'No ethical agency can guarantee citation by any specific AI system. We focus on the structural and content factors known to improve your odds significantly.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

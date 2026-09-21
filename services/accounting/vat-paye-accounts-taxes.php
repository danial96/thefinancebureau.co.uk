<?php
$service = [
    'category' => 'accounting', 'catLabel' => 'Accounting', 'catSlug' => 'accounting', 'catIcon' => 'chart',
    'label' => 'VAT, PAYE, Accounts & Taxes',
    'tagline' => 'VAT returns, payroll and tax filings handled correctly and on time, every quarter.',
    'intro' => [
        "Between VAT deadlines, PAYE submissions, corporation tax and self-assessment, UK tax compliance has a lot of moving parts, and missing any of them means penalties. We manage the full cycle for you.",
        "This service covers the recurring tax and payroll obligations that come with running a UK business, so you're never caught off guard by a deadline.",
    ],
    'features' => [
        ['VAT registration', 'We register you for VAT when your turnover requires it, or voluntarily if it helps your business.'],
        ['Quarterly VAT returns', 'Prepared and submitted under Making Tax Digital rules.'],
        ['PAYE & payroll setup', 'Employees and directors set up on payroll correctly from day one.'],
        ['Monthly payroll runs', 'Payslips, PAYE and National Insurance calculated and submitted to HMRC.'],
        ['Corporation Tax returns', 'Your CT600 prepared and filed based on your annual accounts.'],
        ['Self-assessment', 'Personal tax returns for directors and self-employed clients.'],
    ],
    'faqs' => [
        ['When do I need to register for VAT?', 'Registration is mandatory once your taxable turnover passes the current HMRC threshold, though you can register voluntarily below that if it benefits your business.'],
        ['Can you run payroll for just one director?', 'Yes, we set up and run payroll for businesses of any size, including single-director companies.'],
        ['What happens if I\'ve missed a filing deadline?', 'Get in touch as soon as possible. We can often help bring your filings up to date and minimise any penalties.'],
    ],
];
require __DIR__ . '/../../includes/service-page.php';

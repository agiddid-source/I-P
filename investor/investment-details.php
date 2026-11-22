
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Investment Details';
$pageHeading = 'Investment Details';
$pageSubtitle = 'Review the opportunity and understand its terms.';

$currentPage = 'investments';

/*
|--------------------------------------------------------------------------
| MOCK PRODUCT CATALOGUE
|--------------------------------------------------------------------------
*/

$products = [
    'INV-001' => [
        'id' => 'INV-001',
        'name' => 'Global Fixed Income Fund',
        'category' => 'Fixed Income',
        'currency' => 'USD',
        'target_return' => 8.5,
        'minimum' => 500,
        'term' => '12 months',
        'risk' => 'Low',
        'liquidity' => 'At maturity',
        'status' => 'Open',
        'icon' => 'fa-landmark',
        'description' => 'A diversified fixed-income investment concept focused on income-generating securities.',
        'overview' => 'The Global Fixed Income Fund is an illustrative investment product designed to provide exposure to a diversified portfolio of fixed-income securities. Its strategy focuses on income generation and capital preservation, although neither is guaranteed.',
        'strategy' => 'The illustrative strategy involves exposure to government bonds, investment-grade corporate debt and other fixed-income instruments across selected markets.',
        'suitable_for' => [
            'Investors seeking fixed-income exposure',
            'Investors with a medium-term investment horizon',
            'Investors who understand interest-rate and credit risk'
        ],
        'fees' => [
            'Management fee' => '1.0% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to product terms'
        ],
        'features' => [
            'Diversified fixed-income exposure',
            'Income-oriented investment strategy',
            'Defined illustrative investment term',
            'Professional portfolio management concept'
        ],
        'color' => 'blue'
    ],

    'INV-002' => [
        'id' => 'INV-002',
        'name' => 'Commercial Property Fund',
        'category' => 'Real Estate',
        'currency' => 'USD',
        'target_return' => 12.0,
        'minimum' => 1000,
        'term' => '24 months',
        'risk' => 'Medium',
        'liquidity' => 'Limited',
        'status' => 'Open',
        'icon' => 'fa-building',
        'description' => 'A property investment concept targeting income from commercial real estate assets.',
        'overview' => 'This illustrative real estate product provides exposure to commercial property assets with a strategy focused on rental income and potential long-term capital appreciation.',
        'strategy' => 'The illustrative strategy involves acquiring or participating in commercial property assets and generating income through leasing arrangements.',
        'suitable_for' => [
            'Investors seeking real estate exposure',
            'Investors with a longer investment horizon',
            'Investors comfortable with limited liquidity'
        ],
        'fees' => [
            'Management fee' => '1.5% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to product terms'
        ],
        'features' => [
            'Commercial property exposure',
            'Potential rental income',
            'Longer-term investment horizon',
            'Diversification beyond traditional securities'
        ],
        'color' => 'emerald'
    ],

    'INV-003' => [
        'id' => 'INV-003',
        'name' => 'Private Credit Portfolio',
        'category' => 'Private Credit',
        'currency' => 'EUR',
        'target_return' => 10.5,
        'minimum' => 750,
        'term' => '18 months',
        'risk' => 'Medium',
        'liquidity' => 'At maturity',
        'status' => 'Open',
        'icon' => 'fa-hand-holding-dollar',
        'description' => 'A private credit investment concept involving diversified lending opportunities.',
        'overview' => 'An illustrative private credit portfolio focused on lending opportunities to selected businesses and income-generating borrowers.',
        'strategy' => 'The strategy involves evaluating borrowers, structuring credit arrangements and monitoring repayment performance.',
        'suitable_for' => [
            'Investors seeking alternative credit exposure',
            'Investors who understand borrower default risk',
            'Investors comfortable with limited secondary-market liquidity'
        ],
        'fees' => [
            'Management fee' => '1.25% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to product terms'
        ],
        'features' => [
            'Private lending exposure',
            'Diversified borrower strategy',
            'Income-focused portfolio concept',
            'Defined illustrative investment term'
        ],
        'color' => 'purple'
    ],

    'INV-004' => [
        'id' => 'INV-004',
        'name' => 'Global Equity Portfolio',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 15.0,
        'minimum' => 250,
        'term' => 'Open-ended',
        'risk' => 'High',
        'liquidity' => 'Subject to dealing terms',
        'status' => 'Open',
        'icon' => 'fa-chart-line',
        'description' => 'An equity portfolio concept designed to provide exposure to global public markets.',
        'overview' => 'The Global Equity Portfolio is an illustrative investment product designed to provide exposure to listed companies across different regions and sectors.',
        'strategy' => 'The illustrative strategy involves investing in a diversified selection of publicly traded equities, with portfolio allocations adjusted according to market conditions.',
        'suitable_for' => [
            'Investors seeking long-term equity exposure',
            'Investors comfortable with market volatility',
            'Investors with a higher risk tolerance'
        ],
        'fees' => [
            'Management fee' => '1.0% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to dealing terms'
        ],
        'features' => [
            'Global equity exposure',
            'Diversification across sectors',
            'Long-term growth-oriented strategy',
            'Open-ended product concept'
        ],
        'color' => 'orange'
    ],

    'INV-005' => [
        'id' => 'INV-005',
        'name' => 'Infrastructure Income Fund',
        'category' => 'Infrastructure',
        'currency' => 'GBP',
        'target_return' => 9.0,
        'minimum' => 1500,
        'term' => '36 months',
        'risk' => 'Medium',
        'liquidity' => 'Limited',
        'status' => 'Open',
        'icon' => 'fa-bridge',
        'description' => 'An infrastructure investment concept focused on long-term income-generating assets.',
        'overview' => 'An illustrative infrastructure fund concept offering exposure to essential infrastructure assets with potential long-term income characteristics.',
        'strategy' => 'The strategy involves participation in infrastructure projects and assets that may generate revenue through long-term operating arrangements.',
        'suitable_for' => [
            'Investors seeking alternative asset exposure',
            'Investors with longer investment horizons',
            'Investors comfortable with limited liquidity'
        ],
        'fees' => [
            'Management fee' => '1.5% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to product terms'
        ],
        'features' => [
            'Infrastructure asset exposure',
            'Long-term income-oriented concept',
            'Potential portfolio diversification',
            'Defined illustrative investment term'
        ],
        'color' => 'cyan'
    ],

    'INV-006' => [
        'id' => 'INV-006',
        'name' => 'Emerging Markets Fund',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 14.0,
        'minimum' => 500,
        'term' => 'Open-ended',
        'risk' => 'High',
        'liquidity' => 'Subject to dealing terms',
        'status' => 'Open',
        'icon' => 'fa-earth-americas',
        'description' => 'An emerging markets investment concept with exposure to developing economies.',
        'overview' => 'This illustrative fund concept seeks exposure to companies and markets in developing economies, offering potential growth alongside elevated market and currency risks.',
        'strategy' => 'The strategy involves selecting listed equities and other eligible securities across selected emerging markets.',
        'suitable_for' => [
            'Investors seeking emerging-market exposure',
            'Investors with a long-term horizon',
            'Investors comfortable with higher volatility and currency risk'
        ],
        'fees' => [
            'Management fee' => '1.5% annually (illustrative)',
            'Subscription fee' => 'None (illustrative)',
            'Redemption fee' => 'Subject to dealing terms'
        ],
        'features' => [
            'Emerging-market exposure',
            'Regional and sector diversification',
            'Growth-oriented investment concept',
            'Open-ended product concept'
        ],
        'color' => 'rose'
    ]
];

/*
|--------------------------------------------------------------------------
| PRODUCT SELECTION
|--------------------------------------------------------------------------
*/

$productId = $_GET['id'] ?? 'INV-001';

if (!isset($products[$productId])) {
    http_response_code(404);
    $product = null;
} else {
    $product = $products[$productId];
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
?>

<div class="lg:ml-64 min-h-screen bg-gray-50">

    <?php include ROOT_PATH . '/components/investor/topbar.php'; ?>

    <main class="px-4 sm:px-6 lg:px-8 py-6 pb-28 lg:pb-8">

        <?php if (!$product): ?>

            <div class="max-w-xl mx-auto text-center bg-white border border-gray-200 rounded-xl p-10 mt-12">

                <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-5 text-gray-400 text-2xl">
                    <i class="fas fa-box-open"></i>
                </div>

                <h1 class="text-xl font-bold text-gray-900">
                    Investment not found
                </h1>

                <p class="text-sm text-gray-500 mt-2">
                    The investment opportunity you're looking for doesn't exist.
                </p>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="inline-flex mt-6 bg-[#0B1F33] text-white px-5 py-3 rounded-lg text-sm font-semibold">
                    Back to Investments
                </a>

            </div>

        <?php else: ?>

            <!-- BREADCRUMB -->
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-5">
                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="hover:text-emerald-700">
                    Investments
                </a>

                <i class="fas fa-chevron-right text-xs"></i>

                <span class="text-gray-900 font-medium">Product Details</span>
            </div>

            <!-- PRODUCT HEADER -->
            <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-7 mb-6">

                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">

                    <div class="flex items-start gap-4">

                        <div class="w-14 h-14 shrink-0 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-xl">
                            <i class="fas <?= htmlspecialchars($product['icon']) ?>"></i>
                        </div>

                        <div>
                            <div class="flex flex-wrap items-center gap-2 mb-2">

                                <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2.5 py-1 rounded-full">
                                    <?= htmlspecialchars($product['category']) ?>
                                </span>

                                <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">
                                    <i class="fas fa-circle text-[7px] mr-1"></i>
                                    <?= htmlspecialchars($product['status']) ?>
                                </span>

                            </div>

                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                                <?= htmlspecialchars($product['name']) ?>
                            </h1>

                            <p class="text-sm text-gray-500 mt-2">
                                Product reference: <?= htmlspecialchars($product['id']) ?>
                            </p>

                            <p class="text-sm text-gray-500 mt-3 max-w-2xl leading-relaxed">
                                <?= htmlspecialchars($product['description']) ?>
                            </p>
                        </div>

                    </div>

                    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 lg:min-w-[190px]">

                        <a href="<?= BASE_URL ?>/investor/investment-confirmation.php?id=<?= urlencode($product['id']) ?>"
                           class="inline-flex items-center justify-center gap-2 bg-[#0B1F33] hover:bg-[#163A59] text-white font-semibold text-sm px-5 py-3 rounded-lg transition">
                            Invest Now
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>

                        <a href="<?= BASE_URL ?>/investor/investments.php"
                           class="inline-flex items-center justify-center gap-2 border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold text-sm px-5 py-3 rounded-lg transition">
                            <i class="fas fa-arrow-left text-xs"></i>
                            Back to Marketplace
                        </a>

                    </div>

                </div>

            </section>

            <!-- KEY METRICS -->
            <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <p class="text-sm text-gray-500">Illustrative target return</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">
                        <?= number_format($product['target_return'], 1) ?>%
                    </p>
                    <p class="text-xs text-gray-400 mt-1">Per annum · Not guaranteed</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <p class="text-sm text-gray-500">Minimum investment</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">
                        <?= formatInvestmentAmount($product['minimum'], $product['currency']) ?>
                    </p>
                    <p class="text-xs text-gray-400 mt-1">Illustrative amount</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <p class="text-sm text-gray-500">Investment term</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">
                        <?= htmlspecialchars($product['term']) ?>
                    </p>
                    <p class="text-xs text-gray-400 mt-1">Indicative product term</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <p class="text-sm text-gray-500">Risk classification</p>
                    <p class="text-2xl font-bold text-gray-900 mt-2">
                        <?= htmlspecialchars($product['risk']) ?>
                    </p>
                    <p class="text-xs text-gray-400 mt-1">Illustrative risk category</p>
                </div>

            </section>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                <!-- MAIN CONTENT -->
                <div class="xl:col-span-2 space-y-6">

                    <!-- OVERVIEW -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900">
                            Investment Overview
                        </h2>

                        <p class="text-sm text-gray-500 leading-relaxed mt-4">
                            <?= htmlspecialchars($product['overview']) ?>
                        </p>

                        <div class="mt-6 pt-5 border-t border-gray-100">

                            <h3 class="text-sm font-bold text-gray-900 mb-3">
                                Investment Strategy
                            </h3>

                            <p class="text-sm text-gray-500 leading-relaxed">
                                <?= htmlspecialchars($product['strategy']) ?>
                            </p>

                        </div>

                    </section>

                    <!-- FEATURES -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900 mb-5">
                            Key Features
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <?php foreach ($product['features'] as $feature): ?>

                                <div class="flex items-start gap-3">

                                    <div class="w-8 h-8 shrink-0 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>

                                    <p class="text-sm text-gray-600 pt-1">
                                        <?= htmlspecialchars($feature) ?>
                                    </p>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </section>

                    <!-- SUITABILITY -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900 mb-4">
                            Investor Suitability
                        </h2>

                        <p class="text-sm text-gray-500 mb-5">
                            This illustrative product may be relevant to investors who:
                        </p>

                        <div class="space-y-3">

                            <?php foreach ($product['suitable_for'] as $item): ?>

                                <div class="flex items-start gap-3 text-sm text-gray-600">
                                    <i class="fas fa-circle-check text-emerald-600 mt-1"></i>
                                    <span><?= htmlspecialchars($item) ?></span>
                                </div>

                            <?php endforeach; ?>

                        </div>

                        <div class="bg-amber-50 border border-amber-100 rounded-lg p-4 mt-5">

                            <div class="flex gap-3">
                                <i class="fas fa-triangle-exclamation text-amber-600 mt-1"></i>

                                <p class="text-xs text-amber-800 leading-relaxed">
                                    These characteristics are illustrative and do not establish
                                    that this product is suitable for any particular investor.
                                    Suitability and eligibility must be assessed separately.
                                </p>
                            </div>

                        </div>

                    </section>

                    <!-- FEES -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900 mb-5">
                            Fees & Charges
                        </h2>

                        <div class="divide-y divide-gray-100">

                            <?php foreach ($product['fees'] as $fee => $value): ?>

                                <div class="flex items-center justify-between gap-4 py-3 text-sm">
                                    <span class="text-gray-500">
                                        <?= htmlspecialchars($fee) ?>
                                    </span>

                                    <span class="font-semibold text-gray-900 text-right">
                                        <?= htmlspecialchars($value) ?>
                                    </span>
                                </div>

                            <?php endforeach; ?>

                        </div>

                        <p class="text-xs text-gray-400 mt-4">
                            Fees shown are illustrative only. Actual charges must be
                            disclosed in the official product documentation.
                        </p>

                    </section>

                </div>

                <!-- SIDEBAR -->
                <aside class="space-y-6">

                    <!-- INVESTMENT SNAPSHOT -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">

                        <h2 class="text-base font-bold text-gray-900 mb-5">
                            Product Snapshot
                        </h2>

                        <div class="space-y-4">

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Product type</span>
                                <span class="font-semibold text-gray-800 text-right">
                                    <?= htmlspecialchars($product['category']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Currency</span>
                                <span class="font-semibold text-gray-800">
                                    <?= htmlspecialchars($product['currency']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Risk level</span>
                                <span class="font-semibold text-gray-800">
                                    <?= htmlspecialchars($product['risk']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Liquidity</span>
                                <span class="font-semibold text-gray-800 text-right">
                                    <?= htmlspecialchars($product['liquidity']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Availability</span>
                                <span class="font-semibold text-emerald-700">
                                    <?= htmlspecialchars($product['status']) ?>
                                </span>
                            </div>

                        </div>

                        <a href="<?= BASE_URL ?>/investor/investment-confirmation.php?id=<?= urlencode($product['id']) ?>"
                           class="mt-6 block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm py-3 rounded-lg transition">
                            Proceed to Invest
                        </a>

                    </section>

                    <!-- DOCUMENTS -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">

                        <h2 class="text-base font-bold text-gray-900 mb-4">
                            Product Documents
                        </h2>

                        <div class="space-y-3">

                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                                <div class="w-9 h-9 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center">
                                    <i class="fas fa-file-pdf"></i>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">
                                        Product Factsheet
                                    </p>
                                    <p class="text-xs text-gray-400">Illustrative document</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                                <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                                    <i class="fas fa-file-lines"></i>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-gray-800">
                                        Terms & Conditions
                                    </p>
                                    <p class="text-xs text-gray-400">Illustrative document</p>
                                </div>
                            </div>

                            <p class="text-xs text-gray-400 leading-relaxed">
                                Downloadable official documents will be connected
                                when the production product catalogue is implemented.
                            </p>

                        </div>

                    </section>

                    <!-- SUPPORT -->
                    <section class="bg-[#0B1F33] rounded-xl p-5 text-white">

                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center mb-4">
                            <i class="fas fa-headset"></i>
                        </div>

                        <h3 class="font-bold">
                            Need more information?
                        </h3>

                        <p class="text-sm text-gray-300 mt-2 leading-relaxed">
                            Contact the investment support team if you need clarification
                            about product terms or eligibility.
                        </p>

                        <a href="mailto:support@example.com"
                           class="inline-flex items-center gap-2 text-sm font-semibold mt-4 text-emerald-300 hover:text-white">
                            Contact Support
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>

                    </section>

                </aside>

            </div>

            <!-- DISCLAIMER -->
            <section class="mt-7 bg-gray-100 rounded-xl p-5">

                <div class="flex gap-3">

                    <i class="fas fa-shield-halved text-gray-500 mt-1"></i>

                    <div>
                        <h3 class="text-sm font-bold text-gray-800">
                            Investment Risk Disclosure
                        </h3>

                        <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                            This is a frontend demonstration. Product information,
                            target returns, fees, terms and availability are entirely
                            illustrative. No investment offer is being made. Target
                            returns are not guaranteed, capital is at risk, and
                            investors may lose some or all of their investment.
                            Actual products must have approved documentation and
                            jurisdiction-specific eligibility before being offered.
                        </p>
                    </div>

                </div>

            </section>

        <?php endif; ?>

    </main>

    <?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>

</div>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

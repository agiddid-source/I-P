<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Explore Investments';
$pageHeading = 'Explore Investments';
$pageSubtitle = 'Discover investment opportunities that match your goals.';

$currentPage = 'investments';

/*
|--------------------------------------------------------------------------
| MOCK INVESTMENT PRODUCTS
|--------------------------------------------------------------------------
| Illustrative frontend data only. No real investment offers or execution.
*/

$products = [
    [
        'id' => 'INV-001',
        'name' => 'Global Fixed Income Fund',
        'category' => 'Fixed Income',
        'currency' => 'USD',
        'target_return' => 8.5,
        'minimum' => 500,
        'term' => '12 months',
        'risk' => 'Low',
        'liquidity' => 'At maturity',
        'description' => 'A diversified fixed-income investment concept focused on income-generating securities.',
        'icon' => 'fa-landmark',
        'color' => 'blue',
        'featured' => true,
        'status' => 'Open'
    ],
    [
        'id' => 'INV-002',
        'name' => 'Commercial Property Fund',
        'category' => 'Real Estate',
        'currency' => 'USD',
        'target_return' => 12.0,
        'minimum' => 1000,
        'term' => '24 months',
        'risk' => 'Medium',
        'liquidity' => 'Limited',
        'description' => 'A property investment concept targeting income from commercial real estate assets.',
        'icon' => 'fa-building',
        'color' => 'emerald',
        'featured' => true,
        'status' => 'Open'
    ],
    [
        'id' => 'INV-003',
        'name' => 'Private Credit Portfolio',
        'category' => 'Private Credit',
        'currency' => 'EUR',
        'target_return' => 10.5,
        'minimum' => 750,
        'term' => '18 months',
        'risk' => 'Medium',
        'liquidity' => 'At maturity',
        'description' => 'A private credit investment concept involving diversified lending opportunities.',
        'icon' => 'fa-hand-holding-dollar',
        'color' => 'purple',
        'featured' => false,
        'status' => 'Open'
    ],
    [
        'id' => 'INV-004',
        'name' => 'Global Equity Portfolio',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 15.0,
        'minimum' => 250,
        'term' => 'Open-ended',
        'risk' => 'High',
        'liquidity' => 'Subject to dealing terms',
        'description' => 'An equity portfolio concept designed to provide exposure to global public markets.',
        'icon' => 'fa-chart-line',
        'color' => 'orange',
        'featured' => false,
        'status' => 'Open'
    ],
    [
        'id' => 'INV-005',
        'name' => 'Infrastructure Income Fund',
        'category' => 'Infrastructure',
        'currency' => 'GBP',
        'target_return' => 9.0,
        'minimum' => 1500,
        'term' => '36 months',
        'risk' => 'Medium',
        'liquidity' => 'Limited',
        'description' => 'An infrastructure investment concept focused on long-term income-generating assets.',
        'icon' => 'fa-bridge',
        'color' => 'cyan',
        'featured' => false,
        'status' => 'Open'
    ],
    [
        'id' => 'INV-006',
        'name' => 'Emerging Markets Fund',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 14.0,
        'minimum' => 500,
        'term' => 'Open-ended',
        'risk' => 'High',
        'liquidity' => 'Subject to dealing terms',
        'description' => 'An emerging markets investment concept with exposure to developing economies.',
        'icon' => 'fa-earth-americas',
        'color' => 'rose',
        'featured' => false,
        'status' => 'Open'
    ]
];

function formatInvestmentAmount($amount, $currency) {
    $symbols = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£'
    ];

    $symbol = $symbols[$currency] ?? $currency . ' ';

    return $symbol . number_format($amount, 0);
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
?>

<div class="lg:ml-64 min-h-screen bg-gray-50">

    <?php include ROOT_PATH . '/components/investor/topbar.php'; ?>

    <main class="px-4 sm:px-6 lg:px-8 py-6 pb-28 lg:pb-8">

        <!-- PAGE INTRO -->
        <section class="mb-7">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4">
                <div>
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Investor Portal</span>
                        <i class="fas fa-chevron-right text-xs"></i>
                        <span class="text-gray-900 font-medium">Explore Investments</span>
                    </div>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                        Investment Marketplace
                    </h1>

                    <p class="text-sm text-gray-500 mt-2 max-w-2xl">
                        Explore available investment opportunities and compare their
                        features before making an investment decision.
                    </p>
                </div>

                <a href="<?= BASE_URL ?>/investor/portfolio.php"
                   class="inline-flex items-center justify-center gap-2 px-4 py-2.5
                          bg-white border border-gray-200 rounded-lg text-sm font-semibold
                          text-gray-700 hover:bg-gray-50 transition">
                    <i class="fas fa-briefcase"></i>
                    View Portfolio
                </a>
            </div>
        </section>

        <!-- MARKETPLACE NOTICE -->
        <section class="bg-gold-light border border-gold/30 rounded-xl p-4 mb-7">
            <div class="flex gap-3">
                <div class="w-9 h-9 shrink-0 rounded-lg bg-gold-light text-gold-dark
                            flex items-center justify-center">
                    <i class="fas fa-circle-info"></i>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-brand">
                        Explore before you invest
                    </h3>
                    <p class="text-sm text-brand mt-1 leading-relaxed">
                        Review each product's investment terms, fees, risks and eligibility
                        requirements. Product availability may vary depending on your
                        country of residence and investor classification.
                    </p>
                </div>
            </div>
        </section>

        <!-- MARKETPLACE SUMMARY -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-7">

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Available opportunities</p>
                    <span class="w-9 h-9 rounded-lg bg-accent-light text-accent
                                 flex items-center justify-center">
                        <i class="fas fa-layer-group"></i>
                    </span>
                </div>

                <p id="totalProducts" class="text-2xl font-bold text-gray-900 mt-3">
                    <?= count($products) ?>
                </p>

                <p class="text-xs text-gray-400 mt-1">Illustrative products</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Investment categories</p>
                    <span class="w-9 h-9 rounded-lg bg-gold-light text-gold-dark
                                 flex items-center justify-center">
                        <i class="fas fa-shapes"></i>
                    </span>
                </div>

                <p class="text-2xl font-bold text-gray-900 mt-3">6</p>
                <p class="text-xs text-gray-400 mt-1">Across different asset types</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Starting investment</p>
                    <span class="w-9 h-9 rounded-lg bg-purple-50 text-purple-600
                                 flex items-center justify-center">
                        <i class="fas fa-wallet"></i>
                    </span>
                </div>

                <p class="text-2xl font-bold text-gray-900 mt-3">$250</p>
                <p class="text-xs text-gray-400 mt-1">Illustrative minimum across products</p>
            </div>

        </section>

        <!-- FILTERS -->
        <section class="bg-white border border-gray-200 rounded-xl p-4 sm:p-5 mb-6">

            <div class="flex flex-col lg:flex-row lg:items-center
                        justify-between gap-4 mb-5">

                <div>
                    <h2 class="text-base font-bold text-gray-900">
                        Find your next investment
                    </h2>
                    <p class="text-xs text-gray-500 mt-1">
                        Search and refine the opportunities below.
                    </p>
                </div>

                <button type="button" id="clearFilters"
                        class="text-sm font-semibold text-accent-dark hover:text-accent-dark">
                    <i class="fas fa-rotate-left mr-1"></i>
                    Reset filters
                </button>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3">

                <!-- SEARCH -->
                <div class="sm:col-span-2 xl:col-span-1">
                    <label for="productSearch"
                           class="block text-xs font-semibold text-gray-600 mb-2">
                        Search investments
                    </label>

                    <div class="relative">
                        <i class="fas fa-search absolute left-3 top-1/2
                                  -translate-y-1/2 text-gray-400 text-sm"></i>

                        <input type="text" id="productSearch"
                               placeholder="Search by name or category..."
                               class="w-full pl-9 pr-3 py-2.5 border border-gray-200
                                      rounded-lg text-sm focus:ring-2 focus:ring-accent/10
                                      focus:border-accent outline-none">
                    </div>
                </div>

                <!-- CATEGORY -->
                <div>
                    <label for="categoryFilter"
                           class="block text-xs font-semibold text-gray-600 mb-2">
                        Investment type
                    </label>

                    <select id="categoryFilter"
                            class="w-full px-3 py-2.5 border border-gray-200 rounded-lg
                                   text-sm bg-white outline-none focus:border-accent">
                        <option value="">All categories</option>
                        <option value="Fixed Income">Fixed Income</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Private Credit">Private Credit</option>
                        <option value="Equities">Equities</option>
                        <option value="Infrastructure">Infrastructure</option>
                    </select>
                </div>

                <!-- RISK -->
                <div>
                    <label for="riskFilter"
                           class="block text-xs font-semibold text-gray-600 mb-2">
                        Risk level
                    </label>

                    <select id="riskFilter"
                            class="w-full px-3 py-2.5 border border-gray-200 rounded-lg
                                   text-sm bg-white outline-none focus:border-accent">
                        <option value="">All risk levels</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>

                <!-- CURRENCY -->
                <div>
                    <label for="currencyFilter"
                           class="block text-xs font-semibold text-gray-600 mb-2">
                        Currency
                    </label>

                    <select id="currencyFilter"
                            class="w-full px-3 py-2.5 border border-gray-200 rounded-lg
                                   text-sm bg-white outline-none focus:border-accent">
                        <option value="">All currencies</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                    </select>
                </div>

            </div>

            <div class="flex flex-col sm:flex-row sm:items-center
                        justify-between gap-3 mt-4 pt-4 border-t border-gray-100">

                <p class="text-xs text-gray-500">
                    Showing <span id="visibleCount" class="font-semibold text-gray-900"><?= count($products) ?></span>
                    opportunities
                </p>

                <div class="flex items-center gap-2">
                    <label for="sortFilter" class="text-xs text-gray-500 whitespace-nowrap">
                        Sort by:
                    </label>

                    <select id="sortFilter"
                            class="px-3 py-2 border border-gray-200 rounded-lg
                                   text-sm bg-white outline-none focus:border-accent">
                        <option value="featured">Featured first</option>
                        <option value="return-high">Target return: High to low</option>
                        <option value="minimum-low">Minimum investment: Low to high</option>
                        <option value="minimum-high">Minimum investment: High to low</option>
                    </select>
                </div>

            </div>
        </section>

        <!-- PRODUCT GRID -->
        <section>

            <div id="productGrid"
                 class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

                <?php foreach ($products as $product): ?>

                    <?php
                    $riskStyles = [
                        'Low' => 'bg-accent-light text-accent-dark',
                        'Medium' => 'bg-amber-50 text-amber-700',
                        'High' => 'bg-rose-50 text-rose-700'
                    ];

                    $colorStyles = [
                        'blue' => 'bg-gold-light text-gold-dark',
                        'emerald' => 'bg-accent-light text-accent-dark',
                        'purple' => 'bg-purple-50 text-purple-700',
                        'orange' => 'bg-orange-50 text-orange-700',
                        'cyan' => 'bg-gold-light text-gold-dark',
                        'rose' => 'bg-rose-50 text-rose-700'
                    ];
                    ?>

                    <article
                        class="product-card bg-white border border-gray-200 rounded-xl
                               overflow-hidden hover:shadow-md transition-shadow duration-200"

                        data-name="<?= htmlspecialchars(strtolower($product['name'])) ?>"
                        data-category="<?= htmlspecialchars($product['category']) ?>"
                        data-risk="<?= htmlspecialchars($product['risk']) ?>"
                        data-currency="<?= htmlspecialchars($product['currency']) ?>"
                        data-return="<?= $product['target_return'] ?>"
                        data-minimum="<?= $product['minimum'] ?>"
                        data-featured="<?= $product['featured'] ? '1' : '0' ?>">

                        <div class="p-5">

                            <div class="flex items-start justify-between gap-3 mb-5">

                                <div class="w-12 h-12 rounded-xl flex items-center
                                            justify-center text-lg
                                            <?= $colorStyles[$product['color']] ?>">
                                    <i class="fas <?= htmlspecialchars($product['icon']) ?>"></i>
                                </div>

                                <?php if ($product['featured']): ?>
                                    <span class="text-xs font-semibold px-2.5 py-1
                                                 bg-accent-light text-accent-dark rounded-full">
                                        <i class="fas fa-star text-[10px] mr-1"></i>
                                        Featured
                                    </span>
                                <?php else: ?>
                                    <span class="text-xs font-semibold px-2.5 py-1
                                                 bg-gray-100 text-gray-600 rounded-full">
                                        <?= htmlspecialchars($product['category']) ?>
                                    </span>
                                <?php endif; ?>

                            </div>

                            <p class="text-xs font-medium text-gray-400 mb-1">
                                <?= htmlspecialchars($product['id']) ?>
                            </p>

                            <h3 class="text-lg font-bold text-gray-900">
                                <?= htmlspecialchars($product['name']) ?>
                            </h3>

                            <p class="text-sm text-gray-500 mt-2 leading-relaxed min-h-[60px]">
                                <?= htmlspecialchars($product['description']) ?>
                            </p>

                            <div class="grid grid-cols-2 gap-4 py-5 my-4
                                        border-y border-gray-100">

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">
                                        Illustrative target return
                                    </p>

                                    <p class="text-xl font-bold text-gray-900">
                                        <?= number_format($product['target_return'], 1) ?>%
                                        <span class="text-xs font-normal text-gray-400">p.a.</span>
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400 mb-1">
                                        Minimum investment
                                    </p>

                                    <p class="text-xl font-bold text-gray-900">
                                        <?= formatInvestmentAmount(
                                            $product['minimum'],
                                            $product['currency']
                                        ) ?>
                                    </p>
                                </div>

                            </div>

                            <div class="space-y-3">

                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500">Risk level</span>

                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold
                                                 <?= $riskStyles[$product['risk']] ?>">
                                        <?= htmlspecialchars($product['risk']) ?> Risk
                                    </span>
                                </div>

                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500">Investment term</span>
                                    <span class="font-medium text-gray-800">
                                        <?= htmlspecialchars($product['term']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500">Currency</span>
                                    <span class="font-medium text-gray-800">
                                        <?= htmlspecialchars($product['currency']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between items-start text-sm gap-3">
                                    <span class="text-gray-500 shrink-0">Liquidity</span>
                                    <span class="font-medium text-gray-800 text-right">
                                        <?= htmlspecialchars($product['liquidity']) ?>
                                    </span>
                                </div>

                            </div>

                            <a href="<?= BASE_URL ?>/investor/investment-details.php?id=<?= urlencode($product['id']) ?>"
                               class="mt-6 w-full inline-flex items-center justify-center gap-2
                                      bg-brand hover:bg-brand-light text-white
                                      text-sm font-semibold py-3 rounded-lg transition">
                                View Investment
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

            <!-- EMPTY STATE -->
            <div id="emptyState"
                 class="hidden bg-white border border-gray-200 rounded-xl
                        text-center py-16 px-5">

                <div class="w-14 h-14 rounded-full bg-gray-100 text-gray-400
                            flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-xl"></i>
                </div>

                <h3 class="text-lg font-bold text-gray-900">
                    No investments found
                </h3>

                <p class="text-sm text-gray-500 mt-2">
                    Try adjusting your search or filter options.
                </p>

                <button type="button" id="emptyResetFilters"
                        class="mt-5 text-sm font-semibold text-accent-dark hover:text-accent-dark">
                    Clear all filters
                </button>

            </div>

        </section>

        <!-- RISK DISCLAIMER -->
        <section class="mt-8 bg-gray-100 rounded-xl p-5">
            <div class="flex gap-3">
                <i class="fas fa-shield-halved text-gray-500 mt-1"></i>

                <div>
                    <h3 class="text-sm font-semibold text-gray-800">
                        Important investment information
                    </h3>

                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                        All products, figures, target returns and minimum investment
                        amounts displayed on this prototype are illustrative and
                        do not represent actual investment offers. Target returns
                        are not guaranteed. Investment values may rise or fall, and
                        investors may lose some or all of their capital. Always
                        review the official product documentation, fees, risks and
                        eligibility requirements before investing.
                    </p>
                </div>
            </div>
        </section>

    </main>

    <?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('productSearch');
    const categoryFilter = document.getElementById('categoryFilter');
    const riskFilter = document.getElementById('riskFilter');
    const currencyFilter = document.getElementById('currencyFilter');
    const sortFilter = document.getElementById('sortFilter');

    const productGrid = document.getElementById('productGrid');
    const emptyState = document.getElementById('emptyState');
    const visibleCount = document.getElementById('visibleCount');

    const clearFilters = document.getElementById('clearFilters');
    const emptyResetFilters = document.getElementById('emptyResetFilters');

    if (!productGrid) return;

    const cards = Array.from(
        productGrid.querySelectorAll('.product-card')
    );

    function applyFilters() {

        const search = searchInput.value.trim().toLowerCase();
        const category = categoryFilter.value;
        const risk = riskFilter.value;
        const currency = currencyFilter.value;

        let visibleCards = [];

        cards.forEach(function (card) {

            const matchesSearch =
                card.dataset.name.includes(search) ||
                card.dataset.category.toLowerCase().includes(search);

            const matchesCategory =
                !category || card.dataset.category === category;

            const matchesRisk =
                !risk || card.dataset.risk === risk;

            const matchesCurrency =
                !currency || card.dataset.currency === currency;

            const isVisible =
                matchesSearch &&
                matchesCategory &&
                matchesRisk &&
                matchesCurrency;

            card.classList.toggle('hidden', !isVisible);

            if (isVisible) {
                visibleCards.push(card);
            }

        });

        // SORTING
        const sortValue = sortFilter.value;

        visibleCards.sort(function (a, b) {

            if (sortValue === 'return-high') {
                return Number(b.dataset.return) - Number(a.dataset.return);
            }

            if (sortValue === 'minimum-low') {
                return Number(a.dataset.minimum) - Number(b.dataset.minimum);
            }

            if (sortValue === 'minimum-high') {
                return Number(b.dataset.minimum) - Number(a.dataset.minimum);
            }

            if (sortValue === 'featured') {
                return Number(b.dataset.featured) - Number(a.dataset.featured);
            }

            return 0;
        });

        visibleCards.forEach(function (card) {
            productGrid.appendChild(card);
        });

        visibleCount.textContent = visibleCards.length;

        emptyState.classList.toggle(
            'hidden',
            visibleCards.length !== 0
        );

        productGrid.classList.toggle(
            'hidden',
            visibleCards.length === 0
        );

    }

    function resetFilters() {

        searchInput.value = '';
        categoryFilter.value = '';
        riskFilter.value = '';
        currencyFilter.value = '';
        sortFilter.value = 'featured';

        applyFilters();

    }

    searchInput.addEventListener('input', applyFilters);
    categoryFilter.addEventListener('change', applyFilters);
    riskFilter.addEventListener('change', applyFilters);
    currencyFilter.addEventListener('change', applyFilters);
    sortFilter.addEventListener('change', applyFilters);

    clearFilters.addEventListener('click', resetFilters);
    emptyResetFilters.addEventListener('click', resetFilters);

    applyFilters();

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
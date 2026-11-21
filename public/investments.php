
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Explore Investments | InvestGlobal';
$activePage = 'investments';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main class="bg-canvas min-h-screen">

    <!-- PAGE HERO -->
    <section class="bg-brand text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-sm font-medium text-emerald-300 mb-5">
                    <i class="fa-solid fa-chart-line"></i>
                    Investment marketplace
                </span>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5">
                    Explore opportunities.
                    <span class="text-emerald-300">Invest with clarity.</span>
                </h1>

                <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-2xl">
                    Discover different investment opportunities, understand their
                    features and risks, and find options that align with your
                    financial goals.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#opportunities" class="btn btn-accent">
                        Explore opportunities
                        <i class="fa-solid fa-arrow-down ml-2"></i>
                    </a>

                    <a href="<?= BASE_URL ?>/public/how-it-works.php"
                       class="border border-white/30 text-white px-5 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                        How it works
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MARKETPLACE INTRO -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="w-11 h-11 rounded-lg bg-blue-50 text-brand flex items-center justify-center mb-4">
                    <i class="fa-solid fa-layer-group text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Multiple asset classes</h3>
                <p class="text-sm text-muted leading-relaxed">
                    Explore different types of investment opportunities in one place.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="w-11 h-11 rounded-lg bg-emerald-50 text-accent flex items-center justify-center mb-4">
                    <i class="fa-solid fa-file-lines text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Clear product information</h3>
                <p class="text-sm text-muted leading-relaxed">
                    Review investment terms, fees, risks and eligibility information.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="w-11 h-11 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-globe text-lg"></i>
                </div>
                <h3 class="font-semibold text-gray-900 mb-1">Global perspective</h3>
                <p class="text-sm text-muted leading-relaxed">
                    Discover opportunities across different markets and currencies.
                </p>
            </div>

        </div>
    </section>

    <!-- INVESTMENT OPPORTUNITIES -->
    <section id="opportunities" class="max-w-7xl mx-auto px-6 lg:px-8 py-16">

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-5 mb-8">
            <div>
                <span class="text-accent font-semibold text-sm">MARKETPLACE</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">
                    Explore investment opportunities
                </h2>
                <p class="text-muted mt-2">
                    Browse the available categories and explore sample products.
                </p>
            </div>

            <div class="text-sm text-muted">
                <i class="fa-solid fa-circle-info mr-1"></i>
                All listings below are illustrative.
            </div>
        </div>

        <!-- SEARCH -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 mb-5">
            <div class="relative">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input
                    type="text"
                    id="productSearch"
                    placeholder="Search investments by name or category..."
                    class="form-input w-full pl-11"
                >
            </div>
        </div>

        <!-- CATEGORY FILTERS -->
        <div class="flex flex-wrap gap-2 mb-8" id="categoryFilters">
            <button type="button" data-filter="all"
                class="filter-btn bg-brand text-white px-4 py-2 rounded-full text-sm font-medium">
                All opportunities
            </button>

            <button type="button" data-filter="fixed-income"
                class="filter-btn bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium hover:border-brand">
                Fixed Income
            </button>

            <button type="button" data-filter="equities"
                class="filter-btn bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium hover:border-brand">
                Equities
            </button>

            <button type="button" data-filter="real-estate"
                class="filter-btn bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium hover:border-brand">
                Real Estate
            </button>

            <button type="button" data-filter="managed"
                class="filter-btn bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium hover:border-brand">
                Managed Portfolios
            </button>
        </div>

        <!-- PRODUCT GRID -->
        <div id="productGrid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            <!-- PRODUCT 1 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="fixed-income"
                data-search="global income portfolio fixed income bonds">

                <div class="h-40 bg-gradient-to-br from-brand to-blue-800 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Fixed Income
                        </span>
                        <i class="fa-solid fa-chart-line text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Global Income Portfolio
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample income-focused portfolio designed around
                        selected fixed-income instruments.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$500</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">12 months</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-amber-600">Moderate</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- PRODUCT 2 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="equities"
                data-search="global equity access stocks shares equities">

                <div class="h-40 bg-gradient-to-br from-emerald-700 to-teal-900 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Equities
                        </span>
                        <i class="fa-solid fa-arrow-trend-up text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Global Equity Access
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample equity-focused investment option providing
                        exposure to selected public companies.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$250</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">Open-ended</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-red-600">High</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- PRODUCT 3 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="real-estate"
                data-search="property investment fund real estate property">

                <div class="h-40 bg-gradient-to-br from-amber-700 to-orange-900 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Real Estate
                        </span>
                        <i class="fa-solid fa-building text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Property Investment Fund
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample property-focused investment opportunity
                        linked to a diversified real estate portfolio.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$1,000</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">36 months</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-amber-600">Moderate</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- PRODUCT 4 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="managed"
                data-search="balanced managed portfolio diversified investment">

                <div class="h-40 bg-gradient-to-br from-purple-700 to-indigo-900 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Managed Portfolio
                        </span>
                        <i class="fa-solid fa-chart-pie text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Balanced Growth Portfolio
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample diversified portfolio combining different
                        asset classes according to a defined strategy.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$500</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">Open-ended</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-amber-600">Moderate</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- PRODUCT 5 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="fixed-income"
                data-search="short term treasury fixed income government securities">

                <div class="h-40 bg-gradient-to-br from-slate-600 to-slate-900 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Fixed Income
                        </span>
                        <i class="fa-solid fa-landmark text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Short-Term Treasury Portfolio
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample portfolio built around short-duration
                        government securities.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$1,000</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">6 months</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-emerald-700">Lower</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- PRODUCT 6 -->
            <article class="product-card bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition"
                data-category="managed"
                data-search="global income managed portfolio multi asset">

                <div class="h-40 bg-gradient-to-br from-cyan-700 to-blue-900 p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="bg-white/15 text-white text-xs px-3 py-1 rounded-full">
                            Managed Portfolio
                        </span>
                        <i class="fa-solid fa-globe text-white/70 text-2xl"></i>
                    </div>
                    <p class="text-white/70 text-sm">Illustrative opportunity</p>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        Global Diversified Portfolio
                    </h3>

                    <p class="text-sm text-muted leading-relaxed mb-5">
                        A sample multi-asset portfolio designed to spread
                        exposure across different investment categories.
                    </p>

                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gray-100">
                        <div>
                            <p class="text-xs text-muted mb-1">Minimum investment</p>
                            <p class="font-semibold text-gray-900">$750</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Indicative duration</p>
                            <p class="font-semibold text-gray-900">Open-ended</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Risk classification</p>
                            <p class="font-semibold text-amber-600">Moderate</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Currency</p>
                            <p class="font-semibold text-gray-900">USD</p>
                        </div>
                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-5 w-full btn btn-outline flex items-center justify-center gap-2">
                        View opportunity
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

        </div>

        <!-- EMPTY STATE -->
        <div id="emptyState" class="hidden text-center py-16">
            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-magnifying-glass text-gray-400 text-xl"></i>
            </div>
            <h3 class="font-semibold text-gray-900 text-lg">No opportunities found</h3>
            <p class="text-muted text-sm mt-2">
                Try another search term or select a different category.
            </p>
            <button type="button" id="clearFilters"
                class="mt-5 text-accent font-semibold text-sm hover:underline">
                Clear filters
            </button>
        </div>

    </section>

    <!-- RISK NOTICE -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pb-16">
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 md:p-8 flex flex-col md:flex-row gap-5">
            <div class="w-12 h-12 shrink-0 rounded-lg bg-white text-brand flex items-center justify-center">
                <i class="fa-solid fa-shield-halved text-xl"></i>
            </div>

            <div>
                <h3 class="font-bold text-gray-900 mb-2">
                    Understand before you invest
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Every investment involves risk, including the possible loss of
                    principal. Risk classifications, minimum amounts and durations
                    shown here are sample information for this prototype, not live
                    investment offers. Always review the approved product documents,
                    fees, eligibility requirements and risk disclosures before making
                    an investment decision.
                </p>
                <a href="<?= BASE_URL ?>/public/disclosures.php"
                   class="inline-flex items-center gap-2 text-sm text-brand font-semibold mt-4 hover:underline">
                    Read investment disclosures
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="bg-brand">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 text-center">
            <h2 class="text-3xl md:text-4xl text-white font-bold mb-4">
                Ready to take the next step?
            </h2>

            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Create an account to explore the investor experience and
                learn how the platform works.
            </p>

            <a href="<?= BASE_URL ?>/auth/register.php" class="btn btn-accent">
                Get started
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('productSearch');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    const emptyState = document.getElementById('emptyState');
    const productGrid = document.getElementById('productGrid');
    const clearButton = document.getElementById('clearFilters');

    let activeCategory = 'all';

    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        productCards.forEach(card => {
            const category = card.dataset.category;
            const searchableText = card.dataset.search.toLowerCase();

            const matchesCategory =
                activeCategory === 'all' || category === activeCategory;

            const matchesSearch =
                searchableText.includes(searchTerm);

            const isVisible = matchesCategory && matchesSearch;

            card.classList.toggle('hidden', !isVisible);

            if (isVisible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount !== 0);
        productGrid.classList.toggle('hidden', visibleCount === 0);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            activeCategory = button.dataset.filter;

            filterButtons.forEach(item => {
                item.classList.remove('bg-brand', 'text-white');
                item.classList.add('bg-white', 'text-gray-600', 'border', 'border-gray-200');
            });

            button.classList.add('bg-brand', 'text-white');
            button.classList.remove('bg-white', 'text-gray-600', 'border', 'border-gray-200');

            filterProducts();
        });
    });

    searchInput.addEventListener('input', filterProducts);

    clearButton.addEventListener('click', () => {
        searchInput.value = '';
        activeCategory = 'all';

        filterButtons.forEach(button => {
            button.classList.remove('bg-brand', 'text-white');
            button.classList.add('bg-white', 'text-gray-600', 'border', 'border-gray-200');
        });

        const allButton = document.querySelector('[data-filter="all"]');
        allButton.classList.add('bg-brand', 'text-white');
        allButton.classList.remove('bg-white', 'text-gray-600', 'border', 'border-gray-200');

        filterProducts();
    });
});
</script>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>

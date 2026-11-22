<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Investor Resources | InvestGlobal';
$activePage = 'resources';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main class="bg-canvas min-h-screen">

    <!-- HERO -->
    <section class="bg-brand text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
            <div class="max-w-3xl">
                <span class="text-gold text-sm font-semibold">INVESTOR RESOURCES</span>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mt-4 mb-5">
                    Build your investment knowledge.
                </h1>

                <p class="text-gray-300 text-base md:text-lg leading-relaxed">
                    Explore clear, practical explanations of investment concepts,
                    product terms and the processes investors may encounter.
                </p>
            </div>
        </div>
    </section>

    <!-- SEARCH AND FILTER -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-12">
        <div class="bg-white border border-gray-200 rounded-xl p-4">
            <div class="relative">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input
                    id="resourceSearch"
                    type="search"
                    placeholder="Search resources..."
                    class="form-input w-full pl-11"
                    aria-label="Search resources"
                >
            </div>
        </div>

        <div class="flex flex-wrap gap-2 mt-4" id="resourceFilters">
            <button type="button" data-filter="all"
                class="resource-filter bg-brand text-white px-4 py-2 rounded-full text-sm font-medium">
                All resources
            </button>
            <button type="button" data-filter="basics"
                class="resource-filter bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium">
                Investing basics
            </button>
            <button type="button" data-filter="risk"
                class="resource-filter bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium">
                Risk &amp; returns
            </button>
            <button type="button" data-filter="process"
                class="resource-filter bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-full text-sm font-medium">
                Platform processes
            </button>
        </div>
    </section>

    <!-- FEATURED RESOURCE -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-10">
        <article class="resource-card bg-white border border-gray-200 rounded-2xl overflow-hidden"
            data-category="basics"
            data-search="investment basics getting started beginner guide">

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="bg-gradient-to-br from-brand to-brand-light p-8 md:p-10 text-white flex flex-col justify-between min-h-64">
                    <div>
                        <span class="inline-flex bg-white/15 px-3 py-1 rounded-full text-xs font-medium">
                            Featured guide
                        </span>
                        <i class="fa-solid fa-book-open text-5xl block mt-8 text-gold"></i>
                    </div>
                    <p class="text-sm text-gray-300 mt-8">Investing basics · 5 min read</p>
                </div>

                <div class="p-8 md:p-10 flex flex-col justify-center">
                    <span class="text-accent text-xs font-semibold uppercase tracking-wide">
                        Getting started
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3 mb-4">
                        A beginner’s guide to understanding investments
                    </h2>
                    <p class="text-sm text-muted leading-relaxed mb-6">
                        Learn what an investment is, how different asset classes
                        work, and why it is important to understand potential
                        risks before committing money.
                    </p>

                    <a href="#investment-basics"
                       class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:underline">
                        Read the guide
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </article>
    </section>

    <!-- RESOURCE CARDS -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pb-16">
        <div class="flex items-end justify-between gap-4 mb-8">
            <div>
                <span class="text-accent text-sm font-semibold">LEARN</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Explore the resource library</h2>
            </div>
            <p id="resourceCount" class="text-sm text-muted whitespace-nowrap">6 resources</p>
        </div>

        <div id="resourceGrid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="basics"
                data-search="asset classes stocks bonds real estate cash investments">
                <div class="w-11 h-11 rounded-lg bg-gold-light text-gold-dark flex items-center justify-center mb-5">
                    <i class="fa-solid fa-layer-group text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-accent">INVESTING BASICS</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">Understanding asset classes</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    A general introduction to equities, fixed income, real estate
                    and other common investment categories.
                </p>
                <a href="#investment-basics" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="risk"
                data-search="risk return volatility loss principal investment">
                <div class="w-11 h-11 rounded-lg bg-red-50 text-red-600 flex items-center justify-center mb-5">
                    <i class="fa-solid fa-scale-balanced text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-red-600">RISK &amp; RETURNS</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">Understanding investment risk</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    Learn about market risk, volatility, liquidity risk and the
                    possibility of losing some or all of your invested capital.
                </p>
                <a href="#risk-and-returns" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="basics"
                data-search="diversification portfolio allocation concentration">
                <div class="w-11 h-11 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-5">
                    <i class="fa-solid fa-chart-pie text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-accent">INVESTING BASICS</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">What diversification means</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    Understand how spreading exposure may reduce concentration
                    risk, while not eliminating investment risk.
                </p>
                <a href="#investment-basics" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="risk"
                data-search="fees charges expenses investment net return">
                <div class="w-11 h-11 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-5">
                    <i class="fa-solid fa-receipt text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-amber-700">RISK &amp; RETURNS</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">How fees affect returns</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    See why management fees, transaction costs and other charges
                    matter when reviewing an investment.
                </p>
                <a href="#risk-and-returns" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="process"
                data-search="redemption settlement withdrawal cash payout">
                <div class="w-11 h-11 rounded-lg bg-gold-light text-gold-dark flex items-center justify-center mb-5">
                    <i class="fa-solid fa-arrow-right-arrow-left text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-gold-dark">PLATFORM PROCESSES</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">Redemption vs. withdrawal</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    Understand the difference between exiting an investment,
                    settlement, and transferring eligible cash out.
                </p>
                <a href="#platform-processes" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

            <article class="resource-card bg-white border border-gray-200 rounded-xl p-6 flex flex-col"
                data-category="process"
                data-search="investment documents product terms fees eligibility">
                <div class="w-11 h-11 rounded-lg bg-emerald-50 text-accent flex items-center justify-center mb-5">
                    <i class="fa-solid fa-file-lines text-lg"></i>
                </div>
                <span class="text-xs font-semibold text-accent">PLATFORM PROCESSES</span>
                <h3 class="text-lg font-bold text-gray-900 mt-2 mb-3">Reviewing product documents</h3>
                <p class="text-sm text-muted leading-relaxed flex-1">
                    Know what to look for in product terms, fee schedules,
                    eligibility details and risk disclosures.
                </p>
                <a href="#platform-processes" class="inline-flex items-center gap-2 text-brand font-semibold text-sm mt-5">
                    Read resource <i class="fa-solid fa-arrow-right"></i>
                </a>
            </article>

        </div>

        <div id="resourceEmptyState" class="hidden text-center py-14">
            <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-magnifying-glass text-gray-400 text-xl"></i>
            </div>
            <h3 class="font-semibold text-gray-900 text-lg">No resources found</h3>
            <p class="text-sm text-muted mt-2">Try another search or category.</p>
            <button type="button" id="clearResourceFilters"
                class="mt-5 text-accent font-semibold text-sm hover:underline">
                Clear filters
            </button>
        </div>
    </section>

    <!-- SHORT EDUCATIONAL SECTIONS -->
    <section class="bg-white border-y border-gray-200">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 py-16 space-y-12">

            <article id="investment-basics" class="scroll-mt-24">
                <span class="text-accent text-sm font-semibold">INVESTING BASICS</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-3 mb-4">
                    Start with the fundamentals
                </h2>
                <p class="text-sm text-muted leading-relaxed">
                    An investment is an asset or financial instrument acquired
                    with the expectation that it may provide income, appreciate
                    in value, or both. Outcomes are uncertain. Different asset
                    classes have different characteristics, risks, costs and
                    time horizons. Diversification means spreading exposure
                    across investments; it can reduce concentration risk, but
                    cannot guarantee a profit or prevent losses.
                </p>
            </article>

            <article id="risk-and-returns" class="scroll-mt-24">
                <span class="text-accent text-sm font-semibold">RISK &amp; RETURNS</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-3 mb-4">
                    Consider both potential returns and possible losses
                </h2>
                <p class="text-sm text-muted leading-relaxed">
                    Higher potential returns generally come with higher risk.
                    Investment value may fluctuate, income may vary, and you
                    may receive less than you invested. Fees and expenses can
                    reduce returns. Review the relevant product documents and
                    consider whether you understand the risks before making
                    an investment decision.
                </p>
            </article>

            <article id="platform-processes" class="scroll-mt-24">
                <span class="text-accent text-sm font-semibold">PLATFORM PROCESSES</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-3 mb-4">
                    Understand the steps around an investment
                </h2>
                <p class="text-sm text-muted leading-relaxed">
                    Product terms explain how an investment is entered, valued
                    and exited. Redemption refers to requesting to exit an
                    investment. Settlement is the process of finalizing the
                    resulting amount. Withdrawal is a separate request to
                    transfer eligible cash to an external account. Timing,
                    availability and conditions depend on the product and
                    applicable arrangements.
                </p>
            </article>

        </div>
    </section>

    <!-- DISCLAIMER -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 flex items-start gap-4">
            <i class="fa-solid fa-circle-info text-amber-600 mt-1"></i>
            <div>
                <h2 class="font-bold text-gray-900 mb-2">Educational information only</h2>
                <p class="text-sm text-gray-700 leading-relaxed">
                    These materials provide general educational information and
                    are not personal financial, investment, tax or legal advice.
                    They do not consider your individual circumstances. 
                </p>
                <a href="<?= BASE_URL ?>/public/disclosures.php"
                   class="inline-flex items-center gap-2 text-sm text-brand font-semibold mt-4 hover:underline">
                    Read investment disclosures
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('resourceSearch');
    const filterButtons = document.querySelectorAll('.resource-filter');
    const cards = document.querySelectorAll('.resource-card');
    const resourceCount = document.getElementById('resourceCount');
    const emptyState = document.getElementById('resourceEmptyState');
    const clearButton = document.getElementById('clearResourceFilters');

    let activeCategory = 'all';

    function filterResources() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        cards.forEach(card => {
            const category = card.dataset.category;
            const searchableText = card.dataset.search.toLowerCase();

            const matchesCategory =
                activeCategory === 'all' || category === activeCategory;

            const matchesSearch = searchableText.includes(searchTerm);
            const isVisible = matchesCategory && matchesSearch;

            card.classList.toggle('hidden', !isVisible);

            if (isVisible) visibleCount++;
        });

        resourceCount.textContent = `${visibleCount} resource${visibleCount === 1 ? '' : 's'}`;
        emptyState.classList.toggle('hidden', visibleCount !== 0);
    }

    function setActiveFilter(selectedButton) {
        filterButtons.forEach(button => {
            button.classList.remove('bg-brand', 'text-white');
            button.classList.add('bg-white', 'text-gray-600', 'border', 'border-gray-200');
        });

        selectedButton.classList.add('bg-brand', 'text-white');
        selectedButton.classList.remove('bg-white', 'text-gray-600', 'border', 'border-gray-200');
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            activeCategory = button.dataset.filter;
            setActiveFilter(button);
            filterResources();
        });
    });

    searchInput.addEventListener('input', filterResources);

    clearButton.addEventListener('click', () => {
        searchInput.value = '';
        activeCategory = 'all';

        const allButton = document.querySelector('.resource-filter[data-filter="all"]');
        setActiveFilter(allButton);
        filterResources();
    });

    filterResources();
});
</script>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>
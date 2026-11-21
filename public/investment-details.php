
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Global Income Portfolio | InvestGlobal';
$activePage = 'investments';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main class="bg-canvas min-h-screen">

    <!-- BREADCRUMB -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-8">
        <nav class="flex items-center gap-2 text-sm text-muted">
            <a href="<?= BASE_URL ?>/public/index.php" class="hover:text-brand">Home</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <a href="<?= BASE_URL ?>/public/investments.php" class="hover:text-brand">Investments</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span class="text-gray-900 font-medium">Global Income Portfolio</span>
        </nav>
    </section>

    <!-- PRODUCT HEADER -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-8 pb-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- MAIN PRODUCT INFORMATION -->
            <div class="lg:col-span-2">

                <div class="bg-gradient-to-br from-brand to-blue-900 rounded-2xl p-7 md:p-10 text-white relative overflow-hidden">
                    <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full border border-white/10"></div>
                    <div class="absolute -right-2 -top-2 w-44 h-44 rounded-full border border-white/10"></div>

                    <div class="relative z-10">
                        <div class="flex flex-wrap items-center gap-2 mb-8">
                            <span class="bg-white/15 px-3 py-1.5 rounded-full text-xs font-medium">
                                Fixed Income
                            </span>
                            <span class="bg-emerald-400/20 text-emerald-200 px-3 py-1.5 rounded-full text-xs font-medium">
                                Illustrative product
                            </span>
                        </div>

                        <h1 class="text-3xl md:text-4xl font-bold mb-4">
                            Global Income Portfolio
                        </h1>

                        <p class="text-gray-300 leading-relaxed max-w-2xl">
                            A sample income-focused portfolio built around selected
                            fixed-income instruments. Explore its structure, terms,
                            associated risks and investment requirements.
                        </p>

                        <div class="flex flex-wrap gap-8 mt-9">
                            <div>
                                <p class="text-xs text-gray-400 mb-1">Investment category</p>
                                <p class="font-semibold">Fixed Income</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-1">Currency</p>
                                <p class="font-semibold">USD</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-1">Indicative duration</p>
                                <p class="font-semibold">12 months</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRODUCT OVERVIEW -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mt-7">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">
                        Product overview
                    </h2>

                    <p class="text-sm text-gray-600 leading-7">
                        The Global Income Portfolio is a fictional example of an
                        income-oriented investment product. Its illustrative
                        structure represents exposure to selected fixed-income
                        securities and related instruments.
                    </p>

                    <p class="text-sm text-gray-600 leading-7 mt-4">
                        In a real offering, the product documentation would explain
                        the underlying assets, investment strategy, income
                        distribution policy, fees, redemption conditions, custody
                        arrangements and the risks investors may face.
                    </p>
                </div>

                <!-- PRODUCT FEATURES -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mt-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">
                        Key product information
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <div class="flex gap-3">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-brand flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-coins"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 text-sm">Income-focused strategy</h3>
                                <p class="text-xs text-muted mt-1 leading-relaxed">
                                    Designed around fixed-income instruments.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-accent flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 text-sm">Defined duration</h3>
                                <p class="text-xs text-muted mt-1 leading-relaxed">
                                    Sample investment term of 12 months.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 text-sm">Risk classification</h3>
                                <p class="text-xs text-muted mt-1 leading-relaxed">
                                    Illustrative moderate-risk classification.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-file-shield"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 text-sm">Product documentation</h3>
                                <p class="text-xs text-muted mt-1 leading-relaxed">
                                    Terms and disclosures would accompany a real offering.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- INVESTMENT TERMS -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mt-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">
                        Investment terms
                    </h2>

                    <div class="divide-y divide-gray-100">

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Minimum investment</span>
                            <span class="text-sm font-semibold text-gray-900">$500</span>
                        </div>

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Maximum investment</span>
                            <span class="text-sm font-semibold text-gray-900">Not specified</span>
                        </div>

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Investment duration</span>
                            <span class="text-sm font-semibold text-gray-900">12 months</span>
                        </div>

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Currency</span>
                            <span class="text-sm font-semibold text-gray-900">US Dollar (USD)</span>
                        </div>

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Liquidity</span>
                            <span class="text-sm font-semibold text-gray-900">Subject to product terms</span>
                        </div>

                        <div class="flex justify-between gap-4 py-4">
                            <span class="text-sm text-muted">Redemption</span>
                            <span class="text-sm font-semibold text-gray-900">Subject to eligibility</span>
                        </div>

                    </div>
                </div>

                <!-- RISKS -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mt-6">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">
                            Risks to understand
                        </h2>
                    </div>

                    <div class="space-y-4">

                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Market risk</h3>
                            <p class="text-sm text-muted mt-1 leading-relaxed">
                                The value of underlying investments may fluctuate
                                due to changing market conditions.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Interest rate risk</h3>
                            <p class="text-sm text-muted mt-1 leading-relaxed">
                                Changes in interest rates may affect the value
                                of fixed-income securities.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Credit risk</h3>
                            <p class="text-sm text-muted mt-1 leading-relaxed">
                                An issuer may fail to meet its financial obligations.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">Liquidity risk</h3>
                            <p class="text-sm text-muted mt-1 leading-relaxed">
                                Investors may not be able to exit an investment
                                immediately or at the expected value.
                            </p>
                        </div>

                    </div>

                    <p class="text-xs text-muted mt-6 border-t border-gray-100 pt-5">
                        This is a general educational summary, not a complete
                        statement of product risks. Actual risks must be described
                        in the approved offering documentation.
                    </p>
                </div>

            </div>

            <!-- INVESTMENT SUMMARY SIDEBAR -->
            <aside class="lg:col-span-1">
                <div class="bg-white border border-gray-200 rounded-xl p-6 sticky top-6">

                    <span class="text-xs font-semibold text-accent uppercase tracking-wide">
                        Sample investment summary
                    </span>

                    <h2 class="text-xl font-bold text-gray-900 mt-3">
                        Global Income Portfolio
                    </h2>

                    <div class="mt-6 p-4 bg-canvas rounded-lg">
                        <p class="text-xs text-muted mb-2">Minimum investment</p>
                        <p class="text-3xl font-bold text-gray-900">$500</p>
                        <p class="text-xs text-muted mt-1">Illustrative amount only</p>
                    </div>

                    <div class="space-y-4 mt-6">

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-muted">Duration</span>
                            <span class="text-sm font-semibold text-gray-900">12 months</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-muted">Risk level</span>
                            <span class="text-sm font-semibold text-amber-600">Moderate</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-muted">Currency</span>
                            <span class="text-sm font-semibold text-gray-900">USD</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-muted">Availability</span>
                            <span class="text-sm font-semibold text-gray-900">Demo only</span>
                        </div>

                    </div>

                    <div class="border-t border-gray-100 mt-6 pt-6">
                        <a href="<?= BASE_URL ?>/auth/register.php"
                           class="btn btn-primary w-full flex items-center justify-center gap-2">
                            Create an account
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="<?= BASE_URL ?>/public/investments.php"
                           class="block text-center text-sm text-muted font-medium mt-4 hover:text-brand">
                            <i class="fa-solid fa-arrow-left mr-1"></i>
                            Back to marketplace
                        </a>
                    </div>

                    <div class="bg-amber-50 border border-amber-100 rounded-lg p-4 mt-6">
                        <div class="flex items-start gap-2">
                            <i class="fa-solid fa-circle-info text-amber-600 mt-0.5"></i>
                            <p class="text-xs text-amber-800 leading-relaxed">
                                This is a demonstration product. No real investment
                                can be made through this page.
                            </p>
                        </div>
                    </div>

                </div>
            </aside>

        </div>
    </section>

    <!-- BOTTOM CTA -->
    <section class="bg-brand">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-14 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">
                Explore your investment journey
            </h2>

            <p class="text-gray-300 max-w-xl mx-auto mb-7">
                Learn how the platform works and what to expect before
                opening an investor account.
            </p>

            <a href="<?= BASE_URL ?>/public/how-it-works.php" class="btn btn-accent">
                Learn how it works
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

</main>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>

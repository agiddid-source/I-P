
<?php

require_once __DIR__ . '/../config/app.php';

$pageTitle = 'InvestGlobal | Invest With Clarity';
$activePage = 'home';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';

?>

<!-- =========================================
     HERO SECTION
========================================= -->

<section class="relative overflow-hidden bg-brand">

    <div class="absolute -top-32 -right-20 w-96 h-96 bg-accent opacity-10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-20 w-96 h-96 bg-blue-400 opacity-10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-5 lg:px-8 py-24 lg:py-32 relative">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Hero Content -->
            <div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-tight">

                    Make your money work towards

                    <span class="text-emerald-400">
                        your future.
                    </span>

                </h1>

                <p class="text-gray-300 text-base lg:text-lg leading-8 mt-7 max-w-xl">

                    Explore investment opportunities, build your portfolio,
                    and follow your investment journey through one connected
                    digital platform.

                </p>

                <div class="flex flex-col sm:flex-row gap-4 mt-9">

                    <a href="<?= BASE_URL ?>/auth/register.php"
                       class="btn btn-accent px-7 py-4">

                        Start Investing

                        <i class="fa-solid fa-arrow-right text-sm"></i>

                    </a>

                    <a href="<?= BASE_URL ?>/public/how-it-works.php"
                       class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-lg border border-white/20 text-white font-semibold text-sm hover:bg-white/10 transition">

                        Explore How It Works

                        <i class="fa-solid fa-play text-xs"></i>

                    </a>

                </div>

                <div class="flex flex-wrap items-center gap-x-7 gap-y-3 mt-10 text-sm text-gray-300">

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-shield-halved text-emerald-400"></i>
                        Risk-conscious investing
                    </div>

                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-chart-pie text-emerald-400"></i>
                        Portfolio visibility
                    </div>

                </div>

            </div>

            <!-- Hero Visual -->
            <div class="relative">

                <div class="absolute inset-0 bg-accent/20 blur-3xl rounded-full"></div>

                <div class="relative bg-white rounded-2xl p-6 sm:p-8 shadow-2xl">

                    <div class="flex items-center justify-between mb-8">

                        <div>
                            <p class="text-sm text-muted font-medium">
                                Portfolio overview
                            </p>

                            <h3 class="text-2xl font-bold text-brand mt-1">
                                Your investments
                            </h3>
                        </div>

                        <div class="w-11 h-11 rounded-xl bg-accent-light text-accent flex items-center justify-center">
                            <i class="fa-solid fa-chart-line text-lg"></i>
                        </div>

                    </div>

                    <div class="bg-canvas rounded-xl p-5 mb-5">

                        <div class="flex items-center justify-between">

                            <p class="text-sm text-muted">
                                Portfolio value
                            </p>

                            <span class="text-xs bg-white border border-border rounded-full px-3 py-1 text-muted">
                                Sample view
                            </span>

                        </div>

                        <h2 class="text-3xl sm:text-4xl font-bold text-brand mt-3">
                            $24,850.00
                        </h2>

                        <p class="text-xs text-muted mt-2">
                            Illustrative interface preview — not an actual account balance.
                        </p>

                    </div>

                    <!-- Portfolio Allocation -->
                    <div class="mb-7">

                        <div class="flex justify-between items-center mb-4">

                            <h4 class="font-bold text-brand text-sm">
                                Portfolio allocation
                            </h4>

                            <span class="text-xs text-muted">
                                Sample data
                            </span>

                        </div>

                        <div class="flex h-3 rounded-full overflow-hidden gap-1">

                            <div class="bg-brand w-[45%]"></div>
                            <div class="bg-accent w-[30%]"></div>
                            <div class="bg-blue-400 w-[25%]"></div>

                        </div>

                        <div class="grid grid-cols-3 gap-3 mt-5">

                            <div>
                                <div class="flex items-center gap-2 text-xs text-muted">
                                    <span class="w-2 h-2 rounded-full bg-brand"></span>
                                    Fixed income
                                </div>
                                <p class="font-bold text-brand mt-1">45%</p>
                            </div>

                            <div>
                                <div class="flex items-center gap-2 text-xs text-muted">
                                    <span class="w-2 h-2 rounded-full bg-accent"></span>
                                    Equities
                                </div>
                                <p class="font-bold text-brand mt-1">30%</p>
                            </div>

                            <div>
                                <div class="flex items-center gap-2 text-xs text-muted">
                                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                                    Other
                                </div>
                                <p class="font-bold text-brand mt-1">25%</p>
                            </div>

                        </div>

                    </div>

                    <div class="border-t border-border pt-5 flex items-center justify-between">

                        <div>
                            <p class="text-xs text-muted">
                                Investment tracking
                            </p>
                            <p class="text-sm font-semibold text-brand mt-1">
                                All in one place
                            </p>
                        </div>

                        <div class="w-10 h-10 rounded-full bg-accent-light text-accent flex items-center justify-center">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </div>

                    </div>

                </div>

                <!-- Floating Card -->
                <div class="hidden sm:flex absolute -bottom-10 -left-18 bg-white rounded-xl shadow-xl p-4 items-center gap-3">

                    <div class="w-11 h-11 bg-accent-light text-accent rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-wallet text-lg"></i>
                    </div>

                    <div>
                        <p class="text-xs text-muted">
                            Investment journey
                        </p>
                        <p class="font-bold text-brand text-sm">
                            Track with clarity
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     INVESTMENT CATEGORIES
========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="max-w-2xl mx-auto text-center mb-14">

            <span class="text-accent text-sm font-bold uppercase tracking-wider">
                Investment opportunities
            </span>

            <h2 class="text-3xl lg:text-4xl font-bold text-brand mt-4">
                Explore different ways to invest
            </h2>

            <p class="text-muted leading-7 mt-5">
                Discover different investment categories and explore
                opportunities that align with your financial objectives,
                preferences and risk tolerance.
            </p>

        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Fixed Income -->
            <div class="group border border-border rounded-xl p-7 hover:border-accent hover:shadow-card transition">

                <div class="w-14 h-14 bg-accent-light text-accent rounded-xl flex items-center justify-center mb-6 group-hover:scale-105 transition">
                    <i class="fa-solid fa-building-columns text-2xl"></i>
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Fixed Income
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Explore interest-bearing instruments and structured
                    fixed-income opportunities.
                </p>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="inline-flex items-center gap-2 text-accent text-sm font-semibold mt-6">

                    Explore opportunities
                    <i class="fa-solid fa-arrow-right text-xs"></i>

                </a>

            </div>

            <!-- Equities -->
            <div class="group border border-border rounded-xl p-7 hover:border-accent hover:shadow-card transition">

                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-105 transition">
                    <i class="fa-solid fa-chart-pie text-2xl"></i>
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Equities
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Discover eligible shares and exchange-traded
                    investment opportunities through brokerage access.
                </p>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="inline-flex items-center gap-2 text-accent text-sm font-semibold mt-6">

                    Explore opportunities
                    <i class="fa-solid fa-arrow-right text-xs"></i>

                </a>

            </div>

            <!-- Real Estate -->
            <div class="group border border-border rounded-xl p-7 hover:border-accent hover:shadow-card transition">

                <div class="w-14 h-14 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-105 transition">
                    <i class="fa-solid fa-city text-2xl"></i>
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Real Estate
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Explore property-related investment structures
                    and eligible real estate opportunities.
                </p>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="inline-flex items-center gap-2 text-accent text-sm font-semibold mt-6">

                    Explore opportunities
                    <i class="fa-solid fa-arrow-right text-xs"></i>

                </a>

            </div>

            <!-- Managed Portfolios -->
            <div class="group border border-border rounded-xl p-7 hover:border-accent hover:shadow-card transition">

                <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-105 transition">
                    <i class="fa-solid fa-layer-group text-2xl"></i>
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Managed Portfolios
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Explore professionally managed investment
                    strategies where available.
                </p>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="inline-flex items-center gap-2 text-accent text-sm font-semibold mt-6">

                    Explore opportunities
                    <i class="fa-solid fa-arrow-right text-xs"></i>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     FEATURED OPPORTUNITIES
========================================= -->

<section class="py-24 bg-canvas">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">

            <div class="max-w-2xl">

                <span class="text-accent text-sm font-bold uppercase tracking-wider">
                    Discover opportunities
                </span>

                <h2 class="text-3xl lg:text-4xl font-bold text-brand mt-4">
                    Explore investment possibilities
                </h2>

                <p class="text-muted leading-7 mt-4">
                    Browse illustrative examples of investment products
                    that the platform is designed to support.
                </p>

            </div>

            <a href="<?= BASE_URL ?>/public/investments.php"
               class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-accent transition">

                View all opportunities
                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Opportunity 1 -->
            <article class="bg-white border border-border rounded-2xl overflow-hidden hover:shadow-card transition">

                <div class="h-44 bg-gradient-to-br from-brand to-blue-700 flex items-center justify-center relative">

                    <i class="fa-solid fa-building-columns text-white/30 text-7xl"></i>

                    <span class="absolute top-5 left-5 bg-white/15 text-white text-xs font-semibold px-3 py-2 rounded-full">
                        Fixed Income
                    </span>

                </div>

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">

                        <span class="text-xs font-semibold text-accent bg-accent-light px-3 py-1.5 rounded-full">
                            Illustrative product
                        </span>

                        <span class="text-xs text-muted">
                            USD
                        </span>

                    </div>

                    <h3 class="text-xl font-bold text-brand">
                        Global Income Portfolio
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        A sample fixed-income product profile with
                        defined investment terms and redemption conditions.
                    </p>

                    <div class="grid grid-cols-2 gap-4 border-t border-border mt-6 pt-5">

                        <div>
                            <p class="text-xs text-muted">Example minimum</p>
                            <p class="font-bold text-brand mt-1">$500</p>
                        </div>

                        <div>
                            <p class="text-xs text-muted">Example duration</p>
                            <p class="font-bold text-brand mt-1">12 months</p>
                        </div>

                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-6 w-full btn btn-outline">

                        View Details
                        <i class="fa-solid fa-arrow-right text-xs"></i>

                    </a>

                </div>

            </article>

            <!-- Opportunity 2 -->
            <article class="bg-white border border-border rounded-2xl overflow-hidden hover:shadow-card transition">

                <div class="h-44 bg-gradient-to-br from-emerald-700 to-teal-500 flex items-center justify-center relative">

                    <i class="fa-solid fa-chart-line text-white/30 text-7xl"></i>

                    <span class="absolute top-5 left-5 bg-white/15 text-white text-xs font-semibold px-3 py-2 rounded-full">
                        Equities
                    </span>

                </div>

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">

                        <span class="text-xs font-semibold text-accent bg-accent-light px-3 py-1.5 rounded-full">
                            Illustrative product
                        </span>

                        <span class="text-xs text-muted">
                            USD
                        </span>

                    </div>

                    <h3 class="text-xl font-bold text-brand">
                        Global Equity Access
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        A sample brokerage-access offering for eligible
                        investors seeking exposure to listed securities.
                    </p>

                    <div class="grid grid-cols-2 gap-4 border-t border-border mt-6 pt-5">

                        <div>
                            <p class="text-xs text-muted">Example minimum</p>
                            <p class="font-bold text-brand mt-1">$100</p>
                        </div>

                        <div>
                            <p class="text-xs text-muted">Investment type</p>
                            <p class="font-bold text-brand mt-1">Market-based</p>
                        </div>

                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-6 w-full btn btn-outline">

                        View Details
                        <i class="fa-solid fa-arrow-right text-xs"></i>

                    </a>

                </div>

            </article>

            <!-- Opportunity 3 -->
            <article class="bg-white border border-border rounded-2xl overflow-hidden hover:shadow-card transition">

                <div class="h-44 bg-gradient-to-br from-slate-600 to-slate-900 flex items-center justify-center relative">

                    <i class="fa-solid fa-city text-white/30 text-7xl"></i>

                    <span class="absolute top-5 left-5 bg-white/15 text-white text-xs font-semibold px-3 py-2 rounded-full">
                        Real Estate
                    </span>

                </div>

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">

                        <span class="text-xs font-semibold text-accent bg-accent-light px-3 py-1.5 rounded-full">
                            Illustrative product
                        </span>

                        <span class="text-xs text-muted">
                            USD
                        </span>

                    </div>

                    <h3 class="text-xl font-bold text-brand">
                        Property Investment Fund
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        A sample property-focused investment structure
                        with product-specific liquidity and risk terms.
                    </p>

                    <div class="grid grid-cols-2 gap-4 border-t border-border mt-6 pt-5">

                        <div>
                            <p class="text-xs text-muted">Example minimum</p>
                            <p class="font-bold text-brand mt-1">$1,000</p>
                        </div>

                        <div>
                            <p class="text-xs text-muted">Example duration</p>
                            <p class="font-bold text-brand mt-1">24 months</p>
                        </div>

                    </div>

                    <a href="<?= BASE_URL ?>/public/investment-details.php"
                       class="mt-6 w-full btn btn-outline">

                        View Details
                        <i class="fa-solid fa-arrow-right text-xs"></i>

                    </a>

                </div>

            </article>

        </div>

        <p class="text-xs text-muted mt-8 text-center leading-6">
            These are fictional examples for interface demonstration only.
            They are not actual investment offers, approved products,
            forecasts or recommendations.
        </p>

    </div>

</section>


<!-- =========================================
     WHY CHOOSE US
========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left Content -->
            <div>

                <span class="text-accent text-sm font-bold uppercase tracking-wider">
                    A better investment experience
                </span>

                <h2 class="text-3xl lg:text-4xl font-bold text-brand mt-4 leading-tight">
                    More clarity. More visibility. Better-informed decisions.
                </h2>

                <p class="text-muted leading-8 mt-6">
                    Investment decisions deserve more than scattered
                    information. Our platform is designed to bring
                    investment discovery, portfolio visibility and
                    account activity together.
                </p>

                <a href="<?= BASE_URL ?>/public/about.php"
                   class="inline-flex items-center gap-2 text-accent font-semibold text-sm mt-8">

                    Learn more about us
                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

            <!-- Benefits -->
            <div class="grid sm:grid-cols-2 gap-5">

                <div class="bg-canvas rounded-2xl p-7">

                    <div class="w-12 h-12 bg-accent-light text-accent rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-eye text-xl"></i>
                    </div>

                    <h3 class="font-bold text-brand text-lg">
                        Portfolio Visibility
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        Keep track of investments, holdings and
                        account activity in one place.
                    </p>

                </div>

                <div class="bg-canvas rounded-2xl p-7">

                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-globe text-xl"></i>
                    </div>

                    <h3 class="font-bold text-brand text-lg">
                        Global Perspective
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        A platform designed to accommodate different
                        currencies and eligible markets.
                    </p>

                </div>

                <div class="bg-canvas rounded-2xl p-7">

                    <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-file-shield text-xl"></i>
                    </div>

                    <h3 class="font-bold text-brand text-lg">
                        Clear Documentation
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        Access product information, relevant disclosures
                        and investment records.
                    </p>

                </div>

                <div class="bg-canvas rounded-2xl p-7">

                    <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-5">
                        <i class="fa-solid fa-sliders text-xl"></i>
                    </div>

                    <h3 class="font-bold text-brand text-lg">
                        Investment Control
                    </h3>

                    <p class="text-sm text-muted leading-7 mt-3">
                        Follow investment orders, redemption requests
                        and withdrawal activity.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     HOW IT WORKS
========================================= -->

<section class="py-24 bg-canvas">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="max-w-2xl mx-auto text-center mb-16">

            <span class="text-accent text-sm font-bold uppercase tracking-wider">
                Getting started
            </span>

            <h2 class="text-3xl lg:text-4xl font-bold text-brand mt-4">
                Your investment journey, simplified
            </h2>

            <p class="text-muted leading-7 mt-5">
                From creating your account to monitoring your portfolio,
                follow a structured investment journey.
            </p>

        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Step 1 -->
            <div class="relative">

                <div class="w-14 h-14 rounded-2xl bg-brand text-white flex items-center justify-center text-xl font-bold mb-6">
                    01
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Create an Account
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Register and provide the information needed
                    to establish your investor profile.
                </p>

            </div>

            <!-- Step 2 -->
            <div>

                <div class="w-14 h-14 rounded-2xl bg-accent text-white flex items-center justify-center text-xl font-bold mb-6">
                    02
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Complete Verification
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Complete applicable identity, address
                    and investor verification requirements.
                </p>

            </div>

            <!-- Step 3 -->
            <div>

                <div class="w-14 h-14 rounded-2xl bg-brand text-white flex items-center justify-center text-xl font-bold mb-6">
                    03
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Explore & Invest
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Review eligible opportunities, understand
                    the terms and place your investment order.
                </p>

            </div>

            <!-- Step 4 -->
            <div>

                <div class="w-14 h-14 rounded-2xl bg-accent text-white flex items-center justify-center text-xl font-bold mb-6">
                    04
                </div>

                <h3 class="text-lg font-bold text-brand">
                    Track Your Portfolio
                </h3>

                <p class="text-sm text-muted leading-7 mt-3">
                    Monitor holdings, account activity and
                    available redemption options.
                </p>

            </div>

        </div>

        <div class="text-center mt-14">

            <a href="<?= BASE_URL ?>/public/how-it-works.php"
               class="btn btn-outline">

                See the full process
                <i class="fa-solid fa-arrow-right text-xs"></i>

            </a>

        </div>

    </div>

</section>


<!-- =========================================
     TRUST & TRANSPARENCY
========================================= -->

<section class="py-24 bg-white">

    <div class="max-w-5xl mx-auto px-5 lg:px-8 text-center">

        <div class="w-16 h-16 bg-accent-light text-accent rounded-2xl flex items-center justify-center mx-auto mb-7">
            <i class="fa-solid fa-shield-halved text-2xl"></i>
        </div>

        <span class="text-accent text-sm font-bold uppercase tracking-wider">
            Transparency matters
        </span>

        <h2 class="text-3xl lg:text-4xl font-bold text-brand mt-4">
            Understand what you're investing in.
        </h2>

        <p class="text-muted leading-8 mt-6 max-w-3xl mx-auto">
            Every investment carries its own risks, costs, liquidity
            conditions and potential outcomes. We believe investors
            should have access to clear product information and
            relevant disclosures before making decisions.
        </p>

        <div class="grid sm:grid-cols-3 gap-6 mt-12 text-left">

            <div class="border border-border rounded-xl p-6">

                <i class="fa-solid fa-book-open text-accent text-xl mb-4"></i>

                <h3 class="font-bold text-brand">
                    Product Information
                </h3>

                <p class="text-sm text-muted leading-7 mt-2">
                    Understand investment objectives, terms and conditions.
                </p>

            </div>

            <div class="border border-border rounded-xl p-6">

                <i class="fa-solid fa-triangle-exclamation text-orange-500 text-xl mb-4"></i>

                <h3 class="font-bold text-brand">
                    Risk Awareness
                </h3>

                <p class="text-sm text-muted leading-7 mt-2">
                    Review potential risks and possible loss of capital.
                </p>

            </div>

            <div class="border border-border rounded-xl p-6">

                <i class="fa-solid fa-file-lines text-accent text-xl mb-4"></i>

                <h3 class="font-bold text-brand">
                    Account Records
                </h3>

                <p class="text-sm text-muted leading-7 mt-2">
                    Follow transactions and access relevant account documents.
                </p>

            </div>

        </div>

        <a href="<?= BASE_URL ?>/public/disclosures.php"
           class="inline-flex items-center gap-2 text-accent font-semibold text-sm mt-10">

            Read our risk disclosures
            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

</section>


<!-- =========================================
     FINAL CALL TO ACTION
========================================= -->

<section class="bg-brand py-20 relative overflow-hidden">

    <div class="absolute top-0 right-0 w-80 h-80 rounded-full bg-accent opacity-10 blur-3xl"></div>

    <div class="max-w-4xl mx-auto px-5 text-center relative">

        <span class="text-emerald-400 text-sm font-bold uppercase tracking-wider">
            Take your next step
        </span>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mt-5 leading-tight">
            Your financial future deserves a thoughtful approach.
        </h2>

        <p class="text-gray-300 leading-8 mt-6 max-w-2xl mx-auto">
            Create an account, explore available opportunities
            and take the time to understand your investment options.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-9">

            <a href="<?= BASE_URL ?>/auth/register.php"
               class="btn btn-accent px-8 py-4">

                Create Your Account
                <i class="fa-solid fa-arrow-right text-xs"></i>

            </a>

            <a href="<?= BASE_URL ?>/public/investments.php"
               class="inline-flex items-center justify-center px-8 py-4 border border-white/20 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">

                Explore Investments

            </a>

        </div>

    </div>

</section>


<!-- PUBLIC FOOTER -->

<?php

include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';

?>

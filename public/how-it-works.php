<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'How It Works | InvestGlobal';
$activePage = 'how-it-works';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main class="bg-canvas min-h-screen">

    <!-- HERO -->
    <section class="bg-brand text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
            <div class="max-w-3xl">
                <span class="text-gold text-sm font-semibold">
                    HOW IT WORKS
                </span>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mt-4 mb-5">
                    A clearer way to explore investing.
                </h1>

                <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-2xl">
                    Learn how an investor account is intended to work—from
                    setting up your profile to reviewing opportunities and
                    monitoring your portfolio.
                </p>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="inline-flex items-center gap-2 mt-8 btn btn-accent">
                    Explore investments
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- JOURNEY STEPS -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
        <div class="max-w-2xl mb-12">
            <span class="text-accent text-sm font-semibold">THE INVESTOR JOURNEY</span>
            <h2 class="text-3xl font-bold text-gray-900 mt-3">
                From getting started to tracking your investments
            </h2>
            <p class="text-muted leading-relaxed mt-4">
                The steps below describe the intended platform experience.
                Actual availability and requirements depend on the products
                offered and the investor's jurisdiction.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- STEP 1 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-gold-light text-gold-dark flex items-center justify-center">
                        <i class="fa-solid fa-user-plus text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 01</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Create your account</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            Start by providing your basic details and setting up
                            secure access to your investor account.
                        </p>
                    </div>
                </div>
            </article>

            <!-- STEP 2 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-emerald-50 text-accent flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 02</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Complete verification</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            Provide the identity, residency and other information
                            required for the products and services available to you.
                        </p>
                    </div>
                </div>
            </article>

            <!-- STEP 3 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-chart text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 03</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Explore opportunities</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            Review available investment options, including their
                            objectives, terms, fees, risks and eligibility criteria.
                        </p>
                    </div>
                </div>
            </article>

            <!-- STEP 4 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                        <i class="fa-solid fa-file-signature text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 04</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Review before investing</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            Check the product documents and confirm the details
                            of an investment order before submitting it.
                        </p>
                    </div>
                </div>
            </article>

            <!-- STEP 5 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-gold-light text-gold-dark flex items-center justify-center">
                        <i class="fa-solid fa-chart-pie text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 05</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Monitor your portfolio</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            View your holdings, transaction history, documents
                            and available portfolio information in one place.
                        </p>
                    </div>
                </div>
            </article>

            <!-- STEP 6 -->
            <article class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 shrink-0 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center">
                        <i class="fa-solid fa-arrow-right-arrow-left text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-accent">STEP 06</span>
                        <h3 class="text-lg font-bold text-gray-900 mt-1">Review exit options</h3>
                        <p class="text-sm text-muted leading-relaxed mt-3">
                            When permitted by the product terms, request redemption.
                            After settlement, eligible cash may be withdrawn using
                            the supported payout methods.
                        </p>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- REDEMPTION VS WITHDRAWAL -->
    <section class="bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="max-w-2xl mb-10">
                <span class="text-accent text-sm font-semibold">IMPORTANT DISTINCTION</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-3">
                    Redemption and withdrawal are different
                </h2>
                <p class="text-muted leading-relaxed mt-4">
                    An investment is not the same as cash in your account.
                    The steps for exiting an investment and transferring settled
                    cash are handled separately.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-canvas rounded-xl p-6 md:p-8">
                    <div class="w-12 h-12 rounded-xl bg-gold-light text-gold-dark flex items-center justify-center mb-5">
                        <i class="fa-solid fa-rotate text-lg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Redemption</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        A request to exit an investment, subject to its eligibility,
                        timing, fees and other product terms. If processed, the
                        proceeds are settled according to those terms.
                    </p>
                </div>

                <div class="bg-canvas rounded-xl p-6 md:p-8">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-accent flex items-center justify-center mb-5">
                        <i class="fa-solid fa-building-columns text-lg"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Withdrawal</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        A request to transfer eligible cash from the platform to
                        a supported external account. Processing may involve
                        verification, review and payout timing.
                    </p>
                </div>
            </div>

            <div class="mt-6 bg-gold-light border border-gold/30 rounded-xl p-5 flex gap-3">
                <i class="fa-solid fa-circle-info text-brand mt-0.5"></i>
                <p class="text-sm text-gray-700 leading-relaxed">
                    In short: an investment may need to be redeemed and settled
                    before its proceeds can be withdrawn as cash.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="max-w-4xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
        <div class="text-center mb-10">
            <span class="text-accent text-sm font-semibold">COMMON QUESTIONS</span>
            <h2 class="text-3xl font-bold text-gray-900 mt-3">
                A few things to know
            </h2>
        </div>

        <div class="space-y-4">

            <details class="bg-white border border-gray-200 rounded-xl p-5">
                <summary class="cursor-pointer font-semibold text-gray-900 flex items-center justify-between gap-4">
                    Can anyone invest through the platform?
                    <i class="fa-solid fa-chevron-down text-muted text-sm"></i>
                </summary>
                <p class="text-sm text-muted leading-relaxed mt-4">
                    Not necessarily. Product access can depend on your country
                    of residence, verification status, investor classification,
                    product rules and applicable requirements.
                </p>
            </details>

            <details class="bg-white border border-gray-200 rounded-xl p-5">
                <summary class="cursor-pointer font-semibold text-gray-900 flex items-center justify-between gap-4">
                    Are investment returns guaranteed?
                    <i class="fa-solid fa-chevron-down text-muted text-sm"></i>
                </summary>
                <p class="text-sm text-muted leading-relaxed mt-4">
                    Investments involve risk and may lose value. Any return
                    information must be read alongside the relevant product
                    documents and risk disclosures. Do not assume returns are guaranteed.
                </p>
            </details>

            <details class="bg-white border border-gray-200 rounded-xl p-5">
                <summary class="cursor-pointer font-semibold text-gray-900 flex items-center justify-between gap-4">
                    How long does redemption or withdrawal take?
                    <i class="fa-solid fa-chevron-down text-muted text-sm"></i>
                </summary>
                <p class="text-sm text-muted leading-relaxed mt-4">
                    Timing varies by product, settlement requirements, supported
                    payout method and any necessary reviews. The applicable terms
                    should explain the expected process.
                </p>
            </details>

           <!-- <details class="bg-white border border-gray-200 rounded-xl p-5">
                <summary class="cursor-pointer font-semibold text-gray-900 flex items-center justify-between gap-4">
                    Is this prototype accepting real investments?
                    <i class="fa-solid fa-chevron-down text-muted text-sm"></i>
                </summary>
                <p class="text-sm text-muted leading-relaxed mt-4">
                    No. This is a frontend demonstration. Account creation,
                    verification, funding and investment actions are not connected
                    to live financial services.
                </p>
            </details> -->

        </div>
    </section>

    <!-- CTA -->
    <section class="bg-brand">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Start by exploring your options
            </h2>

            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Browse the illustrative opportunities in the marketplace
                and learn about the investor experience.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="<?= BASE_URL ?>/public/investments.php" class="btn btn-accent">
                    Explore investments
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

                <a href="<?= BASE_URL ?>/public/disclosures.php"
                   class="border border-white/30 text-white px-5 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                    Read disclosures
                </a>
            </div>
        </div>
    </section>

</main>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>
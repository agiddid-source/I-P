
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'About Us | InvestGlobal';
$activePage = 'about';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main class="bg-canvas min-h-screen">

    <!-- HERO -->
    <section class="bg-brand text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
            <div class="max-w-3xl">
                <span class="text-emerald-300 text-sm font-semibold">ABOUT INVESTGLOBAL</span>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mt-4 mb-5">
                    Helping people approach investing with greater clarity.
                </h1>

                <p class="text-gray-300 text-base md:text-lg leading-relaxed">
                    InvestGlobal is a prototype for an investment platform
                    designed to make investment information, portfolio visibility
                    and account activity easier to understand.
                </p>
            </div>
        </div>
    </section>

    <!-- INTRO -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-accent text-sm font-semibold">OUR PURPOSE</span>

                <h2 class="text-3xl font-bold text-gray-900 mt-3 mb-5">
                    Make complex investment information easier to navigate.
                </h2>

                <p class="text-muted leading-relaxed mb-4">
                    Investing can involve unfamiliar terms, different product
                    structures and important decisions. The platform concept
                    brings product information and investor account tools
                    together in one digital experience.
                </p>

                <p class="text-muted leading-relaxed">
                    The goal is to help people review information, understand
                    relevant risks and follow their investment activity with
                    greater confidence—not to promise outcomes or remove risk.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-2xl p-6 md:p-8">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-canvas rounded-xl p-5">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 text-brand flex items-center justify-center mb-4">
                            <i class="fa-solid fa-compass"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900">Explore</h3>
                        <p class="text-xs text-muted leading-relaxed mt-2">
                            Review investment categories and product information.
                        </p>
                    </div>

                    <div class="bg-canvas rounded-xl p-5">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 text-accent flex items-center justify-center mb-4">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900">Understand</h3>
                        <p class="text-xs text-muted leading-relaxed mt-2">
                            Read terms, fees, eligibility and risk information.
                        </p>
                    </div>

                    <div class="bg-canvas rounded-xl p-5">
                        <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900">Monitor</h3>
                        <p class="text-xs text-muted leading-relaxed mt-2">
                            Keep track of holdings and account activity.
                        </p>
                    </div>

                    <div class="bg-canvas rounded-xl p-5">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900">Stay informed</h3>
                        <p class="text-xs text-muted leading-relaxed mt-2">
                            Find important notices and product disclosures.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRINCIPLES -->
    <section class="bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
            <div class="max-w-2xl mb-12">
                <span class="text-accent text-sm font-semibold">OUR PRINCIPLES</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-3">
                    The experience we aim to build
                </h2>
                <p class="text-muted leading-relaxed mt-4">
                    These principles guide the design of the platform and
                    the way investment information should be presented.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

                <article class="border border-gray-200 rounded-xl p-6">
                    <div class="w-11 h-11 rounded-lg bg-blue-50 text-brand flex items-center justify-center mb-5">
                        <i class="fa-solid fa-eye text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Clarity</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Present product information, fees and risks in a way
                        that is easier to find and understand.
                    </p>
                </article>

                <article class="border border-gray-200 rounded-xl p-6">
                    <div class="w-11 h-11 rounded-lg bg-emerald-50 text-accent flex items-center justify-center mb-5">
                        <i class="fa-solid fa-scale-balanced text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Informed decisions</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Support careful review rather than pressure or
                        promises about investment outcomes.
                    </p>
                </article>

                <article class="border border-gray-200 rounded-xl p-6">
                    <div class="w-11 h-11 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-list-check text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Visibility</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Make account activity, records and important
                        updates easier to follow.
                    </p>
                </article>

                <article class="border border-gray-200 rounded-xl p-6">
                    <div class="w-11 h-11 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-5">
                        <i class="fa-solid fa-user-shield text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Responsibility</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Treat investor information, eligibility and
                        risk disclosures as important parts of the experience.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- PLATFORM SCOPE -->
    <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <span class="text-accent text-sm font-semibold">THE PLATFORM</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-3 mb-5">
                    One place to explore and manage investment activity.
                </h2>

                <p class="text-muted leading-relaxed">
                    The planned experience brings together public investment
                    information and investor tools. Depending on the final
                    product and service arrangements, these may include
                    investment access, portfolio monitoring, transaction
                    records, redemption requests and withdrawal tracking.
                </p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8">
                <h3 class="font-bold text-gray-900 mb-5">The experience is designed to support</h3>

                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <i class="fa-solid fa-check text-accent mt-1"></i>
                        <span class="text-sm text-muted">Browsing investment categories and product information</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fa-solid fa-check text-accent mt-1"></i>
                        <span class="text-sm text-muted">Reviewing product terms and relevant risk information</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fa-solid fa-check text-accent mt-1"></i>
                        <span class="text-sm text-muted">Viewing holdings, transactions and account documents</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fa-solid fa-check text-accent mt-1"></i>
                        <span class="text-sm text-muted">Following the status of eligible requests and account activity</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- PROTOTYPE NOTICE -->
   <!-- <div> <section class="max-w-7xl mx-auto px-6 lg:px-8 pb-16">
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 md:p-8">
            <div class="flex items-start gap-4">
                <div class="w-11 h-11 rounded-lg bg-white text-amber-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-circle-info text-lg"></i>
                </div>

               
                    <h2 class="font-bold text-gray-900 mb-2">
                        About this prototype
                    </h2>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        InvestGlobal is currently a frontend prototype. The
                        product examples and interface content are illustrative.
                        This website does not provide live investment services,
                        accept funds, execute trades or process withdrawals.
                        Any future live service would require appropriate
                        operating arrangements, product documentation and
                        compliance with applicable requirements.
                    </p>
                </div> 
            </div>
        </div>
    </section> -->

    <!-- CTA -->
    <section class="bg-brand">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Explore the platform concept
            </h2>

            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Browse the sample opportunities and learn how the
                investor journey is intended to work.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="<?= BASE_URL ?>/public/investments.php" class="btn btn-accent">
                    Explore investments
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

                <a href="<?= BASE_URL ?>/public/how-it-works.php"
                   class="border border-white/30 text-white px-5 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                    How it works
                </a>
            </div>
        </div>
    </section>

</main>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>

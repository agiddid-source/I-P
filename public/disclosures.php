<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Risk & Disclosures | InvestGlobal';
$activePage = '';

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/public/header.php';
?>

<main>
    <!-- Hero -->
    <section class="bg-brand text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 px-3 py-1 text-sm text-white/80">
                    <i class="fa-solid fa-shield-halved"></i>
                    Important information
                </span>

                <h1 class="mt-6 text-4xl font-bold tracking-tight sm:text-5xl">
                    Risk & disclosures
                </h1>

                <p class="mt-5 max-w-2xl text-lg leading-8 text-white/75">
                    Understand the risks, limitations, and important conditions
                    associated with investing before making any investment decision.
                </p>
            </div>
        </div>
    </section>

    <!-- Prototype notice -->
    <!-- <section class="mx-auto max-w-7xl px-4 pt-8 sm:px-6 lg:px-8">
        <div class="flex gap-4 rounded-2xl border border-amber-200 bg-amber-50 p-5 text-amber-950">
            <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-100">
                <i class="fa-solid fa-triangle-exclamation text-amber-700"></i>
            </div>

            <div>
                <h2 class="font-semibold">Prototype notice</h2>
                <p class="mt-1 text-sm leading-6 text-amber-900">
                    InvestGlobal is currently a frontend prototype. It does not accept
                    money, execute trades, provide live investment services, or make
                    real investment offers. Product examples, figures, and terms shown
                    on this website are illustrative only.
                </p>
            </div>
        </div>
    </section> -->

    <!-- Introduction -->
   <!-- <section class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                    Before you invest
                </p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-brand">
                    Investing involves risk
                </h2>
                <p class="mt-4 leading-7 text-muted">
                    The value of investments can rise or fall. You may receive less
                    than you invest, and in some cases you may lose your entire
                    investment. Consider your circumstances, objectives, and ability
                    to bear losses before investing.
                </p>
            </div>

            <div class="rounded-2xl border border-border bg-white p-6 sm:p-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent-dark">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-brand">
                            This page is general information
                        </h3>
                        <p class="mt-2 leading-7 text-muted">
                            Nothing on this website is personalized financial, investment,
                            legal, or tax advice. The information is not a recommendation
                            to buy, sell, hold, or redeem any financial product.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Key risks -->
    <section class="bg-canvas py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                    Key considerations before investing
                </p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-brand">
                    Risks to understand
                </h2>
                <p class="mt-4 leading-7 text-muted">
                    The risks below are examples, not a complete list. Actual risks
                    depend on the investment, its terms, and your circumstances.
                </p>
            </div>

            <div class="mt-8 grid gap-5 md:grid-cols-2">
                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Market and capital risk
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        Market prices and investment values can change. Returns are
                        not guaranteed, and you may lose some or all of your capital.
                        Past performance does not reliably predict future results.
                    </p>
                </article>

                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-light text-gold-dark">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Liquidity and timing risk
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        An investment may not be easy to sell or exit when you want.
                        Redemptions may be subject to eligibility, notice periods,
                        gates, settlement delays, or other product-specific terms.
                    </p>
                </article>

                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Currency and foreign exchange risk
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        If an investment or transaction uses a currency different
                        from your own, exchange-rate movements and conversion costs
                        may affect its value and the amount you receive.
                    </p>
                </article>

                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-700">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Fees, charges, and tax
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        Fees, taxes, duties, and other costs may reduce your returns
                        or proceeds. Their treatment can vary by product and by the
                        country where you live or invest.
                    </p>
                </article>

                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-green-700">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Issuer, provider, and custody risk
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        An issuer, intermediary, custodian, or other service provider
                        may fail to meet its obligations. Any protections or recovery
                        options depend on the product, provider, and applicable rules.
                    </p>
                </article>

                <article class="rounded-2xl border border-border bg-white p-6">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-100 text-slate-700">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-brand">
                        Jurisdiction and eligibility
                    </h3>
                    <p class="mt-2 leading-7 text-muted">
                        Products and services may only be available in certain
                        jurisdictions or to eligible investor types. Access may depend
                        on identity checks, residency, and other requirements.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Product and service conditions -->
    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                Product and service conditions
            </p>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-brand">
                Read the specific terms
            </h2>
            <p class="mt-4 leading-7 text-muted">
                Each investment may have different objectives, risks, fees, eligibility
                rules, and exit conditions. Review the relevant product documentation
                before making a decision.
            </p>
        </div>

        <div class="mt-8 space-y-4">
            <details class="group rounded-xl border border-border bg-white p-5" open>
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-brand">
                    <span>Returns and projections</span>
                    <i class="fa-solid fa-chevron-down text-sm text-muted transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 leading-7 text-muted">
                    Any target, projected, estimated, or historical return is not a
                    promise of future performance. Actual outcomes may differ
                    materially from estimates, and returns may be negative.
                </p>
            </details>

            <details class="group rounded-xl border border-border bg-white p-5">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-brand">
                    <span>Redemptions, settlement, and withdrawals</span>
                    <i class="fa-solid fa-chevron-down text-sm text-muted transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 leading-7 text-muted">
                    A redemption request is not the same as a cash withdrawal.
                    Investment exit requests may require review and settlement before
                    proceeds become available as cash. Withdrawal requests may then
                    be subject to additional checks, processing times, fees, or limits.
                    Timing is not guaranteed unless stated in applicable product terms.
                </p>
            </details>

            <details class="group rounded-xl border border-border bg-white p-5">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-brand">
                    <span>Identity checks and account access</span>
                    <i class="fa-solid fa-chevron-down text-sm text-muted transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 leading-7 text-muted">
                    A live service may require identity verification, address
                    verification, tax information, source-of-funds checks, and other
                    compliance reviews. Account or product access may be restricted
                    where required by law or service-provider rules.
                </p>
            </details>

            <details class="group rounded-xl border border-border bg-white p-5">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-brand">
                    <span>Third-party services</span>
                    <i class="fa-solid fa-chevron-down text-sm text-muted transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 leading-7 text-muted">
                    A future live platform may rely on regulated financial institutions
                    or other third-party providers. Their roles, authorizations,
                    protections, and terms must be confirmed in the relevant product
                    and legal documentation. This prototype does not represent that
                    any provider relationship is active.
                </p>
            </details>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="bg-brand">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div class="max-w-2xl">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">
                        Take time to understand an investment
                    </h2>
                    <p class="mt-3 leading-7 text-white/75">
                        Review the available information and product-specific terms
                        before deciding whether an investment is appropriate for you.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="<?= BASE_URL ?>/public/investments.php" class="btn btn-accent">
                        Explore examples
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                    <a href="<?= BASE_URL ?>/public/how-it-works.php" class="btn btn-outline border-white/30 text-white hover:bg-white/10">
                        How it works
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/components/public/footer.php';
include ROOT_PATH . '/components/shared/footer.php';
?>
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Welcome | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen">

    <!-- Header -->
    <header class="border-b border-border bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">

            <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                <?php
                $logoVariant = 'default';
                $logoClass   = 'h-11 w-auto';
                include ROOT_PATH . '/components/shared/logo.php';
                ?>
            </a>

            <span class="rounded-full bg-accent-light px-3 py-1.5 text-xs font-semibold text-accent-dark">
                Account setup
            </span>

        </div>
    </header>

    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <!-- Progress -->
        <div class="mx-auto mb-12 max-w-3xl">
            <div class="flex items-center justify-between text-xs font-medium text-muted">
                <span>Investor onboarding</span>
                <span>Step 1 of 7</span>
            </div>

            <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-gray-200">
                <div class="h-full w-[14.28%] rounded-full bg-accent"></div>
            </div>
        </div>

        <!-- Welcome content -->
        <div class="mx-auto max-w-3xl">

            <div class="text-center">

                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-accent-light text-accent-dark">
                    <i class="fa-solid fa-handshake-angle text-3xl"></i>
                </div>

                <p class="mt-7 text-sm font-semibold uppercase tracking-wider text-accent-dark">
                    Welcome to InvestGlobal
                </p>

                <h1 class="mt-3 text-3xl font-bold tracking-tight text-brand sm:text-4xl">
                    Let's get your investor profile ready.
                </h1>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-muted">
                    Before you can access eligible investment opportunities,
                    we need a little more information about you. This helps
                    establish your investor profile and determine which services
                    may be available to you.
                </p>

            </div>

            <!-- Onboarding overview -->
            <div class="mt-12 rounded-2xl border border-border bg-white p-6 shadow-sm sm:p-8">

                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-bold text-brand">
                            Your onboarding checklist
                        </h2>
                        <p class="mt-1 text-sm text-muted">
                            Here's what we'll walk you through.
                        </p>
                    </div>

                    <span class="rounded-lg bg-canvas px-3 py-2 text-xs font-semibold text-muted">
                        7 steps
                    </span>
                </div>

                <div class="mt-7 space-y-6">

                    <!-- Step 1 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent-dark">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Personal information</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Tell us your name, date of birth, nationality,
                                and basic personal details.
                            </p>
                        </div>

                        <span class="text-xs font-medium text-accent-dark">Next</span>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 2 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-id-card"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Identity verification</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Provide identification details to establish
                                your identity.
                            </p>
                        </div>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 3 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Address verification</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Provide your residential address and supporting
                                address information.
                            </p>
                        </div>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 4 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-file-invoice"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Tax information</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Provide relevant tax residency and identification
                                information where applicable.
                            </p>
                        </div>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 5 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-clipboard-list"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Investor questionnaire</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Answer questions about your investment experience,
                                objectives, and risk tolerance.
                            </p>
                        </div>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 6 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Review your information</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Check your information before submitting
                                your onboarding application.
                            </p>
                        </div>
                    </div>

                    <div class="ml-5 h-4 border-l border-dashed border-border"></div>

                    <!-- Step 7 -->
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-canvas text-muted">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div class="flex-1">
                            <h3 class="font-semibold text-brand">Application review</h3>
                            <p class="mt-1 text-sm leading-6 text-muted">
                                Your submitted information can then be reviewed
                                before access to eligible services is granted.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Important note -->
            <div class="mt-6 flex gap-3 rounded-xl border border-gold/40 bg-gold-light p-5">
                <i class="fa-solid fa-circle-info mt-0.5 text-gold-dark"></i>

                <div>
                    <h3 class="text-sm font-semibold text-brand">
                        A quick note about verification
                    </h3>

                    <p class="mt-1 text-sm leading-6 text-brand">
                        Information requirements can differ depending on your
                        country of residence, investor classification, and
                        applicable regulations. Completing these screens does
                        not automatically guarantee account approval.
                    </p>
                </div>
            </div>

            <!-- Actions -->
            <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-between">

                <a href="<?= BASE_URL ?>/auth/login.php" class="text-center text-sm font-medium text-muted hover:text-brand">
                    Sign out
                </a>

                <a href="<?= BASE_URL ?>/onboarding/personal-information.php" class="btn btn-primary justify-center px-7 py-3.5">
                    Begin onboarding
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

            </div>

            <p class="mt-8 text-center text-xs text-muted">
                &copy; <?= date('Y') ?> InvestGlobal. All rights reserved.
            </p>

        </div>

    </div>

</main>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
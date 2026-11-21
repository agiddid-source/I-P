
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Application Status | InvestGlobal';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen bg-canvas px-4 py-10 sm:px-6">
    <div class="mx-auto max-w-3xl">

        <!-- Brand -->
        <a href="<?= BASE_URL ?>/public/index.php"
           class="mb-10 inline-flex items-center gap-2 text-xl font-bold tracking-tight text-brand">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand text-white">
                <i class="fa-solid fa-chart-line"></i>
            </span>
            InvestGlobal
        </a>

        <!-- Status heading -->
        <div class="mb-8">
            <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-100 text-amber-600">
                <i class="fa-solid fa-clock text-2xl"></i>
            </div>

            <span class="text-sm font-semibold uppercase tracking-wider text-amber-600">
                Awaiting review
            </span>

            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Your application is in the queue.
            </h1>

            <p class="mt-3 max-w-2xl leading-7 text-gray-500">
                Your onboarding journey is complete. The next stage is an application
                review to assess your submitted information and eligibility.
            </p>
        </div>

        <!-- Reference card -->
        <section class="mb-6 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
            <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                <div>
                    <p class="text-sm text-gray-500">Application reference</p>
                    <p class="mt-1 text-lg font-bold tracking-wide text-gray-900">
                        IG-DEMO-000001
                    </p>
                </div>

                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-amber-50 px-3 py-2 text-xs font-semibold text-amber-700">
                    <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                    Awaiting review
                </span>
            </div>

            <div class="mt-5 border-t border-gray-100 pt-4">
                <p class="text-xs leading-5 text-gray-400">
                    Demonstration reference only. This prototype does not create
                    or transmit an actual investment application.
                </p>
            </div>
        </section>

        <!-- Timeline -->
        <section class="mb-6 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">
            <h2 class="text-lg font-bold text-gray-900">
                Application progress
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Here's how the review process is expected to progress.
            </p>

            <div class="mt-8">

                <!-- Step 1 -->
                <div class="relative flex gap-4 pb-9">
                    <div class="absolute bottom-0 left-[15px] top-8 w-px bg-accent"></div>

                    <div class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-accent text-white">
                        <i class="fa-solid fa-check text-xs"></i>
                    </div>

                    <div class="flex-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="font-semibold text-gray-900">Application completed</h3>
                            <span class="text-xs font-medium text-accent-dark">Completed</span>
                        </div>
                        <p class="mt-1 text-sm leading-6 text-gray-500">
                            Your onboarding information and declarations have been
                            completed in this demonstration.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex gap-4 pb-9">
                    <div class="absolute bottom-0 left-[15px] top-8 w-px border-l border-dashed border-gray-300"></div>

                    <div class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border-2 border-amber-500 bg-amber-50">
                        <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                    </div>

                    <div class="flex-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="font-semibold text-gray-900">Application review</h3>
                            <span class="text-xs font-semibold text-amber-600">Current stage</span>
                        </div>
                        <p class="mt-1 text-sm leading-6 text-gray-500">
                            The operations and compliance teams would review your
                            identity, address, tax information and investor profile.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex gap-4 pb-9">
                    <div class="absolute bottom-0 left-[15px] top-8 w-px border-l border-dashed border-gray-300"></div>

                    <div class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-400">
                        <i class="fa-solid fa-file-circle-exclamation text-xs"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-700">Additional information</h3>
                        <p class="mt-1 text-sm leading-6 text-gray-500">
                            If clarification or supporting documents are needed,
                            you would be notified here.
                        </p>
                        <span class="mt-2 inline-block text-xs text-gray-400">If required</span>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex gap-4">
                    <div class="relative z-10 flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-gray-400">
                        <i class="fa-solid fa-shield-check text-xs"></i>
                    </div>

                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-700">Account decision</h3>
                        <p class="mt-1 text-sm leading-6 text-gray-500">
                            Once the review is complete, an eligibility decision
                            would be communicated to you.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Review information -->
        <section class="mb-6 rounded-2xl border border-blue-100 bg-blue-50 p-5">
            <div class="flex gap-3">
                <i class="fa-solid fa-circle-info mt-1 text-blue-600"></i>
                <div>
                    <h3 class="font-semibold text-blue-900">What happens next?</h3>
                    <p class="mt-1 text-sm leading-6 text-blue-800">
                        Review timelines depend on your jurisdiction,
                        document quality, verification providers
                        and compliance requirements. You would receive 
                        notifications when your application status changes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Actions -->
        <div class="flex flex-col gap-3 sm:flex-row">
            <a href="<?= BASE_URL ?>/auth/login.php"
               class="btn btn-primary flex-1 justify-center py-3">
                Continue to login
                <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>

            <a href="<?= BASE_URL ?>/public/index.php"
               class="btn btn-outline flex-1 justify-center py-3">
                Back to homepage
            </a>
        </div>

        <!-- Footer -->
        <p class="mt-10 text-center text-xs leading-6 text-gray-400">
            InvestGlobal is a demonstration investment platform.
            All application statuses and reference numbers on this page are simulated.
        </p>

    </div>
</main>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

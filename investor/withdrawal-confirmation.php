<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Withdrawal Confirmation';
$bodyClass = 'bg-gray-50 text-gray-900';

$reference = 'WDR-2026-0019';
$currency = 'USD';
$amount = 650.00;
$fee = 0.00;
$total = $amount + $fee;
$destination = 'Example Bank · •••• 4821';
$requestDate = 'Nov 25, 2026';

function withdrawalConfirmationMoney($amount, $currency) {
    $symbols = ['USD' => '$', 'EUR' => '€', 'GBP' => '£'];
    return ($symbols[$currency] ?? $currency . ' ') . number_format((float) $amount, 2);
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
include ROOT_PATH . '/components/investor/topbar.php';
?>

<main class="min-h-screen lg:pl-64">
    <div class="mx-auto max-w-4xl px-4 pb-24 pt-6 sm:px-6 lg:px-8 lg:pb-10">
        <div class="mb-6">
            <a href="<?= BASE_URL ?>/investor/withdrawals.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 transition hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to withdrawals
            </a>
        </div>

        <section class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">
            <div class="border-b border-gray-100 px-5 py-8 text-center sm:px-8">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                    <i class="fa-solid fa-check text-2xl"></i>
                </div>
                <p class="mt-5 text-sm font-medium text-gray-500">Sample withdrawal confirmation</p>
                <h1 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                    Withdrawal request reviewed
                </h1>
                <p class="mx-auto mt-3 max-w-xl text-sm leading-6 text-gray-500">
                    This is a demonstration confirmation screen. It does not indicate that a real withdrawal was submitted or processed.
                </p>
                <p class="mt-5 text-3xl font-bold tracking-tight text-gray-900">
                    <?= withdrawalConfirmationMoney($amount, $currency) ?>
                </p>
                <span class="mt-3 inline-flex rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700 ring-1 ring-inset ring-amber-200">
                    Sample · Not submitted
                </span>
            </div>

            <div class="grid gap-8 p-5 sm:grid-cols-2 sm:p-8">
                <div>
                    <h2 class="text-base font-semibold text-gray-900">Withdrawal summary</h2>
                    <dl class="mt-4 space-y-4">
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-sm text-gray-500">Reference</dt>
                            <dd class="text-right text-sm font-semibold text-gray-900"><?= htmlspecialchars($reference) ?></dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-sm text-gray-500">Request date</dt>
                            <dd class="text-right text-sm font-semibold text-gray-900"><?= htmlspecialchars($requestDate) ?></dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-sm text-gray-500">Currency</dt>
                            <dd class="text-right text-sm font-semibold text-gray-900"><?= htmlspecialchars($currency) ?></dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-sm text-gray-500">Illustrative fee</dt>
                            <dd class="text-right text-sm font-semibold text-gray-900"><?= withdrawalConfirmationMoney($fee, $currency) ?></dd>
                        </div>
                        <div class="flex items-start justify-between gap-4 border-t border-gray-100 pt-4">
                            <dt class="text-sm font-semibold text-gray-700">Total debit</dt>
                            <dd class="text-right text-sm font-bold text-gray-900"><?= withdrawalConfirmationMoney($total, $currency) ?></dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h2 class="text-base font-semibold text-gray-900">Destination account</h2>
                    <div class="mt-4 rounded-xl border border-gray-200 p-4">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gray-100 text-gray-600">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Saved bank account</p>
                                <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($destination) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl bg-blue-50 p-4">
                        <p class="text-sm font-semibold text-blue-900">What happens in a real process?</p>
                        <p class="mt-2 text-sm leading-5 text-blue-800">
                            A withdrawal may be reviewed before payout. Once approved, the transfer can be processed and reconciled. Timing and fees depend on the applicable provider and account terms.
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 bg-gray-50 px-5 py-5 sm:px-8">
                <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
                    <a href="<?= BASE_URL ?>/investor/cash.php"
                       class="inline-flex items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                        View cash account
                    </a>
                    <a href="<?= BASE_URL ?>/investor/withdrawals.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#163A59]">
                        View withdrawals
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </section>

        <p class="mt-5 text-center text-xs leading-5 text-gray-400">
            Prototype only. This screen displays fixed sample values and is not connected to the withdrawal request form, a bank, or a payment provider.
        </p>
    </div>
</main>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
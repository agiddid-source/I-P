<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Withdrawal Details';
$bodyClass = 'bg-gray-50 text-gray-900';

$withdrawals = [
    'WDR-2026-0018' => [
        'id' => 'WDR-2026-0018',
        'currency' => 'USD',
        'amount' => 650.00,
        'fee' => 0.00,
        'destination' => 'Example Bank · •••• 4821',
        'requested' => 'Nov 21, 2026 · 10:30 AM',
        'status' => 'Under Review',
        'status_class' => 'bg-amber-50 text-amber-700 ring-amber-200',
        'note' => 'This sample withdrawal is awaiting review. No funds have been transferred.',
        'timeline' => [
            ['title' => 'Withdrawal request received', 'date' => 'Nov 21, 2026 · 10:30 AM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'In progress', 'state' => 'current'],
            ['title' => 'Payout processing', 'date' => 'Not started', 'state' => 'upcoming'],
            ['title' => 'Transfer completed', 'date' => 'Not started', 'state' => 'upcoming'],
        ],
    ],
    'WDR-2026-0017' => [
        'id' => 'WDR-2026-0017',
        'currency' => 'EUR',
        'amount' => 300.00,
        'fee' => 2.50,
        'destination' => 'Example Bank · •••• 9134',
        'requested' => 'Nov 18, 2026 · 9:15 AM',
        'status' => 'Completed',
        'status_class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
        'note' => 'This illustrative transfer is marked completed. The record is not connected to a bank or payment provider.',
        'timeline' => [
            ['title' => 'Withdrawal request received', 'date' => 'Nov 18, 2026 · 9:15 AM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 18, 2026 · 11:00 AM', 'state' => 'complete'],
            ['title' => 'Payout processing', 'date' => 'Nov 19, 2026 · 2:20 PM', 'state' => 'complete'],
            ['title' => 'Transfer completed', 'date' => 'Nov 20, 2026 · 9:45 AM', 'state' => 'complete'],
        ],
    ],
    'WDR-2026-0016' => [
        'id' => 'WDR-2026-0016',
        'currency' => 'USD',
        'amount' => 500.00,
        'fee' => 0.00,
        'destination' => 'Example Bank · •••• 4821',
        'requested' => 'Nov 15, 2026 · 1:40 PM',
        'status' => 'Processing',
        'status_class' => 'bg-blue-50 text-blue-700 ring-blue-200',
        'note' => 'This sample withdrawal is in processing. No live payout has been initiated.',
        'timeline' => [
            ['title' => 'Withdrawal request received', 'date' => 'Nov 15, 2026 · 1:40 PM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 16, 2026 · 10:10 AM', 'state' => 'complete'],
            ['title' => 'Payout processing', 'date' => 'In progress', 'state' => 'current'],
            ['title' => 'Transfer completed', 'date' => 'Not started', 'state' => 'upcoming'],
        ],
    ],
    'WDR-2026-0015' => [
        'id' => 'WDR-2026-0015',
        'currency' => 'GBP',
        'amount' => 250.00,
        'fee' => 1.50,
        'destination' => 'Sample International Bank · •••• 2280',
        'requested' => 'Nov 11, 2026 · 8:50 AM',
        'status' => 'Rejected',
        'status_class' => 'bg-red-50 text-red-700 ring-red-200',
        'note' => 'This sample request was rejected during review. No payout was made.',
        'timeline' => [
            ['title' => 'Withdrawal request received', 'date' => 'Nov 11, 2026 · 8:50 AM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 11, 2026 · 10:30 AM', 'state' => 'complete'],
            ['title' => 'Request decision', 'date' => 'Nov 11, 2026 · 11:05 AM', 'state' => 'current'],
            ['title' => 'Transfer completed', 'date' => 'Not applicable', 'state' => 'upcoming'],
        ],
    ],
    'WDR-2026-0014' => [
        'id' => 'WDR-2026-0014',
        'currency' => 'EUR',
        'amount' => 175.00,
        'fee' => 2.50,
        'destination' => 'Example Bank · •••• 9134',
        'requested' => 'Nov 06, 2026 · 2:05 PM',
        'status' => 'Completed',
        'status_class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
        'note' => 'This illustrative transfer is marked completed. All displayed details are sample data.',
        'timeline' => [
            ['title' => 'Withdrawal request received', 'date' => 'Nov 06, 2026 · 2:05 PM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 07, 2026 · 9:30 AM', 'state' => 'complete'],
            ['title' => 'Payout processing', 'date' => 'Nov 08, 2026 · 12:15 PM', 'state' => 'complete'],
            ['title' => 'Transfer completed', 'date' => 'Nov 09, 2026 · 10:00 AM', 'state' => 'complete'],
        ],
    ],
];

$requestedId = $_GET['id'] ?? 'WDR-2026-0018';
$withdrawal = $withdrawals[$requestedId] ?? null;

function withdrawalDetailMoney($amount, $currency) {
    $symbols = ['USD' => '$', 'EUR' => '€', 'GBP' => '£'];
    return ($symbols[$currency] ?? $currency . ' ') . number_format((float) $amount, 2);
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
include ROOT_PATH . '/components/investor/topbar.php';
?>

<main class="min-h-screen lg:pl-64">
    <div class="mx-auto max-w-7xl px-4 pb-24 pt-6 sm:px-6 lg:px-8 lg:pb-10">
        <div class="mb-6">
            <a href="<?= BASE_URL ?>/investor/withdrawals.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 transition hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to withdrawals
            </a>
        </div>

        <?php if (!$withdrawal): ?>
            <section class="rounded-2xl border border-gray-200 bg-white px-6 py-14 text-center shadow-sm">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-gray-100 text-gray-500">
                    <i class="fa-solid fa-file-circle-question text-xl"></i>
                </div>
                <h1 class="mt-4 text-xl font-semibold text-gray-900">Withdrawal record not found</h1>
                <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                    This sample reference does not match a record in the prototype.
                </p>
                <a href="<?= BASE_URL ?>/investor/withdrawals.php"
                   class="mt-6 inline-flex items-center justify-center rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#163A59]">
                    View withdrawals
                </a>
            </section>
        <?php else: ?>
            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Withdrawal reference</p>
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        <?= htmlspecialchars($withdrawal['id']) ?>
                    </h1>
                    <p class="mt-2 text-sm text-gray-500">
                        Requested <?= htmlspecialchars($withdrawal['requested']) ?>
                    </p>
                </div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full px-3 py-1.5 text-sm font-semibold ring-1 ring-inset <?= $withdrawal['status_class'] ?>">
                    <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                    <?= htmlspecialchars($withdrawal['status']) ?>
                </span>
            </div>

            <div class="grid gap-6 lg:grid-cols-3">
                <div class="space-y-6 lg:col-span-2">
                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
                        <p class="text-sm text-gray-500">Requested withdrawal amount</p>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900">
                            <?= withdrawalDetailMoney($withdrawal['amount'], $withdrawal['currency']) ?>
                        </p>

                        <div class="mt-6 grid gap-4 border-t border-gray-100 pt-5 sm:grid-cols-2">
                            <div>
                                <p class="text-xs text-gray-500">Currency</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($withdrawal['currency']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Illustrative fee</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900">
                                    <?= withdrawalDetailMoney($withdrawal['fee'], $withdrawal['currency']) ?>
                                </p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Estimated total debit</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900">
                                    <?= withdrawalDetailMoney($withdrawal['amount'] + $withdrawal['fee'], $withdrawal['currency']) ?>
                                </p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Destination</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($withdrawal['destination']) ?></p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
                        <h2 class="text-base font-semibold text-gray-900">Transfer timeline</h2>
                        <p class="mt-1 text-sm text-gray-500">Progress shown for this sample withdrawal.</p>

                        <ol class="mt-6 space-y-0">
                            <?php foreach ($withdrawal['timeline'] as $index => $step): ?>
                                <li class="relative flex gap-4 pb-6 last:pb-0">
                                    <?php if ($index < count($withdrawal['timeline']) - 1): ?>
                                        <span class="absolute left-[11px] top-6 h-full w-px bg-gray-200" aria-hidden="true"></span>
                                    <?php endif; ?>

                                    <span class="relative z-10 flex h-6 w-6 shrink-0 items-center justify-center rounded-full
                                        <?= $step['state'] === 'complete' ? 'bg-emerald-100 text-emerald-700' : ($step['state'] === 'current' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-400') ?>">
                                        <?php if ($step['state'] === 'complete'): ?>
                                            <i class="fa-solid fa-check text-xs"></i>
                                        <?php elseif ($step['state'] === 'current'): ?>
                                            <i class="fa-solid fa-circle-dot text-xs"></i>
                                        <?php else: ?>
                                            <i class="fa-solid fa-minus text-xs"></i>
                                        <?php endif; ?>
                                    </span>

                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($step['title']) ?></p>
                                        <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($step['date']) ?></p>
                                    </div>
                                    <?php if ($step['state'] === 'current'): ?>
                                        <span class="hidden rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700 sm:inline-flex">Current</span>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </section>
                </div>

                <aside class="space-y-6">
                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <h2 class="text-base font-semibold text-gray-900">Request status</h2>
                        <p class="mt-3 text-sm leading-6 text-gray-600">
                            <?= htmlspecialchars($withdrawal['note']) ?>
                        </p>
                    </section>

                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <h2 class="text-base font-semibold text-gray-900">Related pages</h2>
                        <div class="mt-4 space-y-3">
                            <a href="<?= BASE_URL ?>/investor/withdrawals.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                All withdrawals
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="<?= BASE_URL ?>/investor/cash.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                Cash account
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="<?= BASE_URL ?>/investor/transactions.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                Transactions
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </section>
                </aside>
            </div>

           <!-- <p class="mt-6 text-xs leading-5 text-gray-400">
                Prototype only. Amounts, dates, statuses, fees, and destination details are illustrative. This page does not initiate or track a real bank transfer.
            </p> -->
        <?php endif; ?>
    </div>
</main>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
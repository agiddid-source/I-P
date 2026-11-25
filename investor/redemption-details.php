<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Redemption Details';
$bodyClass = 'bg-gray-50 text-gray-900';

$redemptions = [
    'RDM-2026-0012' => [
        'id' => 'RDM-2026-0012',
        'product' => 'Global Fixed Income Fund',
        'holding_id' => 'HLD-001',
        'currency' => 'USD',
        'amount' => 1250.00,
        'units' => 12.5000,
        'type' => 'Partial redemption',
        'requested' => 'Nov 18, 2026',
        'expected' => 'Nov 27, 2026',
        'status' => 'Under Review',
        'status_class' => 'bg-amber-50 text-amber-700 ring-amber-200',
        'settlement_account' => 'USD Cash Account',
        'note' => 'This sample request is awaiting an operations review. No investment units have been redeemed.',
        'timeline' => [
            ['title' => 'Request received', 'date' => 'Nov 18, 2026 · 10:42 AM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'In progress', 'state' => 'current'],
            ['title' => 'Redemption processing', 'date' => 'Not started', 'state' => 'upcoming'],
            ['title' => 'Settlement to cash account', 'date' => 'Not started', 'state' => 'upcoming'],
        ],
    ],
    'RDM-2026-0011' => [
        'id' => 'RDM-2026-0011',
        'product' => 'Global Equity Index Fund',
        'holding_id' => 'HLD-002',
        'currency' => 'USD',
        'amount' => 800.00,
        'units' => 8.0000,
        'type' => 'Partial redemption',
        'requested' => 'Nov 12, 2026',
        'expected' => 'Nov 20, 2026',
        'status' => 'Settled',
        'status_class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
        'settlement_account' => 'USD Cash Account',
        'note' => 'This illustrative redemption has settled to the cash account. A separate withdrawal would be required to move cash to a bank account.',
        'timeline' => [
            ['title' => 'Request received', 'date' => 'Nov 12, 2026 · 9:15 AM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 13, 2026 · 2:10 PM', 'state' => 'complete'],
            ['title' => 'Redemption processing', 'date' => 'Nov 17, 2026 · 11:30 AM', 'state' => 'complete'],
            ['title' => 'Settlement to cash account', 'date' => 'Nov 20, 2026 · 9:00 AM', 'state' => 'complete'],
        ],
    ],
    'RDM-2026-0010' => [
        'id' => 'RDM-2026-0010',
        'product' => 'Sustainable Infrastructure Notes',
        'holding_id' => 'HLD-003',
        'currency' => 'EUR',
        'amount' => 500.00,
        'units' => 5.0000,
        'type' => 'Partial redemption',
        'requested' => 'Nov 08, 2026',
        'expected' => 'Nov 25, 2026',
        'status' => 'Processing',
        'status_class' => 'bg-blue-50 text-blue-700 ring-blue-200',
        'settlement_account' => 'EUR Cash Account',
        'note' => 'This sample request is in processing. Settlement timing is illustrative and depends on the product terms.',
        'timeline' => [
            ['title' => 'Request received', 'date' => 'Nov 08, 2026 · 1:25 PM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 09, 2026 · 10:00 AM', 'state' => 'complete'],
            ['title' => 'Redemption processing', 'date' => 'In progress', 'state' => 'current'],
            ['title' => 'Settlement to cash account', 'date' => 'Not started', 'state' => 'upcoming'],
        ],
    ],
    'RDM-2026-0009' => [
        'id' => 'RDM-2026-0009',
        'product' => 'Global Fixed Income Fund',
        'holding_id' => 'HLD-001',
        'currency' => 'USD',
        'amount' => 250.00,
        'units' => 2.5000,
        'type' => 'Partial redemption',
        'requested' => 'Nov 02, 2026',
        'expected' => 'Nov 12, 2026',
        'status' => 'Rejected',
        'status_class' => 'bg-red-50 text-red-700 ring-red-200',
        'settlement_account' => 'USD Cash Account',
        'note' => 'This sample request was rejected during review. No units were redeemed and no cash was settled.',
        'timeline' => [
            ['title' => 'Request received', 'date' => 'Nov 02, 2026 · 3:40 PM', 'state' => 'complete'],
            ['title' => 'Operations review', 'date' => 'Nov 03, 2026 · 11:20 AM', 'state' => 'complete'],
            ['title' => 'Request decision', 'date' => 'Nov 03, 2026 · 11:45 AM', 'state' => 'current'],
            ['title' => 'Settlement to cash account', 'date' => 'Not applicable', 'state' => 'upcoming'],
        ],
    ],
];

$requestedId = $_GET['id'] ?? 'RDM-2026-0012';
$redemption = $redemptions[$requestedId] ?? null;

function redemptionDetailMoney($amount, $currency) {
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
            <a href="<?= BASE_URL ?>/investor/redemptions.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 transition hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to redemptions
            </a>
        </div>

        <?php if (!$redemption): ?>
            <section class="rounded-2xl border border-gray-200 bg-white px-6 py-14 text-center shadow-sm">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-gray-100 text-gray-500">
                    <i class="fa-solid fa-file-circle-question text-xl"></i>
                </div>
                <h1 class="mt-4 text-xl font-semibold text-gray-900">Redemption record not found</h1>
                <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                    This sample redemption reference does not match a record in this prototype.
                </p>
                <a href="<?= BASE_URL ?>/investor/redemptions.php"
                   class="mt-6 inline-flex items-center justify-center rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#163A59]">
                    View redemptions
                </a>
            </section>
        <?php else: ?>
            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Redemption reference</p>
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                        <?= htmlspecialchars($redemption['id']) ?>
                    </h1>
                    <p class="mt-2 text-sm text-gray-500">
                        <?= htmlspecialchars($redemption['product']) ?>
                        <span class="mx-1">·</span>
                        <?= htmlspecialchars($redemption['holding_id']) ?>
                    </p>
                </div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full px-3 py-1.5 text-sm font-semibold ring-1 ring-inset <?= $redemption['status_class'] ?>">
                    <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                    <?= htmlspecialchars($redemption['status']) ?>
                </span>
            </div>

            <div class="grid gap-6 lg:grid-cols-3">
                <div class="space-y-6 lg:col-span-2">
                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Requested redemption amount</p>
                                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900">
                                    <?= redemptionDetailMoney($redemption['amount'], $redemption['currency']) ?>
                                </p>
                                <p class="mt-2 text-sm text-gray-500">
                                    <?= number_format($redemption['units'], 4) ?> units requested
                                </p>
                            </div>
                            <div class="rounded-xl bg-gray-50 p-4 sm:min-w-48">
                                <p class="text-xs font-medium uppercase tracking-wide text-gray-500">Request type</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900">
                                    <?= htmlspecialchars($redemption['type']) ?>
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 grid gap-4 border-t border-gray-100 pt-5 sm:grid-cols-2">
                            <div>
                                <p class="text-xs text-gray-500">Request date</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($redemption['requested']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Illustrative expected settlement</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($redemption['expected']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Settlement currency</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($redemption['currency']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Settlement destination</p>
                                <p class="mt-1 text-sm font-semibold text-gray-900"><?= htmlspecialchars($redemption['settlement_account']) ?></p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
                        <div class="mb-5">
                            <h2 class="text-base font-semibold text-gray-900">Request timeline</h2>
                            <p class="mt-1 text-sm text-gray-500">Illustrative progress for this sample record.</p>
                        </div>

                        <ol class="space-y-0">
                            <?php foreach ($redemption['timeline'] as $index => $step): ?>
                                <li class="relative flex gap-4 pb-6 last:pb-0">
                                    <?php if ($index < count($redemption['timeline']) - 1): ?>
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
                        <h2 class="text-base font-semibold text-gray-900">What happens next?</h2>
                        <p class="mt-3 text-sm leading-6 text-gray-600">
                            <?= htmlspecialchars($redemption['note']) ?>
                        </p>
                        <div class="mt-4 rounded-xl bg-emerald-50 p-4">
                            <p class="text-sm font-semibold text-emerald-900">Redemption is not a withdrawal</p>
                            <p class="mt-1 text-sm leading-5 text-emerald-800">
                                Once settled, proceeds are credited to your cash account. A separate withdrawal request is needed to transfer cash to a bank account.
                            </p>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <h2 class="text-base font-semibold text-gray-900">Related actions</h2>
                        <div class="mt-4 space-y-3">
                            <a href="<?= BASE_URL ?>/investor/redemptions.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                All redemptions
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="<?= BASE_URL ?>/investor/cash.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                Cash account
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="<?= BASE_URL ?>/investor/withdrawals.php"
                               class="flex items-center justify-between rounded-lg border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                                Withdrawals
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </section>
                </aside>
            </div>

            <p class="mt-6 text-xs leading-5 text-gray-400">
                Prototype only. All amounts, dates, statuses, and records are illustrative. This page does not submit, process, or settle a redemption.
            </p>
        <?php endif; ?>
    </div>
</main>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
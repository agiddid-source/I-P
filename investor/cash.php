
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Cash Account';
$bodyClass = 'bg-gray-50 text-gray-900';

$balances = [
    ['currency' => 'USD', 'name' => 'US Dollar', 'symbol' => '$', 'available' => 2850.00, 'pending' => 0.00],
    ['currency' => 'EUR', 'name' => 'Euro', 'symbol' => '€', 'available' => 1200.00, 'pending' => 150.00],
    ['currency' => 'GBP', 'name' => 'British Pound', 'symbol' => '£', 'available' => 1800.00, 'pending' => 0.00],
];

$activity = [
    [
        'title' => 'Sample account funding',
        'date' => 'May 28, 2026',
        'reference' => 'FND-DEMO-0021',
        'currency' => 'USD',
        'amount' => 1000.00,
        'type' => 'credit',
        'status' => 'Completed',
    ],
    [
        'title' => 'Sample investment commitment',
        'date' => 'May 24, 2026',
        'reference' => 'INV-DEMO-0014',
        'currency' => 'USD',
        'amount' => 500.00,
        'type' => 'debit',
        'status' => 'Completed',
    ],
    [
        'title' => 'Sample withdrawal request',
        'date' => 'May 21, 2026',
        'reference' => 'WDR-DEMO-0008',
        'currency' => 'EUR',
        'amount' => 150.00,
        'type' => 'debit',
        'status' => 'Pending',
    ],
];

function cashMoney($amount, $currency) {
    $symbols = ['USD' => '$', 'EUR' => '€', 'GBP' => '£'];
    return ($symbols[$currency] ?? $currency . ' ') . number_format($amount, 2);
}

include __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64">
        <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="mx-auto max-w-7xl px-4 py-6 pb-24 sm:px-6 lg:px-8 lg:pb-8">
            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Investor account</p>
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Cash account</h1>
                    <p class="mt-2 max-w-2xl text-sm text-gray-500">
                        Review available cash, pending activity, and sample account movements.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="<?= BASE_URL ?>/investor/fund-account.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0F9D78] px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#087A5D]">
                        <i class="fa-solid fa-plus"></i>
                        Fund account
                    </a>
                    <a href="<?= BASE_URL ?>/investor/withdrawal-request.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        Withdraw
                    </a>
                </div>
            </div>

            <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4">
                <div class="flex gap-3">
                    <i class="fa-solid fa-circle-info mt-0.5 text-amber-700"></i>
                    <div>
                        <p class="text-sm font-semibold text-amber-900">Illustrative account balances</p>
                        <p class="mt-1 text-sm leading-6 text-amber-800">
                            These balances and transactions are mock data for the prototype. They are not connected to a bank,
                            payment provider, or real investor account.
                        </p>
                    </div>
                </div>
            </div>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Total available cash</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                            <i class="fa-solid fa-wallet"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900">$2,850.00</p>
                    <p class="mt-2 text-xs text-gray-500">USD sample balance</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Pending cash activity</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-50 text-amber-700">
                            <i class="fa-solid fa-hourglass-half"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900">€150.00</p>
                    <p class="mt-2 text-xs text-gray-500">Shown separately from available cash</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm sm:col-span-2 xl:col-span-1">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Cash currencies</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                            <i class="fa-solid fa-coins"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900"><?= count($balances) ?></p>
                    <p class="mt-2 text-xs text-gray-500">USD, EUR, and GBP sample balances</p>
                </div>
            </section>

            <section class="mt-6 grid gap-6 xl:grid-cols-3">
                <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm xl:col-span-2">
                    <div class="border-b border-gray-200 p-5">
                        <h2 class="text-base font-semibold text-gray-900">Cash balances</h2>
                        <p class="mt-1 text-sm text-gray-500">Balances are listed by currency; no exchange conversion is applied.</p>
                    </div>

                    <div class="divide-y divide-gray-100">
                        <?php foreach ($balances as $balance): ?>
                            <div class="flex flex-col gap-3 p-5 sm:flex-row sm:items-center sm:justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-sm font-bold text-gray-700">
                                        <?= htmlspecialchars($balance['currency']) ?>
                                    </span>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($balance['name']) ?></p>
                                        <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($balance['currency']) ?> cash account</p>
                                    </div>
                                </div>

                                <div class="sm:text-right">
                                    <p class="text-lg font-bold text-gray-900">
                                        <?= cashMoney($balance['available'], $balance['currency']) ?>
                                    </p>
                                    <p class="mt-1 text-xs text-gray-500">
                                        <?= cashMoney($balance['pending'], $balance['currency']) ?> pending
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="border-t border-gray-200 bg-gray-50 px-5 py-3">
                        <p class="text-xs leading-5 text-gray-500">
                            Currency balances are not added together because no exchange rate or conversion date is specified.
                        </p>
                    </div>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <h2 class="text-base font-semibold text-gray-900">How cash moves</h2>
                    <p class="mt-1 text-sm text-gray-500">A simple guide to the sample account flow</p>

                    <div class="mt-6 space-y-5">
                        <div class="flex gap-3">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">
                                <i class="fa-solid fa-arrow-down"></i>
                            </span>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Funding</p>
                                <p class="mt-1 text-sm leading-5 text-gray-500">Money enters your cash account.</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Investment</p>
                                <p class="mt-1 text-sm leading-5 text-gray-500">Cash is committed to an investment product.</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-amber-50 text-amber-700">
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            </span>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Redemption</p>
                                <p class="mt-1 text-sm leading-5 text-gray-500">An eligible investment is redeemed and settled back to cash.</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-700">
                                <i class="fa-solid fa-building-columns"></i>
                            </span>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Withdrawal</p>
                                <p class="mt-1 text-sm leading-5 text-gray-500">Available cash is requested for transfer to a bank account.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-6 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                <div class="flex flex-col gap-4 border-b border-gray-200 p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-base font-semibold text-gray-900">Recent cash activity</h2>
                        <p class="mt-1 text-sm text-gray-500">Illustrative account entries</p>
                    </div>
                    <a href="<?= BASE_URL ?>/investor/transactions.php"
                       class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                        View all transactions <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Activity</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Reference</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Amount</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Status</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php foreach ($activity as $item): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="whitespace-nowrap px-5 py-4">
                                        <p class="text-sm font-medium text-gray-900"><?= htmlspecialchars($item['title']) ?></p>
                                        <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($item['currency']) ?></p>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4 text-sm text-gray-500"><?= htmlspecialchars($item['reference']) ?></td>
                                    <td class="whitespace-nowrap px-5 py-4 text-sm font-semibold <?= $item['type'] === 'credit' ? 'text-emerald-700' : 'text-gray-900' ?>">
                                        <?= $item['type'] === 'credit' ? '+' : '−' ?><?= cashMoney($item['amount'], $item['currency']) ?>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4">
                                        <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-medium <?= $item['status'] === 'Completed' ? 'bg-emerald-50 text-emerald-700' : 'bg-amber-50 text-amber-700' ?>">
                                            <?= htmlspecialchars($item['status']) ?>
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4 text-sm text-gray-500"><?= htmlspecialchars($item['date']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
</div>

<?php include __DIR__ . '/../components/shared/footer.php'; ?>

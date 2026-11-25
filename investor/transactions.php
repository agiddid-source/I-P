
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Transactions';
$bodyClass = 'bg-gray-50';

$transactions = [
    [
        'reference' => 'TRX-2026-0081',
        'type' => 'Funding',
        'description' => 'Cash account funding',
        'date' => '21 Nov 2026',
        'time' => '09:15 AM',
        'currency' => 'GBP',
        'symbol' => '£',
        'amount' => 750.00,
        'direction' => 'in',
        'status' => 'Pending',
        'method' => 'Card Payment'
    ],
    [
        'reference' => 'TRX-2026-0080',
        'type' => 'Investment',
        'description' => 'Global Fixed Income Fund',
        'date' => '20 Nov 2026',
        'time' => '11:30 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 1000.00,
        'direction' => 'out',
        'status' => 'Processing',
        'method' => 'Cash Account'
    ],
    [
        'reference' => 'TRX-2026-0079',
        'type' => 'Funding',
        'description' => 'Cash account funding',
        'date' => '18 Nov 2026',
        'time' => '10:42 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 2500.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Bank Transfer'
    ],
    [
        'reference' => 'TRX-2026-0078',
        'type' => 'Withdrawal',
        'description' => 'Bank withdrawal request',
        'date' => '16 Nov 2026',
        'time' => '02:10 PM',
        'currency' => 'EUR',
        'symbol' => '€',
        'amount' => 300.00,
        'direction' => 'out',
        'status' => 'Under Review',
        'method' => 'Bank Transfer'
    ],
    [
        'reference' => 'TRX-2026-0077',
        'type' => 'Return',
        'description' => 'Fixed income distribution',
        'date' => '14 Nov 2026',
        'time' => '08:00 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 125.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Investment Distribution'
    ],
    [
        'reference' => 'TRX-2026-0076',
        'type' => 'Redemption',
        'description' => 'Balanced Growth Fund',
        'date' => '12 Nov 2026',
        'time' => '01:25 PM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 500.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Investment Redemption'
    ],
    [
        'reference' => 'TRX-2026-0075',
        'type' => 'Investment',
        'description' => 'Balanced Growth Fund',
        'date' => '10 Nov 2026',
        'time' => '10:05 AM',
        'currency' => 'EUR',
        'symbol' => '€',
        'amount' => 800.00,
        'direction' => 'out',
        'status' => 'Completed',
        'method' => 'Cash Account'
    ],
    [
        'reference' => 'TRX-2026-0074',
        'type' => 'Withdrawal',
        'description' => 'Bank withdrawal',
        'date' => '08 Nov 2026',
        'time' => '03:40 PM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 400.00,
        'direction' => 'out',
        'status' => 'Completed',
        'method' => 'Bank Transfer'
    ]
];

function transactionMoney($amount, $symbol) {
    return $symbol . number_format($amount, 2);
}

$typeStyles = [
    'Funding' => ['bg-blue-50 text-blue-700', 'fa-arrow-down-to-line'],
    'Investment' => ['bg-purple-50 text-purple-700', 'fa-chart-line'],
    'Withdrawal' => ['bg-orange-50 text-orange-700', 'fa-arrow-up-from-line'],
    'Return' => ['bg-green-50 text-green-700', 'fa-coins'],
    'Redemption' => ['bg-teal-50 text-teal-700', 'fa-rotate-left']
];

$statusStyles = [
    'Completed' => 'bg-green-50 text-green-700',
    'Processing' => 'bg-blue-50 text-blue-700',
    'Pending' => 'bg-amber-50 text-amber-700',
    'Under Review' => 'bg-purple-50 text-purple-700',
    'Failed' => 'bg-red-50 text-red-700'
];

include __DIR__ . '/../components/shared/head.php';
?>

<?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

<div class="lg:pl-64 min-h-screen">
    <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

    <main class="p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto">

        <!-- Page heading -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Transactions</h1>
                <p class="text-sm text-gray-500 mt-1">Track and review all your investment and cash account activities.</p>
            </div>

            <a href="cash.php" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50">
                <i class="fa-solid fa-wallet"></i>
                Cash Account
            </a>
        </div>

        <!-- Summary cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-7">

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Total Transactions</p>
                    <div class="w-9 h-9 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                        <i class="fa-solid fa-list"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mt-3"><?= count($transactions) ?></h2>
                <p class="text-xs text-gray-400 mt-1">Sample transaction records</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Completed</p>
                    <div class="w-9 h-9 rounded-lg bg-green-50 text-green-600 flex items-center justify-center">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mt-3">5</h2>
                <p class="text-xs text-gray-400 mt-1">Illustrative records</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Pending / Processing</p>
                    <div class="w-9 h-9 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mt-3">3</h2>
                <p class="text-xs text-gray-400 mt-1">Awaiting further action</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">Transaction Types</p>
                    <div class="w-9 h-9 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center">
                        <i class="fa-solid fa-shapes"></i>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mt-3">5</h2>
                <p class="text-xs text-gray-400 mt-1">Funding, investment and more</p>
            </div>

        </div>

        <!-- Transaction table -->
        <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">

            <div class="p-5 border-b border-gray-100">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                    <div>
                        <h2 class="font-bold text-gray-900">Transaction History</h2>
                        <p class="text-xs text-gray-500 mt-1">A complete overview of your recent activity.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="relative">
                            <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input
                                type="text"
                                id="transactionSearch"
                                placeholder="Search transactions..."
                                class="w-full sm:w-64 pl-9 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            >
                        </div>

                        <select id="typeFilter" class="px-3 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="all">All Types</option>
                            <option value="funding">Funding</option>
                            <option value="investment">Investment</option>
                            <option value="withdrawal">Withdrawal</option>
                            <option value="redemption">Redemption</option>
                            <option value="return">Return</option>
                        </select>

                        <select id="statusFilter" class="px-3 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="all">All Statuses</option>
                            <option value="completed">Completed</option>
                            <option value="processing">Processing</option>
                            <option value="pending">Pending</option>
                            <option value="under review">Under Review</option>
                            <option value="failed">Failed</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                        <tr>
                            <th class="px-5 py-4 font-semibold">Transaction</th>
                            <th class="px-5 py-4 font-semibold">Date</th>
                            <th class="px-5 py-4 font-semibold">Type</th>
                            <th class="px-5 py-4 font-semibold">Amount</th>
                            <th class="px-5 py-4 font-semibold">Status</th>
                            <th class="px-5 py-4 font-semibold text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody id="transactionTableBody" class="divide-y divide-gray-100">

                        <?php foreach ($transactions as $transaction): ?>
                            <?php
                                $type = $transaction['type'];
                                $typeStyle = $typeStyles[$type];
                                $statusStyle = $statusStyles[$transaction['status']];
                                $amountColor = $transaction['direction'] === 'in' ? 'text-green-700' : 'text-gray-900';
                                $amountPrefix = $transaction['direction'] === 'in' ? '+' : '−';
                            ?>

                            <tr
                                class="transaction-row hover:bg-gray-50/70"
                                data-search="<?= htmlspecialchars(strtolower($transaction['reference'] . ' ' . $transaction['description'] . ' ' . $transaction['method'])) ?>"
                                data-type="<?= strtolower($type) ?>"
                                data-status="<?= strtolower($transaction['status']) ?>"
                            >
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3 min-w-52">
                                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0 <?= $typeStyle[0] ?>">
                                            <i class="fa-solid <?= $typeStyle[1] ?>"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900"><?= htmlspecialchars($transaction['description']) ?></p>
                                            <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($transaction['reference']) ?></p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap">
                                    <p class="text-gray-800"><?= htmlspecialchars($transaction['date']) ?></p>
                                    <p class="text-xs text-gray-400 mt-1"><?= htmlspecialchars($transaction['time']) ?></p>
                                </td>

                                <td class="px-5 py-4">
                                    <span class="text-gray-700"><?= htmlspecialchars($type) ?></span>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap">
                                    <span class="font-semibold <?= $amountColor ?>">
                                        <?= $amountPrefix . transactionMoney($transaction['amount'], $transaction['symbol']) ?>
                                    </span>
                                    <p class="text-xs text-gray-400 mt-1"><?= htmlspecialchars($transaction['currency']) ?></p>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold <?= $statusStyle ?>">
                                        <?= htmlspecialchars($transaction['status']) ?>
                                    </span>
                                </td>

                                <td class="px-5 py-4 text-right">
                                    <a
                                        href="transaction-details.php?id=<?= urlencode($transaction['reference']) ?>"
                                        class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-900"
                                    >
                                        View <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

            <div id="emptyTransactions" class="hidden py-12 text-center">
                <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>
                <p class="font-semibold text-gray-800">No transactions found</p>
                <p class="text-sm text-gray-500 mt-1">Try changing your search or filters.</p>
            </div>

            <div class="px-5 py-4 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <p class="text-xs text-gray-500" id="transactionCount">
                    Showing <?= count($transactions) ?> sample transactions
                </p>
                <button
                    type="button"
                    id="clearFilters"
                    class="text-sm font-semibold text-emerald-700 hover:text-emerald-900"
                >
                    Clear filters
                </button>
            </div>

        </section>

        <!-- Important distinction -->
        <div class="mt-6 bg-blue-50 border border-blue-100 rounded-xl p-4 flex gap-3">
            <i class="fa-solid fa-circle-info text-blue-600 mt-0.5"></i>
            <div>
                <p class="text-sm font-semibold text-blue-900">Understanding your transactions</p>
                <p class="text-sm text-blue-800 mt-1 leading-relaxed">
                    Funding adds money to your cash account. Investments commit cash to an asset.
                    Redemptions return settled investment proceeds to cash, while withdrawals move
                    available cash out to a linked bank account.
                </p>
            </div>
        </div>

        <p class="text-xs text-gray-400 mt-5">
            All transaction records and amounts shown are illustrative prototype data. No real financial transactions have taken place.
        </p>

    </main>
</div>

<?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
<?php include __DIR__ . '/../components/shared/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('transactionSearch');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const rows = Array.from(document.querySelectorAll('.transaction-row'));
    const emptyState = document.getElementById('emptyTransactions');
    const countLabel = document.getElementById('transactionCount');
    const clearButton = document.getElementById('clearFilters');

    function filterTransactions() {
        const search = searchInput.value.trim().toLowerCase();
        const type = typeFilter.value;
        const status = statusFilter.value;

        let visibleCount = 0;

        rows.forEach(row => {
            const matchesSearch = row.dataset.search.includes(search);
            const matchesType = type === 'all' || row.dataset.type === type;
            const matchesStatus = status === 'all' || row.dataset.status === status;

            const visible = matchesSearch && matchesType && matchesStatus;

            row.classList.toggle('hidden', !visible);

            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
        countLabel.textContent = `Showing ${visibleCount} of ${rows.length} sample transactions`;
    }

    searchInput.addEventListener('input', filterTransactions);
    typeFilter.addEventListener('change', filterTransactions);
    statusFilter.addEventListener('change', filterTransactions);

    clearButton.addEventListener('click', function () {
        searchInput.value = '';
        typeFilter.value = 'all';
        statusFilter.value = 'all';
        filterTransactions();
    });
});
</script>

<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Withdrawals';
$bodyClass = 'bg-gray-50 text-gray-900';

$withdrawals = [
    [
        'id' => 'WDR-2026-0018',
        'date' => 'Nov 21, 2026',
        'destination' => '•••• 4821',
        'currency' => 'USD',
        'amount' => 650.00,
        'fee' => 0.00,
        'status' => 'Under Review',
        'status_class' => 'bg-amber-50 text-amber-700 ring-amber-200',
    ],
    [
        'id' => 'WDR-2026-0017',
        'date' => 'Nov 18, 2026',
        'destination' => '•••• 9134',
        'currency' => 'EUR',
        'amount' => 300.00,
        'fee' => 2.50,
        'status' => 'Completed',
        'status_class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
    ],
    [
        'id' => 'WDR-2026-0016',
        'date' => 'Nov 15, 2026',
        'destination' => '•••• 4821',
        'currency' => 'USD',
        'amount' => 500.00,
        'fee' => 0.00,
        'status' => 'Processing',
        'status_class' => 'bg-blue-50 text-blue-700 ring-blue-200',
    ],
    [
        'id' => 'WDR-2026-0015',
        'date' => 'Nov 11, 2026',
        'destination' => '•••• 2280',
        'currency' => 'GBP',
        'amount' => 250.00,
        'fee' => 1.50,
        'status' => 'Rejected',
        'status_class' => 'bg-red-50 text-red-700 ring-red-200',
    ],
    [
        'id' => 'WDR-2026-0014',
        'date' => 'Nov 06, 2026',
        'destination' => '•••• 9134',
        'currency' => 'EUR',
        'amount' => 175.00,
        'fee' => 2.50,
        'status' => 'Completed',
        'status_class' => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
    ],
];

function withdrawalListMoney($amount, $currency) {
    $symbols = ['USD' => '$', 'EUR' => '€', 'GBP' => '£'];
    return ($symbols[$currency] ?? $currency . ' ') . number_format((float) $amount, 2);
}

$completedCount = count(array_filter($withdrawals, fn($item) => $item['status'] === 'Completed'));
$pendingCount = count(array_filter($withdrawals, fn($item) => in_array($item['status'], ['Under Review', 'Processing'], true)));
$rejectedCount = count(array_filter($withdrawals, fn($item) => $item['status'] === 'Rejected'));

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
include ROOT_PATH . '/components/investor/topbar.php';
?>

<main class="min-h-screen lg:pl-64">
    <div class="mx-auto max-w-7xl px-4 pb-24 pt-6 sm:px-6 lg:px-8 lg:pb-10">
        <div class="mb-7 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500">Cash account</p>
                <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Withdrawals</h1>
                <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">
                    Review sample withdrawal requests and their transfer status. Withdrawals move settled cash from your cash account to a bank account.
                </p>
            </div>
            <a href="<?= BASE_URL ?>/investor/withdrawal-request.php"
               class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#163A59]">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Request withdrawal
            </a>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                <p class="text-sm text-gray-500">Sample requests</p>
                <p class="mt-2 text-2xl font-bold text-gray-900"><?= count($withdrawals) ?></p>
                <p class="mt-1 text-xs text-gray-400">Across all statuses</p>
            </div>
            <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                <p class="text-sm text-gray-500">Under review / processing</p>
                <p class="mt-2 text-2xl font-bold text-gray-900"><?= $pendingCount ?></p>
                <p class="mt-1 text-xs text-gray-400">Awaiting completion</p>
            </div>
            <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                <p class="text-sm text-gray-500">Completed</p>
                <p class="mt-2 text-2xl font-bold text-gray-900"><?= $completedCount ?></p>
                <p class="mt-1 text-xs text-gray-400">Illustrative completed records</p>
            </div>
            <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                <p class="text-sm text-gray-500">Rejected</p>
                <p class="mt-2 text-2xl font-bold text-gray-900"><?= $rejectedCount ?></p>
                <p class="mt-1 text-xs text-gray-400">No transfer completed</p>
            </div>
        </div>

        <section class="mt-6 overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">
            <div class="flex flex-col gap-4 border-b border-gray-100 p-5 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-base font-semibold text-gray-900">Withdrawal history</h2>
                    <p class="mt-1 text-sm text-gray-500">Search and filter the sample records below.</p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400"></i>
                        <input id="withdrawalSearch" type="search" placeholder="Search reference or bank..."
                               class="w-full rounded-lg border border-gray-200 py-2.5 pl-9 pr-3 text-sm outline-none transition focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10 sm:w-56">
                    </div>
                    <select id="withdrawalStatus"
                            class="rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10">
                        <option value="">All statuses</option>
                        <option value="Under Review">Under Review</option>
                        <option value="Processing">Processing</option>
                        <option value="Completed">Completed</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-100">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Reference / Date</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Destination</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Amount</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fee</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Status</th>
                            <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500"> </th>
                        </tr>
                    </thead>
                    <tbody id="withdrawalRows" class="divide-y divide-gray-100">
                        <?php foreach ($withdrawals as $withdrawal): ?>
                            <tr class="withdrawal-row transition hover:bg-gray-50"
                                data-search="<?= htmlspecialchars(strtolower($withdrawal['id'] . ' ' . $withdrawal['destination'])) ?>"
                                data-status="<?= htmlspecialchars($withdrawal['status']) ?>">
                                <td class="whitespace-nowrap px-5 py-4">
                                    <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($withdrawal['id']) ?></p>
                                    <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($withdrawal['date']) ?></p>
                                </td>
                                <td class="whitespace-nowrap px-5 py-4">
                                    <p class="text-sm font-medium text-gray-700"><?= htmlspecialchars($withdrawal['destination']) ?></p>
                                    <p class="mt-1 text-xs text-gray-500">Bank account</p>
                                </td>
                                <td class="whitespace-nowrap px-5 py-4 text-sm font-semibold text-gray-900">
                                    <?= withdrawalListMoney($withdrawal['amount'], $withdrawal['currency']) ?>
                                </td>
                                <td class="whitespace-nowrap px-5 py-4 text-sm text-gray-600">
                                    <?= withdrawalListMoney($withdrawal['fee'], $withdrawal['currency']) ?>
                                </td>
                                <td class="whitespace-nowrap px-5 py-4">
                                    <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold ring-1 ring-inset <?= $withdrawal['status_class'] ?>">
                                        <?= htmlspecialchars($withdrawal['status']) ?>
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-5 py-4 text-right">
                                    <a href="<?= BASE_URL ?>/investor/withdrawal-details.php?id=<?= urlencode($withdrawal['id']) ?>"
                                       class="inline-flex items-center gap-2 text-sm font-semibold text-[#0B1F33] hover:text-[#0F9D78]">
                                        Details <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div id="withdrawalEmpty" class="hidden px-5 py-12 text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </div>
                <p class="mt-3 text-sm font-semibold text-gray-900">No matching withdrawals</p>
                <p class="mt-1 text-sm text-gray-500">Try another reference or status filter.</p>
            </div>
        </section>

        <div class="mt-6 rounded-xl border border-blue-100 bg-blue-50 p-4">
            <div class="flex gap-3">
                <i class="fa-solid fa-circle-info mt-0.5 text-blue-600"></i>
                <div>
                    <p class="text-sm font-semibold text-blue-900">Prototype notice</p>
                    <p class="mt-1 text-sm leading-5 text-blue-800">
                        All withdrawal records and figures are illustrative. This page does not send money, reserve funds, or update an account balance. A redemption must settle to your cash account before it can be withdrawn.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('withdrawalSearch');
    const statusSelect = document.getElementById('withdrawalStatus');
    const rows = Array.from(document.querySelectorAll('.withdrawal-row'));
    const emptyState = document.getElementById('withdrawalEmpty');

    function filterWithdrawals() {
        const query = searchInput.value.trim().toLowerCase();
        const status = statusSelect.value;
        let visibleCount = 0;

        rows.forEach(function (row) {
            const matchesSearch = row.dataset.search.includes(query);
            const matchesStatus = !status || row.dataset.status === status;
            const visible = matchesSearch && matchesStatus;

            row.classList.toggle('hidden', !visible);
            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
    }

    searchInput.addEventListener('input', filterWithdrawals);
    statusSelect.addEventListener('change', filterWithdrawals);
});
</script>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
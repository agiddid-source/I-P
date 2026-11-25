
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Redemptions';
$bodyClass = 'bg-gray-50';

$redemptions = [
    [
        'reference' => 'RDM-2026-0012',
        'product' => 'Global Fixed Income Fund',
        'holding' => 'HLD-001',
        'date' => '21 Nov 2026',
        'amount' => 1200.00,
        'currency' => 'USD',
        'symbol' => '$',
        'status' => 'Under Review',
        'type' => 'Partial Redemption',
        'settlement' => 'Not yet settled'
    ],
    [
        'reference' => 'RDM-2026-0011',
        'product' => 'Balanced Growth Fund',
        'holding' => 'HLD-002',
        'date' => '18 Nov 2026',
        'amount' => 500.00,
        'currency' => 'USD',
        'symbol' => '$',
        'status' => 'Settled',
        'type' => 'Partial Redemption',
        'settlement' => '18 Nov 2026'
    ],
    [
        'reference' => 'RDM-2026-0010',
        'product' => 'Global Fixed Income Fund',
        'holding' => 'HLD-001',
        'date' => '14 Nov 2026',
        'amount' => 800.00,
        'currency' => 'USD',
        'symbol' => '$',
        'status' => 'Processing',
        'type' => 'Partial Redemption',
        'settlement' => 'Awaiting settlement'
    ],
    [
        'reference' => 'RDM-2026-0009',
        'product' => 'Balanced Growth Fund',
        'holding' => 'HLD-002',
        'date' => '09 Nov 2026',
        'amount' => 250.00,
        'currency' => 'USD',
        'symbol' => '$',
        'status' => 'Rejected',
        'type' => 'Partial Redemption',
        'settlement' => 'Not settled'
    ],
    [
        'reference' => 'RDM-2026-0008',
        'product' => 'Balanced Growth Fund',
        'holding' => 'HLD-002',
        'date' => '12 Nov 2026',
        'amount' => 500.00,
        'currency' => 'USD',
        'symbol' => '$',
        'status' => 'Settled',
        'type' => 'Partial Redemption',
        'settlement' => '12 Nov 2026'
    ]
];

function redemptionMoney($amount, $symbol) {
    return $symbol . number_format($amount, 2);
}

$statusStyles = [
    'Draft' => 'bg-gray-100 text-gray-700',
    'Submitted' => 'bg-blue-50 text-blue-700',
    'Under Review' => 'bg-purple-50 text-purple-700',
    'Processing' => 'bg-amber-50 text-amber-700',
    'Settled' => 'bg-green-50 text-green-700',
    'Rejected' => 'bg-red-50 text-red-700',
    'Cancelled' => 'bg-gray-100 text-gray-600'
];

include __DIR__ . '/../components/shared/head.php';
?>

<?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

<div class="lg:pl-64 min-h-screen">
    <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

    <main class="p-4 sm:p-6 lg:p-8 max-w-7xl mx-auto">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Redemptions</h1>
                <p class="text-sm text-gray-500 mt-1">Track requests to redeem eligible investments and their settlement progress.</p>
            </div>

            <a href="redemption-request.php" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#0F9D78] text-white rounded-lg text-sm font-semibold hover:bg-[#087A5D]">
                <i class="fa-solid fa-plus"></i>
                Request Redemption
            </a>
        </div>

        <!-- Summary -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-7">
            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <p class="text-sm text-gray-500">Total Requests</p>
                <p class="text-2xl font-bold text-gray-900 mt-3"><?= count($redemptions) ?></p>
                <p class="text-xs text-gray-400 mt-1">Illustrative records</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <p class="text-sm text-gray-500">Under Review</p>
                <p class="text-2xl font-bold text-gray-900 mt-3">1</p>
                <p class="text-xs text-gray-400 mt-1">Awaiting review</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <p class="text-sm text-gray-500">Processing</p>
                <p class="text-2xl font-bold text-gray-900 mt-3">1</p>
                <p class="text-xs text-gray-400 mt-1">Awaiting settlement</p>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-5">
                <p class="text-sm text-gray-500">Settled Requests</p>
                <p class="text-2xl font-bold text-gray-900 mt-3">2</p>
                <p class="text-xs text-gray-400 mt-1">Sample settled records</p>
            </div>
        </div>

        <!-- Important flow -->
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6 flex gap-3">
            <i class="fa-solid fa-circle-info text-blue-600 mt-0.5"></i>
            <div>
                <p class="text-sm font-semibold text-blue-900">How redemptions work</p>
                <p class="text-sm text-blue-800 mt-1 leading-relaxed">
                    A redemption request is reviewed and, when approved, processed according to the investment's terms.
                    Settled proceeds are credited to your cash account. A separate withdrawal is needed to transfer cash to a bank account.
                </p>
            </div>
        </div>

        <!-- List -->
        <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
            <div class="p-5 border-b border-gray-100">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                    <div>
                        <h2 class="font-bold text-gray-900">Redemption History</h2>
                        <p class="text-xs text-gray-500 mt-1">Your recent redemption requests and their current statuses.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <div class="relative">
                            <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input
                                id="redemptionSearch"
                                type="text"
                                placeholder="Search redemptions..."
                                class="w-full sm:w-64 pl-9 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            >
                        </div>

                        <select id="redemptionStatusFilter" class="px-3 py-2.5 border border-gray-200 rounded-lg text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="all">All Statuses</option>
                            <option value="under review">Under Review</option>
                            <option value="processing">Processing</option>
                            <option value="settled">Settled</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                        <tr>
                            <th class="px-5 py-4 font-semibold">Investment</th>
                            <th class="px-5 py-4 font-semibold">Request Date</th>
                            <th class="px-5 py-4 font-semibold">Requested Amount</th>
                            <th class="px-5 py-4 font-semibold">Status</th>
                            <th class="px-5 py-4 font-semibold">Settlement</th>
                            <th class="px-5 py-4 font-semibold text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody id="redemptionTableBody" class="divide-y divide-gray-100">
                        <?php foreach ($redemptions as $redemption): ?>
                            <?php $statusStyle = $statusStyles[$redemption['status']] ?? 'bg-gray-100 text-gray-700'; ?>

                            <tr
                                class="redemption-row hover:bg-gray-50/70"
                                data-search="<?= htmlspecialchars(strtolower($redemption['reference'] . ' ' . $redemption['product'] . ' ' . $redemption['holding'])) ?>"
                                data-status="<?= htmlspecialchars(strtolower($redemption['status'])) ?>"
                            >
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3 min-w-56">
                                        <div class="w-10 h-10 rounded-lg bg-teal-50 text-teal-700 flex items-center justify-center flex-shrink-0">
                                            <i class="fa-solid fa-rotate-left"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900"><?= htmlspecialchars($redemption['product']) ?></p>
                                            <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($redemption['reference']) ?></p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap text-gray-700">
                                    <?= htmlspecialchars($redemption['date']) ?>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap">
                                    <p class="font-semibold text-gray-900"><?= redemptionMoney($redemption['amount'], $redemption['symbol']) ?></p>
                                    <p class="text-xs text-gray-400 mt-1"><?= htmlspecialchars($redemption['currency']) ?></p>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold <?= $statusStyle ?>">
                                        <?= htmlspecialchars($redemption['status']) ?>
                                    </span>
                                </td>

                                <td class="px-5 py-4 whitespace-nowrap text-gray-600">
                                    <?= htmlspecialchars($redemption['settlement']) ?>
                                </td>

                                <td class="px-5 py-4 text-right">
                                    <a href="redemption-details.php?id=<?= urlencode($redemption['reference']) ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-900">
                                        View <i class="fa-solid fa-arrow-right text-xs"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div id="emptyRedemptions" class="hidden py-12 text-center">
                <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>
                <p class="font-semibold text-gray-800">No redemption requests found</p>
                <p class="text-sm text-gray-500 mt-1">Try a different search or status filter.</p>
            </div>

            <div class="px-5 py-4 border-t border-gray-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <p id="redemptionCount" class="text-xs text-gray-500">Showing <?= count($redemptions) ?> sample requests</p>
                <button type="button" id="clearRedemptionFilters" class="text-sm font-semibold text-emerald-700 hover:text-emerald-900">
                    Clear filters
                </button>
            </div>
        </section>

        <p class="text-xs text-gray-400 mt-5">
            Prototype demonstration only. Redemption requests, amounts, statuses, and settlement dates are sample data. No real investment has been redeemed.
        </p>

    </main>
</div>

<?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
<?php include __DIR__ . '/../components/shared/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('redemptionSearch');
    const statusFilter = document.getElementById('redemptionStatusFilter');
    const rows = Array.from(document.querySelectorAll('.redemption-row'));
    const emptyState = document.getElementById('emptyRedemptions');
    const countLabel = document.getElementById('redemptionCount');
    const clearButton = document.getElementById('clearRedemptionFilters');

    function filterRedemptions() {
        const search = searchInput.value.trim().toLowerCase();
        const status = statusFilter.value;
        let visibleCount = 0;

        rows.forEach(row => {
            const matchesSearch = row.dataset.search.includes(search);
            const matchesStatus = status === 'all' || row.dataset.status === status;
            const visible = matchesSearch && matchesStatus;

            row.classList.toggle('hidden', !visible);
            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
        countLabel.textContent = `Showing ${visibleCount} of ${rows.length} sample requests`;
    }

    searchInput.addEventListener('input', filterRedemptions);
    statusFilter.addEventListener('change', filterRedemptions);

    clearButton.addEventListener('click', function () {
        searchInput.value = '';
        statusFilter.value = 'all';
        filterRedemptions();
    });
});
</script>

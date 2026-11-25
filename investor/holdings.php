
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'My Holdings';
$bodyClass = 'bg-gray-50 text-gray-900';

$holdings = [
    [
        'id' => 'HLD-001',
        'name' => 'Global Fixed Income Fund',
        'type' => 'Fixed Income',
        'risk' => 'Low',
        'invested' => 10000,
        'value' => 10850,
        'date' => 'May 12, 2026',
        'status' => 'Active',
    ],
    [
        'id' => 'HLD-002',
        'name' => 'Global Equity Growth Fund',
        'type' => 'Equities',
        'risk' => 'High',
        'invested' => 7000,
        'value' => 8120,
        'date' => 'May 18, 2026',
        'status' => 'Active',
    ],
    [
        'id' => 'HLD-003',
        'name' => 'Sustainable Infrastructure',
        'type' => 'Real Assets',
        'risk' => 'Medium',
        'invested' => 5000,
        'value' => 5880,
        'date' => 'May 22, 2026',
        'status' => 'Active',
    ],
];

$totalInvested = array_sum(array_column($holdings, 'invested'));
$totalValue = array_sum(array_column($holdings, 'value'));
$totalGain = $totalValue - $totalInvested;

function holdingsMoney($amount) {
    return '$' . number_format($amount, 2);
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
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">My Holdings</h1>
                    <p class="mt-2 text-sm text-gray-500">View and manage your investment positions.</p>
                </div>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0F9D78] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#087A5D]">
                    <i class="fa-solid fa-plus"></i>
                    Explore investments
                </a>
            </div>

            <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4">
                <div class="flex gap-3">
                    <i class="fa-solid fa-circle-info mt-0.5 text-amber-700"></i>
                    <div>
                        <p class="text-sm font-semibold text-amber-900">Sample holdings</p>
                        <p class="mt-1 text-sm leading-6 text-amber-800">
                            All positions and valuations shown here are illustrative prototype data, not actual investment records or market prices.
                        </p>
                    </div>
                </div>
            </div>

            <section class="grid gap-4 sm:grid-cols-3">
                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <p class="text-sm font-medium text-gray-500">Total holdings value</p>
                    <p class="mt-3 text-2xl font-bold text-gray-900"><?= holdingsMoney($totalValue) ?></p>
                    <p class="mt-2 text-xs text-gray-500">Illustrative current value</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <p class="text-sm font-medium text-gray-500">Total invested</p>
                    <p class="mt-3 text-2xl font-bold text-gray-900"><?= holdingsMoney($totalInvested) ?></p>
                    <p class="mt-2 text-xs text-gray-500">Sample invested capital</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <p class="text-sm font-medium text-gray-500">Illustrative gain / loss</p>
                    <p class="mt-3 text-2xl font-bold <?= $totalGain >= 0 ? 'text-emerald-700' : 'text-red-700' ?>">
                        <?= $totalGain >= 0 ? '+' : '-' ?><?= holdingsMoney(abs($totalGain)) ?>
                    </p>
                    <p class="mt-2 text-xs text-gray-500">Not a forecast or guaranteed return</p>
                </div>
            </section>

            <section class="mt-6 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                <div class="flex flex-col gap-4 border-b border-gray-200 p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-base font-semibold text-gray-900">All holdings</h2>
                        <p class="mt-1 text-sm text-gray-500"><?= count($holdings) ?> sample investment positions</p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row">
                        <div class="relative">
                            <i class="fa-solid fa-search pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400"></i>
                            <input id="holdingsSearch" type="search" placeholder="Search holdings..."
                                   class="w-full rounded-lg border border-gray-300 py-2 pl-9 pr-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100 sm:w-56">
                        </div>

                        <select id="holdingsFilter"
                                class="rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-700 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                            <option value="all">All asset types</option>
                            <option value="Fixed Income">Fixed Income</option>
                            <option value="Equities">Equities</option>
                            <option value="Real Assets">Real Assets</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Investment</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Invested capital</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Current value</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Gain / loss</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Risk</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Status</th>
                                <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500">Action</th>
                            </tr>
                        </thead>

                        <tbody id="holdingsTable" class="divide-y divide-gray-100">
                            <?php foreach ($holdings as $holding):
                                $gain = $holding['value'] - $holding['invested'];
                                $percentage = $holding['invested'] > 0 ? ($gain / $holding['invested']) * 100 : 0;
                            ?>
                                <tr class="holding-row hover:bg-gray-50"
                                    data-name="<?= htmlspecialchars(strtolower($holding['name'])) ?>"
                                    data-type="<?= htmlspecialchars($holding['type']) ?>">

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <div class="flex items-center gap-3">
                                            <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                                                <i class="fa-solid fa-chart-line"></i>
                                            </span>
                                            <div>
                                                <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($holding['name']) ?></p>
                                                <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($holding['id']) ?> · <?= htmlspecialchars($holding['type']) ?></p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4 text-sm text-gray-700">
                                        <?= holdingsMoney($holding['invested']) ?>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4 text-sm font-semibold text-gray-900">
                                        <?= holdingsMoney($holding['value']) ?>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <p class="text-sm font-semibold <?= $gain >= 0 ? 'text-emerald-700' : 'text-red-700' ?>">
                                            <?= $gain >= 0 ? '+' : '-' ?><?= holdingsMoney(abs($gain)) ?>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            <?= $percentage >= 0 ? '+' : '' ?><?= number_format($percentage, 2) ?>%
                                        </p>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <span class="rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                            <?= htmlspecialchars($holding['risk']) ?>
                                        </span>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4">
                                        <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700">
                                            <?= htmlspecialchars($holding['status']) ?>
                                        </span>
                                    </td>

                                    <td class="whitespace-nowrap px-5 py-4 text-right">
                                        <a href="<?= BASE_URL ?>/investor/holding-details.php?id=<?= urlencode($holding['id']) ?>"
                                           class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                                            View <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div id="holdingsEmpty" class="hidden px-5 py-12 text-center">
                    <i class="fa-solid fa-folder-open mb-3 text-2xl text-gray-300"></i>
                    <p class="text-sm font-semibold text-gray-900">No holdings found</p>
                    <p class="mt-1 text-sm text-gray-500">Try changing your search or filter.</p>
                </div>
            </section>

            <div class="mt-6 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-900">Portfolio overview</h2>
                        <p class="mt-1 text-sm text-gray-500">View allocation and overall portfolio performance.</p>
                    </div>
                    <a href="<?= BASE_URL ?>/investor/portfolio.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        Open portfolio
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </main>
    </div>

    <?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const search = document.getElementById('holdingsSearch');
    const filter = document.getElementById('holdingsFilter');
    const rows = Array.from(document.querySelectorAll('.holding-row'));
    const empty = document.getElementById('holdingsEmpty');

    function applyFilters() {
        const query = search.value.trim().toLowerCase();
        const selectedType = filter.value;
        let visible = 0;

        rows.forEach(row => {
            const matchesName = row.dataset.name.includes(query);
            const matchesType = selectedType === 'all' || row.dataset.type === selectedType;
            const show = matchesName && matchesType;

            row.classList.toggle('hidden', !show);
            if (show) visible++;
        });

        empty.classList.toggle('hidden', visible > 0);
    }

    search.addEventListener('input', applyFilters);
    filter.addEventListener('change', applyFilters);
});
</script>

<?php include __DIR__ . '/../components/shared/footer.php'; ?>

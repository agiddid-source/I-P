
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Portfolio';
$bodyClass = 'bg-gray-50 text-gray-900';

$holdings = [
    [
        'id' => 'HLD-001',
        'product_id' => 'INV-001',
        'name' => 'Global Fixed Income Fund',
        'type' => 'Fixed Income',
        'risk' => 'Low',
        'currency' => 'USD',
        'invested' => 10000,
        'value' => 10850,
        'units' => '10,000.00 units',
        'status' => 'Active',
        'color' => '#0F9D78',
    ],
    [
        'id' => 'HLD-002',
        'product_id' => 'INV-002',
        'name' => 'Global Equity Growth Fund',
        'type' => 'Equities',
        'risk' => 'High',
        'currency' => 'USD',
        'invested' => 7000,
        'value' => 8120,
        'units' => '70.00 units',
        'status' => 'Active',
        'color' => '#2E90FA',
    ],
    [
        'id' => 'HLD-003',
        'product_id' => 'INV-003',
        'name' => 'Sustainable Infrastructure',
        'type' => 'Real Assets',
        'risk' => 'Medium',
        'currency' => 'USD',
        'invested' => 5000,
        'value' => 5880,
        'units' => '50.00 units',
        'status' => 'Active',
        'color' => '#F79009',
    ],
];

$totalInvested = array_sum(array_column($holdings, 'invested'));
$totalValue = array_sum(array_column($holdings, 'value'));
$totalReturn = $totalValue - $totalInvested;
$returnPercent = $totalInvested > 0 ? ($totalReturn / $totalInvested) * 100 : 0;

function portfolioMoney($amount) {
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
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Portfolio</h1>
                    <p class="mt-2 max-w-2xl text-sm text-gray-500">
                        Review your illustrative holdings, allocation, and performance summary.
                    </p>
                </div>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0F9D78] px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#087A5D]">
                    <i class="fa-solid fa-plus"></i>
                    Explore investments
                </a>
            </div>

            <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-4">
                <div class="flex gap-3">
                    <i class="fa-solid fa-circle-info mt-0.5 text-amber-700"></i>
                    <div>
                        <p class="text-sm font-semibold text-amber-900">Illustrative portfolio data</p>
                        <p class="mt-1 text-sm leading-6 text-amber-800">
                            These sample holdings and values are for interface demonstration only. They are not linked to a real account,
                            do not represent actual investment performance, and cannot be traded or redeemed.
                        </p>
                    </div>
                </div>
            </div>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Portfolio value</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                            <i class="fa-solid fa-chart-pie"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900"><?= portfolioMoney($totalValue) ?></p>
                    <p class="mt-2 text-xs text-gray-500">Current sample value of holdings</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Invested capital</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-700">
                            <i class="fa-solid fa-wallet"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900"><?= portfolioMoney($totalInvested) ?></p>
                    <p class="mt-2 text-xs text-gray-500">Sample amount committed to holdings</p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Illustrative return</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-emerald-700">
                        +<?= portfolioMoney($totalReturn) ?>
                    </p>
                    <p class="mt-2 text-xs text-gray-500">
                        +<?= number_format($returnPercent, 2) ?>% sample change; not a forecast
                    </p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-500">Number of holdings</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-violet-50 text-violet-700">
                            <i class="fa-solid fa-layer-group"></i>
                        </span>
                    </div>
                    <p class="mt-4 text-2xl font-bold tracking-tight text-gray-900"><?= count($holdings) ?></p>
                    <p class="mt-2 text-xs text-gray-500">Sample active positions</p>
                </div>
            </section>

            <section class="mt-6 grid gap-6 xl:grid-cols-3">
                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm xl:col-span-2">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <h2 class="text-base font-semibold text-gray-900">Portfolio performance</h2>
                            <p class="mt-1 text-sm text-gray-500">Illustrative portfolio value over time</p>
                        </div>
                        <select id="performanceRange" class="rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-700 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                            <option value="1M">1 month</option>
                            <option value="3M" selected>3 months</option>
                            <option value="6M">6 months</option>
                            <option value="1Y">1 year</option>
                        </select>
                    </div>

                    <div class="mt-6 rounded-lg bg-gray-50 p-3 sm:p-5">
                        <div class="mb-3 flex items-center justify-between text-xs text-gray-400">
                            <span>$20,000</span>
                            <span>$25,000</span>
                        </div>
                        <div class="relative h-48 overflow-hidden">
                            <div class="absolute inset-0 flex flex-col justify-between">
                                <div class="border-t border-dashed border-gray-200"></div>
                                <div class="border-t border-dashed border-gray-200"></div>
                                <div class="border-t border-dashed border-gray-200"></div>
                                <div class="border-t border-dashed border-gray-200"></div>
                            </div>
                            <svg viewBox="0 0 700 190" preserveAspectRatio="none" class="relative h-full w-full" role="img" aria-label="Illustrative upward portfolio value line chart">
                                <defs>
                                    <linearGradient id="portfolioFill" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#0F9D78" stop-opacity=".18"></stop>
                                        <stop offset="100%" stop-color="#0F9D78" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M0 165 C45 158 60 135 100 143 S160 125 200 132 S260 92 300 105 S360 86 400 92 S460 65 500 73 S560 48 600 55 S660 28 700 20 L700 190 L0 190 Z" fill="url(#portfolioFill)"></path>
                                <path d="M0 165 C45 158 60 135 100 143 S160 125 200 132 S260 92 300 105 S360 86 400 92 S460 65 500 73 S560 48 600 55 S660 28 700 20" fill="none" stroke="#0F9D78" stroke-width="3" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="mt-3 flex justify-between text-xs text-gray-400">
                            <span>Start</span>
                            <span>Month 1</span>
                            <span>Month 2</span>
                            <span>Today</span>
                        </div>
                    </div>
                    <p class="mt-3 text-xs leading-5 text-gray-400">
                        Chart is a visual placeholder and does not use historical market data.
                    </p>
                </div>

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <h2 class="text-base font-semibold text-gray-900">Asset allocation</h2>
                    <p class="mt-1 text-sm text-gray-500">Share of sample portfolio value</p>

                    <div class="mx-auto mt-6 flex h-44 w-44 items-center justify-center rounded-full"
                         style="background: conic-gradient(#0F9D78 0% 43.6%, #2E90FA 43.6% 76.2%, #F79009 76.2% 100%);">
                        <div class="flex h-28 w-28 flex-col items-center justify-center rounded-full bg-white">
                            <span class="text-xs text-gray-500">Total value</span>
                            <span class="mt-1 text-lg font-bold text-gray-900">$24.85k</span>
                        </div>
                    </div>

                    <div class="mt-6 space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center gap-2 text-gray-600">
                                <span class="h-2.5 w-2.5 rounded-sm bg-emerald-600"></span> Fixed Income
                            </span>
                            <span class="font-medium text-gray-900">43.6%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center gap-2 text-gray-600">
                                <span class="h-2.5 w-2.5 rounded-sm bg-blue-500"></span> Equities
                            </span>
                            <span class="font-medium text-gray-900">32.7%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center gap-2 text-gray-600">
                                <span class="h-2.5 w-2.5 rounded-sm bg-amber-500"></span> Real Assets
                            </span>
                            <span class="font-medium text-gray-900">23.7%</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-6 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                <div class="flex flex-col gap-4 border-b border-gray-200 p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-base font-semibold text-gray-900">Your holdings</h2>
                        <p class="mt-1 text-sm text-gray-500">Sample positions currently shown in your portfolio</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <div class="relative">
                            <i class="fa-solid fa-search pointer-events-none absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400"></i>
                            <input id="holdingSearch" type="search" placeholder="Search holdings"
                                   class="w-full rounded-lg border border-gray-300 py-2 pl-9 pr-3 text-sm focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100 sm:w-56">
                        </div>
                        <select id="holdingType" class="rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-700 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
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
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Invested</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Current value</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Gain / loss</th>
                                <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Risk</th>
                                <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500"> </th>
                            </tr>
                        </thead>
                        <tbody id="holdingsTable" class="divide-y divide-gray-100">
                            <?php foreach ($holdings as $holding):
                                $gain = $holding['value'] - $holding['invested'];
                                $gainPercent = $holding['invested'] > 0 ? ($gain / $holding['invested']) * 100 : 0;
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
                                                <a href="<?= BASE_URL ?>/investor/holding-details.php?id=<?= urlencode($holding['id']) ?>"
                                                   class="text-sm font-semibold text-gray-900 hover:text-emerald-700">
                                                    <?= htmlspecialchars($holding['name']) ?>
                                                </a>
                                                <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($holding['type']) ?> · <?= htmlspecialchars($holding['id']) ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4 text-sm text-gray-700"><?= portfolioMoney($holding['invested']) ?></td>
                                    <td class="whitespace-nowrap px-5 py-4 text-sm font-semibold text-gray-900"><?= portfolioMoney($holding['value']) ?></td>
                                    <td class="whitespace-nowrap px-5 py-4">
                                        <p class="text-sm font-semibold <?= $gain >= 0 ? 'text-emerald-700' : 'text-red-700' ?>">
                                            <?= $gain >= 0 ? '+' : '-' ?><?= portfolioMoney(abs($gain)) ?>
                                        </p>
                                        <p class="mt-1 text-xs text-gray-500"><?= $gain >= 0 ? '+' : '' ?><?= number_format($gainPercent, 2) ?>%</p>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4">
                                        <span class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                            <?= htmlspecialchars($holding['risk']) ?>
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap px-5 py-4 text-right">
                                        <a href="<?= BASE_URL ?>/investor/holding-details.php?id=<?= urlencode($holding['id']) ?>"
                                           class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">Details <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div id="holdingsEmpty" class="hidden px-5 py-10 text-center">
                    <i class="fa-solid fa-magnifying-glass mb-3 text-2xl text-gray-300"></i>
                    <p class="text-sm font-semibold text-gray-900">No holdings found</p>
                    <p class="mt-1 text-sm text-gray-500">Try another search or asset type.</p>
                </div>
            </section>

            <div class="mt-6 flex flex-col gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-sm font-semibold text-gray-900">Need a closer look?</h2>
                    <p class="mt-1 text-sm text-gray-500">Open a holding to view its sample details and activity.</p>
                </div>
                <a href="<?= BASE_URL ?>/investor/transactions.php" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                    View transactions
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </main>
    </div>

    <?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('holdingSearch');
    const typeSelect = document.getElementById('holdingType');
    const rows = Array.from(document.querySelectorAll('.holding-row'));
    const emptyState = document.getElementById('holdingsEmpty');

    function filterHoldings() {
        const query = searchInput.value.trim().toLowerCase();
        const selectedType = typeSelect.value;
        let visibleCount = 0;

        rows.forEach((row) => {
            const matchesName = row.dataset.name.includes(query);
            const matchesType = selectedType === 'all' || row.dataset.type === selectedType;
            const visible = matchesName && matchesType;

            row.classList.toggle('hidden', !visible);
            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
    }

    searchInput.addEventListener('input', filterHoldings);
    typeSelect.addEventListener('change', filterHoldings);

    document.getElementById('performanceRange').addEventListener('change', () => {
        // The chart is a static visual placeholder in this frontend prototype.
    });
});
</script>

<?php include __DIR__ . '/../components/shared/footer.php'; ?>

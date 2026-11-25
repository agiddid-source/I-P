
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Holding Details';
$bodyClass = 'bg-gray-50 text-gray-900';

$holdings = [
    'HLD-001' => [
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
        'date' => 'May 12, 2026',
        'term' => 'Open-ended',
        'liquidity' => 'Subject to product terms',
        'description' => 'A sample fixed-income holding designed to demonstrate how an investor could review a position and its key terms.',
        'activity' => [
            ['date' => 'May 12, 2026', 'title' => 'Investment recorded', 'detail' => 'Sample position created for demonstration', 'amount' => '$10,000.00'],
            ['date' => 'May 31, 2026', 'title' => 'Illustrative value update', 'detail' => 'Sample value adjustment; not market data', 'amount' => '+$850.00'],
        ],
    ],
    'HLD-002' => [
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
        'date' => 'May 18, 2026',
        'term' => 'Open-ended',
        'liquidity' => 'Subject to product terms',
        'description' => 'A sample equity holding used to demonstrate a position with a higher illustrative risk classification.',
        'activity' => [
            ['date' => 'May 18, 2026', 'title' => 'Investment recorded', 'detail' => 'Sample position created for demonstration', 'amount' => '$7,000.00'],
            ['date' => 'May 31, 2026', 'title' => 'Illustrative value update', 'detail' => 'Sample value adjustment; not market data', 'amount' => '+$1,120.00'],
        ],
    ],
    'HLD-003' => [
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
        'date' => 'May 22, 2026',
        'term' => '5 years',
        'liquidity' => 'Limited; subject to product terms',
        'description' => 'A sample real-assets holding used to demonstrate investment details and liquidity information.',
        'activity' => [
            ['date' => 'May 22, 2026', 'title' => 'Investment recorded', 'detail' => 'Sample position created for demonstration', 'amount' => '$5,000.00'],
            ['date' => 'May 31, 2026', 'title' => 'Illustrative value update', 'detail' => 'Sample value adjustment; not market data', 'amount' => '+$880.00'],
        ],
    ],
];

$holdingId = $_GET['id'] ?? 'HLD-001';
$holding = $holdings[$holdingId] ?? null;

function holdingMoney($amount) {
    return '$' . number_format($amount, 2);
}

include __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64">
        <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="mx-auto max-w-7xl px-4 py-6 pb-24 sm:px-6 lg:px-8 lg:pb-8">
            <a href="<?= BASE_URL ?>/investor/portfolio.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to portfolio
            </a>

            <?php if (!$holding): ?>
                <section class="mt-6 rounded-xl border border-gray-200 bg-white px-6 py-14 text-center shadow-sm">
                    <span class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-gray-500">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <h1 class="mt-4 text-xl font-bold text-gray-900">Holding not found</h1>
                    <p class="mt-2 text-sm text-gray-500">This sample holding ID is not available.</p>
                    <a href="<?= BASE_URL ?>/investor/portfolio.php"
                       class="mt-5 inline-flex rounded-lg bg-[#0F9D78] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#087A5D]">
                        Return to portfolio
                    </a>
                </section>
            <?php else:
                $gain = $holding['value'] - $holding['invested'];
                $gainPercent = $holding['invested'] > 0 ? ($gain / $holding['invested']) * 100 : 0;
            ?>
                <div class="mt-5 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                                <?= htmlspecialchars($holding['status']) ?>
                            </span>
                            <span class="text-xs text-gray-400"><?= htmlspecialchars($holding['id']) ?></span>
                        </div>
                        <h1 class="mt-3 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">
                            <?= htmlspecialchars($holding['name']) ?>
                        </h1>
                        <p class="mt-2 text-sm text-gray-500">
                            <?= htmlspecialchars($holding['type']) ?> · Product <?= htmlspecialchars($holding['product_id']) ?>
                        </p>
                    </div>

                    <a href="<?= BASE_URL ?>/investor/investments.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        Explore investments
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>

                <div class="mt-6 rounded-xl border border-amber-200 bg-amber-50 p-4">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-circle-info mt-0.5 text-amber-700"></i>
                        <div>
                            <p class="text-sm font-semibold text-amber-900">Illustrative holding details</p>
                            <p class="mt-1 text-sm leading-6 text-amber-800">
                                This is mock data for the frontend prototype. Values and activity are not real account records or market data.
                                No investment, redemption, or payout action is available on this page.
                            </p>
                        </div>
                    </div>
                </div>

                <section class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-medium text-gray-500">Current value</p>
                        <p class="mt-3 text-2xl font-bold text-gray-900"><?= holdingMoney($holding['value']) ?></p>
                        <p class="mt-2 text-xs text-gray-500">Illustrative value</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-medium text-gray-500">Amount invested</p>
                        <p class="mt-3 text-2xl font-bold text-gray-900"><?= holdingMoney($holding['invested']) ?></p>
                        <p class="mt-2 text-xs text-gray-500">Sample invested capital</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-medium text-gray-500">Illustrative gain / loss</p>
                        <p class="mt-3 text-2xl font-bold <?= $gain >= 0 ? 'text-emerald-700' : 'text-red-700' ?>">
                            <?= $gain >= 0 ? '+' : '-' ?><?= holdingMoney(abs($gain)) ?>
                        </p>
                        <p class="mt-2 text-xs text-gray-500"><?= $gain >= 0 ? '+' : '' ?><?= number_format($gainPercent, 2) ?>% sample change</p>
                    </div>

                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-medium text-gray-500">Units held</p>
                        <p class="mt-3 text-2xl font-bold text-gray-900"><?= htmlspecialchars($holding['units']) ?></p>
                        <p class="mt-2 text-xs text-gray-500">Illustrative quantity</p>
                    </div>
                </section>

                <section class="mt-6 grid gap-6 xl:grid-cols-3">
                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm xl:col-span-2">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h2 class="text-base font-semibold text-gray-900">Holding overview</h2>
                                <p class="mt-1 text-sm text-gray-500">Key information about this sample position</p>
                            </div>
                            <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-700">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-gray-600">
                            <?= htmlspecialchars($holding['description']) ?>
                        </p>

                        <dl class="mt-6 grid gap-4 border-t border-gray-100 pt-5 sm:grid-cols-2">
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">Asset type</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900"><?= htmlspecialchars($holding['type']) ?></dd>
                            </div>
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">Risk classification</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900"><?= htmlspecialchars($holding['risk']) ?></dd>
                            </div>
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">Holding date</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900"><?= htmlspecialchars($holding['date']) ?></dd>
                            </div>
                            <div>
                                <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">Term</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900"><?= htmlspecialchars($holding['term']) ?></dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">Liquidity</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900"><?= htmlspecialchars($holding['liquidity']) ?></dd>
                            </div>
                        </dl>
                    </div>

                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <h2 class="text-base font-semibold text-gray-900">Sample value history</h2>
                        <p class="mt-1 text-sm text-gray-500">Illustrative values only</p>

                        <div class="mt-6 space-y-5">
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-100 text-gray-500">
                                    <i class="fa-solid fa-circle-dot text-xs"></i>
                                </span>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Sample invested amount</p>
                                    <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($holding['date']) ?></p>
                                </div>
                                <p class="text-sm font-semibold text-gray-900"><?= holdingMoney($holding['invested']) ?></p>
                            </div>

                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">
                                    <i class="fa-solid fa-arrow-trend-up text-xs"></i>
                                </span>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">Sample current value</p>
                                    <p class="mt-1 text-xs text-gray-500">Illustrative update</p>
                                </div>
                                <p class="text-sm font-semibold text-gray-900"><?= holdingMoney($holding['value']) ?></p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-lg bg-gray-50 p-3">
                            <p class="text-xs leading-5 text-gray-500">
                                Actual valuation frequency, fees, liquidity, and exit conditions depend on the product’s official documents and terms.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="mt-6 overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
                    <div class="border-b border-gray-200 p-5">
                        <h2 class="text-base font-semibold text-gray-900">Holding activity</h2>
                        <p class="mt-1 text-sm text-gray-500">Sample events associated with this position</p>
                    </div>

                    <div class="divide-y divide-gray-100">
                        <?php foreach ($holding['activity'] as $activity): ?>
                            <div class="flex flex-col gap-3 p-5 sm:flex-row sm:items-center sm:justify-between">
                                <div class="flex items-start gap-3">
                                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-gray-100 text-gray-500">
                                        <i class="fa-solid fa-clock-rotate-left text-sm"></i>
                                    </span>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($activity['title']) ?></p>
                                        <p class="mt-1 text-sm text-gray-500"><?= htmlspecialchars($activity['detail']) ?></p>
                                        <p class="mt-1 text-xs text-gray-400"><?= htmlspecialchars($activity['date']) ?></p>
                                    </div>
                                </div>
                                <p class="pl-12 text-sm font-semibold text-gray-900 sm:pl-0">
                                    <?= htmlspecialchars($activity['amount']) ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <div class="mt-6 flex flex-col gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-900">Review account activity</h2>
                        <p class="mt-1 text-sm text-gray-500">Open the sample transaction list for your account.</p>
                    </div>
                    <a href="<?= BASE_URL ?>/investor/transactions.php"
                       class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        View transactions
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            <?php endif; ?>
        </main>
    </div>

    <?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
</div>

<?php include __DIR__ . '/../components/shared/footer.php'; ?>

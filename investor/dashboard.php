<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Investor Dashboard | InvestGlobal';
$pageHeading = 'Dashboard';
$pageSubtitle = 'Monitor your investments and account activity.';

$currentPage = 'dashboard';

include ROOT_PATH . '/components/shared/head.php';
?>

<div class="min-h-screen bg-canvas">

    <!-- Sidebar -->
    <?php include ROOT_PATH . '/components/investor/sidebar.php'; ?>

    <!-- Main application -->
    <div class="lg:ml-64">

        <!-- Topbar -->
        <?php include ROOT_PATH . '/components/investor/topbar.php'; ?>

        <main class="px-4 py-6 pb-28 sm:px-6 lg:px-8 lg:pb-10">

            <!-- Welcome -->
            <section class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Good morning, John
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Here's what's happening with your investments today.
                    </p>
                </div>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="btn btn-accent inline-flex items-center justify-center gap-2">
                    <i class="fa-solid fa-plus"></i>
                    Explore Investments
                </a>
            </section>

            <!-- Demo notice -->
            <div class="mb-7 flex items-start gap-3 rounded-xl border border-gold/30 bg-gold-light px-4 py-3">
                <i class="fa-solid fa-circle-info mt-0.5 text-gold-dark"></i>
                <p class="text-xs leading-5 text-brand">
                    Demonstration dashboard. All balances, returns, transactions
                    and portfolio figures displayed here are illustrative and
                    do not represent actual investments or account balances.
                </p>
            </div>

            <!-- Portfolio overview -->
            <section class="mb-8">

                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-base font-bold text-gray-900">
                        Portfolio overview
                    </h3>

                    <span class="text-xs text-gray-400">
                        Illustrative figures
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

                    <!-- Total portfolio value -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Portfolio Value</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gold-light text-gold-dark">
                                <i class="fa-solid fa-chart-pie"></i>
                            </span>
                        </div>

                        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-900">
                            $24,850.00
                        </h3>

                        <p class="mt-2 text-xs text-gray-400">
                            Total illustrative asset value
                        </p>
                    </div>

                    <!-- Invested capital -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Invested Capital</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-50 text-purple-600">
                                <i class="fa-solid fa-briefcase"></i>
                            </span>
                        </div>

                        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-900">
                            $22,000.00
                        </h3>

                        <p class="mt-2 text-xs text-gray-400">
                            Original investment amount
                        </p>
                    </div>

                    <!-- Available cash -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Available Cash</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-accent-light text-accent-dark">
                                <i class="fa-solid fa-wallet"></i>
                            </span>
                        </div>

                        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-900">
                            $2,850.00
                        </h3>

                        <p class="mt-2 text-xs text-gray-400">
                            Illustrative settled cash balance
                        </p>
                    </div>

                    <!-- Total returns -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">Total Returns</span>
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-50 text-green-600">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </span>
                        </div>

                        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-900">
                            $2,850.00
                        </h3>

                        <p class="mt-2 text-xs text-accent-dark">
                            <i class="fa-solid fa-arrow-up mr-1"></i>
                            12.95% illustrative return
                        </p>
                    </div>

                </div>
            </section>

            <!-- Charts section -->
            <section class="mb-8 grid grid-cols-1 gap-6 xl:grid-cols-3">

                <!-- Performance chart -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm xl:col-span-2 sm:p-6">

                    <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-center">
                        <div>
                            <h3 class="font-bold text-gray-900">
                                Portfolio Performance
                            </h3>
                            <p class="mt-1 text-xs text-gray-500">
                                Illustrative portfolio value over time
                            </p>
                        </div>

                        <select class="rounded-lg border border-gray-200 bg-white px-3 py-2 text-xs text-gray-600 outline-none focus:border-accent">
                            <option>Last 6 months</option>
                            <option>Last 12 months</option>
                            <option>All time</option>
                        </select>
                    </div>

                    <div class="mt-8">

                        <div class="mb-4 flex items-end justify-between">
                            <div>
                                <p class="text-xs text-gray-400">Current illustrative value</p>
                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    $24,850.00
                                </p>
                            </div>

                            <span class="rounded-lg bg-accent-light px-2.5 py-1.5 text-xs font-semibold text-accent-dark">
                                +12.95%
                            </span>
                        </div>

                        <!-- CSS-based chart -->
                        <div class="relative flex h-52 items-end justify-between gap-2 border-b border-l border-gray-100 px-2 pb-0 pt-4 sm:gap-4">

                            <div class="absolute inset-0 flex flex-col justify-between pb-1">
                                <div class="border-t border-dashed border-gray-100"></div>
                                <div class="border-t border-dashed border-gray-100"></div>
                                <div class="border-t border-dashed border-gray-100"></div>
                                <div class="border-t border-dashed border-gray-100"></div>
                            </div>

                            <?php
                            $chartBars = [
                                ['height' => '35%', 'month' => 'Jun'],
                                ['height' => '43%', 'month' => 'Jul'],
                                ['height' => '40%', 'month' => 'Aug'],
                                ['height' => '56%', 'month' => 'Sep'],
                                ['height' => '64%', 'month' => 'Oct'],
                                ['height' => '76%', 'month' => 'Nov'],
                                ['height' => '88%', 'month' => 'Dec'],
                            ];
                            ?>

                            <?php foreach ($chartBars as $index => $bar): ?>
                                <div class="relative z-10 flex h-full min-w-0 flex-1 flex-col items-center justify-end">
                                    <div
                                        class="w-full max-w-10 rounded-t-lg <?= $index === 6 ? 'bg-accent' : 'bg-accent/25' ?>"
                                        style="height: <?= htmlspecialchars($bar['height']) ?>;">
                                    </div>

                                    <span class="absolute -bottom-6 text-xs text-gray-400">
                                        <?= htmlspecialchars($bar['month']) ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <p class="mt-10 text-center text-xs text-gray-400">
                            Illustrative values only. This chart is not based on
                            live market prices or actual investment performance.
                        </p>

                    </div>
                </div>

                <!-- Allocation -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">

                    <h3 class="font-bold text-gray-900">
                        Investment Allocation
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        Illustrative distribution by asset type
                    </p>

                    <div class="my-7 flex justify-center">
                        <div class="relative flex h-44 w-44 items-center justify-center rounded-full"
                             style="background: conic-gradient(#0F9D78 0% 45%, #064B3E 45% 75%, #DDA235 75% 90%, #8FD3BC 90% 100%);">

                            <div class="flex h-28 w-28 flex-col items-center justify-center rounded-full bg-white">
                                <span class="text-xs text-gray-400">Total invested</span>
                                <span class="mt-1 text-lg font-bold text-gray-900">$22K</span>
                            </div>

                        </div>
                    </div>

                    <div class="space-y-4">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="h-3 w-3 rounded-sm bg-accent"></span>
                                <span class="text-sm text-gray-600">Fixed Income</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-900">45%</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="h-3 w-3 rounded-sm bg-gold-light0"></span>
                                <span class="text-sm text-gray-600">Equities</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-900">30%</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="h-3 w-3 rounded-sm bg-gold"></span>
                                <span class="text-sm text-gray-600">Real Assets</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-900">15%</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="h-3 w-3 rounded-sm bg-[#8FD3BC]"></span>
                                <span class="text-sm text-gray-600">Other</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-900">10%</span>
                        </div>

                    </div>
                </div>

            </section>

            <!-- Quick actions -->
            <section class="mb-8">

                <h3 class="mb-4 font-bold text-gray-900">
                    Quick Actions
                </h3>

                <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">

                    <a href="<?= BASE_URL ?>/investor/fund-account.php"
                       class="flex items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition hover:border-accent hover:shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-accent-light text-accent-dark">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="text-sm font-semibold text-gray-700">Fund Account</span>
                    </a>

                    <a href="<?= BASE_URL ?>/investor/investments.php"
                       class="flex items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition hover:border-accent hover:shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold-light text-gold-dark">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span class="text-sm font-semibold text-gray-700">Invest</span>
                    </a>

                    <a href="<?= BASE_URL ?>/investor/redemption-request.php"
                       class="flex items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition hover:border-accent hover:shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                        </span>
                        <span class="text-sm font-semibold text-gray-700">Redeem</span>
                    </a>

                    <a href="<?= BASE_URL ?>/investor/withdrawal-request.php"
                       class="flex items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition hover:border-accent hover:shadow-sm">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </span>
                        <span class="text-sm font-semibold text-gray-700">Withdraw</span>
                    </a>

                </div>
            </section>

            <!-- Recent transactions -->
            <section class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

                <div class="flex flex-col justify-between gap-3 border-b border-gray-100 p-5 sm:flex-row sm:items-center sm:px-6">

                    <div>
                        <h3 class="font-bold text-gray-900">
                            Recent Transactions
                        </h3>
                        <p class="mt-1 text-xs text-gray-500">
                            A snapshot of your latest account activity
                        </p>
                    </div>

                    <a href="<?= BASE_URL ?>/investor/transactions.php"
                       class="text-sm font-semibold text-accent-dark hover:underline">
                        View all transactions
                        <i class="fa-solid fa-arrow-right ml-1 text-xs"></i>
                    </a>

                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[650px] text-left">

                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Transaction</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Date</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Reference</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Amount</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Status</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-light text-accent-dark">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </span>
                                        <span class="text-sm font-semibold text-gray-800">Account Funding</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 18, 2026</td>
                                <td class="px-6 py-4 text-xs text-gray-500">TRX-000821</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">+$2,000.00</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-green-50 px-3 py-1.5 text-xs font-semibold text-green-700">Completed</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gold-light text-gold-dark">
                                            <i class="fa-solid fa-chart-line"></i>
                                        </span>
                                        <span class="text-sm font-semibold text-gray-800">Investment Purchase</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 15, 2026</td>
                                <td class="px-6 py-4 text-xs text-gray-500">TRX-000820</td>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">-$5,000.00</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-green-50 px-3 py-1.5 text-xs font-semibold text-green-700">Completed</span>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
                                            <i class="fa-solid fa-coins"></i>
                                        </span>
                                        <span class="text-sm font-semibold text-gray-800">Investment Distribution</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Nov 12, 2026</td>
                                <td class="px-6 py-4 text-xs text-gray-500">TRX-000819</td>
                                <td class="px-6 py-4 text-sm font-semibold text-accent-dark">+$350.00</td>
                                <td class="px-6 py-4">
                                    <span class="rounded-full bg-green-50 px-3 py-1.5 text-xs font-semibold text-green-700">Completed</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </section>

            <!-- Footer note -->
            <p class="mt-6 text-center text-xs text-gray-400">
                InvestGlobal Dashboard · Demonstration environment · All figures are illustrative
            </p>

        </main>

    </div>

    <!-- Mobile bottom navigation -->
    <?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>

</div>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
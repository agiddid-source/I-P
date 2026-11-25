
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Transaction Details';
$bodyClass = 'bg-gray-50';

$transactions = [
    'TRX-2026-0081' => [
        'reference' => 'TRX-2026-0081',
        'type' => 'Funding',
        'description' => 'Cash account funding',
        'date' => '21 November 2026',
        'time' => '09:15 AM',
        'currency' => 'GBP',
        'symbol' => '£',
        'amount' => 750.00,
        'direction' => 'in',
        'status' => 'Pending',
        'method' => 'Card Payment',
        'account' => 'GBP Cash Account',
        'providerReference' => 'CARD-TRX-284019',
        'fee' => 0.00,
        'created' => '21 Nov 2026, 9:15 AM',
        'reviewed' => 'Awaiting confirmation',
        'completed' => 'Pending',
        'note' => 'This funding request is awaiting payment confirmation.'
    ],
    'TRX-2026-0080' => [
        'reference' => 'TRX-2026-0080',
        'type' => 'Investment',
        'description' => 'Global Fixed Income Fund',
        'date' => '20 November 2026',
        'time' => '11:30 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 1000.00,
        'direction' => 'out',
        'status' => 'Processing',
        'method' => 'Cash Account',
        'account' => 'USD Cash Account',
        'providerReference' => 'ORD-2026-0042',
        'fee' => 0.00,
        'created' => '20 Nov 2026, 11:30 AM',
        'reviewed' => '20 Nov 2026, 12:10 PM',
        'completed' => 'Awaiting execution',
        'note' => 'This sample investment order is undergoing operations review.'
    ],
    'TRX-2026-0079' => [
        'reference' => 'TRX-2026-0079',
        'type' => 'Funding',
        'description' => 'Cash account funding',
        'date' => '18 November 2026',
        'time' => '10:42 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 2500.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Bank Transfer',
        'account' => 'USD Cash Account',
        'providerReference' => 'BANK-TRX-847291',
        'fee' => 0.00,
        'created' => '18 Nov 2026, 10:42 AM',
        'reviewed' => '18 Nov 2026, 11:15 AM',
        'completed' => '18 Nov 2026, 11:18 AM',
        'note' => 'The sample funding record has been marked as completed.'
    ],
    'TRX-2026-0078' => [
        'reference' => 'TRX-2026-0078',
        'type' => 'Withdrawal',
        'description' => 'Bank withdrawal request',
        'date' => '16 November 2026',
        'time' => '02:10 PM',
        'currency' => 'EUR',
        'symbol' => '€',
        'amount' => 300.00,
        'direction' => 'out',
        'status' => 'Under Review',
        'method' => 'Bank Transfer',
        'account' => 'EUR Cash Account',
        'providerReference' => 'WTH-2026-0012',
        'fee' => 0.00,
        'created' => '16 Nov 2026, 2:10 PM',
        'reviewed' => 'Awaiting operations review',
        'completed' => 'Pending',
        'note' => 'The withdrawal request is awaiting review before payout processing.'
    ],
    'TRX-2026-0077' => [
        'reference' => 'TRX-2026-0077',
        'type' => 'Return',
        'description' => 'Fixed income distribution',
        'date' => '14 November 2026',
        'time' => '08:00 AM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 125.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Investment Distribution',
        'account' => 'USD Cash Account',
        'providerReference' => 'DIST-2026-0018',
        'fee' => 0.00,
        'created' => '14 Nov 2026, 8:00 AM',
        'reviewed' => '14 Nov 2026, 8:20 AM',
        'completed' => '14 Nov 2026, 8:25 AM',
        'note' => 'A sample investment distribution was credited to the cash account.'
    ],
    'TRX-2026-0076' => [
        'reference' => 'TRX-2026-0076',
        'type' => 'Redemption',
        'description' => 'Balanced Growth Fund',
        'date' => '12 November 2026',
        'time' => '01:25 PM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 500.00,
        'direction' => 'in',
        'status' => 'Completed',
        'method' => 'Investment Redemption',
        'account' => 'USD Cash Account',
        'providerReference' => 'RDM-2026-0008',
        'fee' => 0.00,
        'created' => '12 Nov 2026, 1:25 PM',
        'reviewed' => '12 Nov 2026, 2:00 PM',
        'completed' => '12 Nov 2026, 2:05 PM',
        'note' => 'The sample redemption proceeds have been settled into the cash account.'
    ],
    'TRX-2026-0075' => [
        'reference' => 'TRX-2026-0075',
        'type' => 'Investment',
        'description' => 'Balanced Growth Fund',
        'date' => '10 November 2026',
        'time' => '10:05 AM',
        'currency' => 'EUR',
        'symbol' => '€',
        'amount' => 800.00,
        'direction' => 'out',
        'status' => 'Completed',
        'method' => 'Cash Account',
        'account' => 'EUR Cash Account',
        'providerReference' => 'ORD-2026-0038',
        'fee' => 0.00,
        'created' => '10 Nov 2026, 10:05 AM',
        'reviewed' => '10 Nov 2026, 10:30 AM',
        'completed' => '10 Nov 2026, 11:00 AM',
        'note' => 'The sample investment order has been marked as executed.'
    ],
    'TRX-2026-0074' => [
        'reference' => 'TRX-2026-0074',
        'type' => 'Withdrawal',
        'description' => 'Bank withdrawal',
        'date' => '08 November 2026',
        'time' => '03:40 PM',
        'currency' => 'USD',
        'symbol' => '$',
        'amount' => 400.00,
        'direction' => 'out',
        'status' => 'Completed',
        'method' => 'Bank Transfer',
        'account' => 'USD Cash Account',
        'providerReference' => 'WTH-2026-0009',
        'fee' => 0.00,
        'created' => '08 Nov 2026, 3:40 PM',
        'reviewed' => '08 Nov 2026, 4:00 PM',
        'completed' => '09 Nov 2026, 9:15 AM',
        'note' => 'The sample withdrawal has been marked as paid.'
    ]
];

$reference = $_GET['id'] ?? 'TRX-2026-0081';
$transaction = $transactions[$reference] ?? null;

function transactionDetailMoney($amount, $symbol) {
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

    <main class="p-4 sm:p-6 lg:p-8 max-w-6xl mx-auto">

        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="transactions.php" class="hover:text-emerald-700">Transactions</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span class="text-gray-900 font-medium">Transaction Details</span>
        </div>

        <?php if (!$transaction): ?>

            <div class="bg-white border border-gray-200 rounded-xl p-8 text-center">
                <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-file-circle-question text-gray-400 text-xl"></i>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Transaction not found</h1>
                <p class="text-sm text-gray-500 mt-2">The transaction reference may be invalid or unavailable.</p>
                <a href="transactions.php" class="inline-flex mt-5 bg-[#0F9D78] text-white px-5 py-2.5 rounded-lg text-sm font-semibold">
                    Back to Transactions
                </a>
            </div>

        <?php else: ?>

            <?php
                $typeStyle = $typeStyles[$transaction['type']];
                $statusStyle = $statusStyles[$transaction['status']];
                $isCompleted = $transaction['status'] === 'Completed';
                $isReviewed = in_array($transaction['status'], ['Processing', 'Under Review', 'Completed']);
                $amountPrefix = $transaction['direction'] === 'in' ? '+' : '−';
                $amountColor = $transaction['direction'] === 'in' ? 'text-green-700' : 'text-gray-900';
            ?>

            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-7">
                <div>
                    <a href="transactions.php" class="text-sm text-gray-500 hover:text-emerald-700 inline-flex items-center gap-2 mb-3">
                        <i class="fa-solid fa-arrow-left"></i> Back to Transactions
                    </a>
                    <h1 class="text-2xl font-bold text-gray-900">Transaction Details</h1>
                    <p class="text-sm text-gray-500 mt-1">
                        Reference: <?= htmlspecialchars($transaction['reference']) ?>
                    </p>
                </div>

                <span class="inline-flex items-center gap-2 px-3 py-2 rounded-full text-xs font-semibold <?= $statusStyle ?>">
                    <span class="w-2 h-2 rounded-full bg-current"></span>
                    <?= htmlspecialchars($transaction['status']) ?>
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Main column -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Transaction overview -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-11 h-11 rounded-xl flex items-center justify-center <?= $typeStyle[0] ?>">
                                <i class="fa-solid <?= $typeStyle[1] ?> text-lg"></i>
                            </div>
                            <div>
                                <h2 class="font-bold text-gray-900"><?= htmlspecialchars($transaction['description']) ?></h2>
                                <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($transaction['type']) ?> transaction</p>
                            </div>
                        </div>

                        <p class="text-sm text-gray-500 mb-2">Transaction Amount</p>
                        <h2 class="text-3xl sm:text-4xl font-bold <?= $amountColor ?>">
                            <?= $amountPrefix . transactionDetailMoney($transaction['amount'], $transaction['symbol']) ?>
                        </h2>
                        <p class="text-xs text-gray-500 mt-2"><?= htmlspecialchars($transaction['currency']) ?></p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 border-t border-gray-100 mt-6 pt-5">
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Transaction Date</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($transaction['date']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Transaction Time</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($transaction['time']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Transaction Type</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($transaction['type']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Payment Method</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($transaction['method']) ?></p>
                            </div>
                        </div>
                    </section>

                    <!-- Processing timeline -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-bold text-gray-900 mb-6">Processing Timeline</h3>

                        <div class="space-y-6">

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-full bg-green-50 text-green-600 flex items-center justify-center">
                                        <i class="fa-solid fa-check text-sm"></i>
                                    </div>
                                    <div class="w-px h-12 bg-gray-200"></div>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Transaction initiated</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($transaction['created']) ?></p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-full <?= $isReviewed ? 'bg-green-50 text-green-600' : 'bg-gray-100 text-gray-400' ?> flex items-center justify-center">
                                        <i class="fa-solid fa-clipboard-check text-sm"></i>
                                    </div>
                                    <div class="w-px h-12 bg-gray-200"></div>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Review / processing</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($transaction['reviewed']) ?></p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-9 h-9 rounded-full <?= $isCompleted ? 'bg-green-50 text-green-600' : 'bg-gray-100 text-gray-400' ?> flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-check-double text-sm"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Transaction completed</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($transaction['completed']) ?></p>
                                </div>
                            </div>

                        </div>

                        <div class="mt-6 p-4 rounded-lg bg-blue-50 border border-blue-100">
                            <p class="text-sm text-blue-900">
                                <i class="fa-solid fa-circle-info mr-1"></i>
                                <?= htmlspecialchars($transaction['note']) ?>
                            </p>
                        </div>
                    </section>

                    <!-- Transaction information -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-bold text-gray-900 mb-5">Transaction Information</h3>

                        <div class="space-y-4">
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1 text-sm">
                                <span class="text-gray-500">Transaction Reference</span>
                                <span class="font-semibold text-gray-900"><?= htmlspecialchars($transaction['reference']) ?></span>
                            </div>

                            <div class="border-t border-gray-100"></div>

                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1 text-sm">
                                <span class="text-gray-500">Related Reference</span>
                                <span class="font-semibold text-gray-900"><?= htmlspecialchars($transaction['providerReference']) ?></span>
                            </div>

                            <div class="border-t border-gray-100"></div>

                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1 text-sm">
                                <span class="text-gray-500">Source / Destination Account</span>
                                <span class="font-semibold text-gray-900"><?= htmlspecialchars($transaction['account']) ?></span>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Sidebar -->
                <div class="space-y-6">

                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-bold text-gray-900 mb-5">Amount Breakdown</h3>

                        <div class="space-y-4">
                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Transaction Amount</span>
                                <span class="font-semibold text-gray-900">
                                    <?= transactionDetailMoney($transaction['amount'], $transaction['symbol']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Displayed Fee</span>
                                <span class="font-semibold text-gray-900">
                                    <?= transactionDetailMoney($transaction['fee'], $transaction['symbol']) ?>
                                </span>
                            </div>

                            <div class="border-t border-gray-100 pt-4 flex justify-between gap-3">
                                <span class="font-semibold text-gray-900">Net Amount</span>
                                <span class="font-bold text-gray-900">
                                    <?= transactionDetailMoney($transaction['amount'] - $transaction['fee'], $transaction['symbol']) ?>
                                </span>
                            </div>
                        </div>

                        <p class="text-xs text-gray-400 mt-4">
                            Illustrative breakdown; actual charges depend on applicable product and provider terms.
                        </p>
                    </section>

                    <section class="bg-[#0B1F33] rounded-xl p-6 text-white">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3 class="font-bold">Need help?</h3>
                        <p class="text-sm text-gray-300 mt-2 leading-relaxed">
                            Contact support if you have questions about this transaction or its status.
                        </p>
                        <a href="../public/resources.php" class="inline-flex items-center gap-2 mt-5 text-sm font-semibold text-emerald-300 hover:text-white">
                            Visit Help Centre <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </section>

                    <a href="transactions.php" class="flex items-center justify-center gap-2 w-full border border-gray-200 bg-white rounded-xl py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        All Transactions
                    </a>

                </div>
            </div>

            <!-- <p class="text-xs text-gray-400 mt-6">
                Prototype demonstration only. All transaction records, amounts, statuses, and references are illustrative. No real financial activity has taken place.
            </p> -->

        <?php endif; ?>

    </main>
</div>

<?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
<?php include __DIR__ . '/../components/shared/footer.php'; ?>

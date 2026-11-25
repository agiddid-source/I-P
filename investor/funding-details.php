
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Funding Details';
$bodyClass = 'bg-gray-50';

$fundingRecords = [
    'FND-2026-0018' => [
        'reference' => 'FND-2026-0018',
        'amount' => 2500.00,
        'currency' => 'USD',
        'symbol' => '$',
        'method' => 'Bank Transfer',
        'status' => 'Completed',
        'date' => '18 November 2026',
        'time' => '10:42 AM',
        'account' => 'USD Cash Account',
        'description' => 'Account funding',
        'bankReference' => 'BANK-TRX-847291',
        'created' => '18 Nov 2026, 10:42 AM',
        'processed' => '18 Nov 2026, 11:15 AM',
        'completed' => '18 Nov 2026, 11:18 AM'
    ],
    'FND-2026-0019' => [
        'reference' => 'FND-2026-0019',
        'amount' => 150.00,
        'currency' => 'EUR',
        'symbol' => '€',
        'method' => 'Bank Transfer',
        'status' => 'Processing',
        'date' => '20 November 2026',
        'time' => '02:30 PM',
        'account' => 'EUR Cash Account',
        'description' => 'Account funding',
        'bankReference' => 'BANK-TRX-847315',
        'created' => '20 Nov 2026, 2:30 PM',
        'processed' => 'Awaiting confirmation',
        'completed' => 'Pending'
    ],
    'FND-2026-0020' => [
        'reference' => 'FND-2026-0020',
        'amount' => 750.00,
        'currency' => 'GBP',
        'symbol' => '£',
        'method' => 'Card Payment',
        'status' => 'Pending',
        'date' => '21 November 2026',
        'time' => '09:15 AM',
        'account' => 'GBP Cash Account',
        'description' => 'Account funding',
        'bankReference' => 'CARD-TRX-284019',
        'created' => '21 Nov 2026, 9:15 AM',
        'processed' => 'Awaiting confirmation',
        'completed' => 'Pending'
    ]
];

$reference = $_GET['id'] ?? 'FND-2026-0018';
$funding = $fundingRecords[$reference] ?? null;

function fundingDetailMoney($amount, $symbol) {
    return $symbol . number_format($amount, 2);
}

include __DIR__ . '/../components/shared/head.php';
?>

<?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

<div class="lg:pl-64 min-h-screen">
    <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

    <main class="p-4 sm:p-6 lg:p-8 max-w-6xl mx-auto">

        <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
            <a href="cash.php" class="hover:text-emerald-700">Cash Account</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <a href="transactions.php" class="hover:text-emerald-700">Transactions</a>
            <i class="fa-solid fa-chevron-right text-xs"></i>
            <span class="text-gray-900 font-medium">Funding Details</span>
        </div>

        <?php if (!$funding): ?>

            <div class="bg-white border border-gray-200 rounded-xl p-8 text-center">
                <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-file-circle-question text-gray-400 text-xl"></i>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Funding record not found</h1>
                <p class="text-gray-500 text-sm mt-2">The funding reference may be invalid or unavailable.</p>
                <a href="cash.php" class="inline-flex mt-5 bg-[#0F9D78] text-white px-5 py-2.5 rounded-lg text-sm font-semibold">
                    Back to Cash Account
                </a>
            </div>

        <?php else: ?>

            <?php
                $statusStyles = [
                    'Completed' => 'bg-green-50 text-green-700',
                    'Processing' => 'bg-blue-50 text-blue-700',
                    'Pending' => 'bg-amber-50 text-amber-700',
                    'Failed' => 'bg-red-50 text-red-700'
                ];

                $statusStyle = $statusStyles[$funding['status']] ?? 'bg-gray-100 text-gray-700';

                $isCompleted = $funding['status'] === 'Completed';
                $isProcessing = in_array($funding['status'], ['Processing', 'Completed']);
            ?>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7">
                <div>
                    <a href="cash.php" class="text-sm text-gray-500 hover:text-emerald-700 inline-flex items-center gap-2 mb-3">
                        <i class="fa-solid fa-arrow-left"></i> Back to Cash Account
                    </a>
                    <h1 class="text-2xl font-bold text-gray-900">Funding Details</h1>
                    <p class="text-sm text-gray-500 mt-1">Review the details of your cash account funding.</p>
                </div>

                <span class="inline-flex items-center gap-2 px-3 py-2 rounded-full text-xs font-semibold <?= $statusStyle ?>">
                    <span class="w-2 h-2 rounded-full bg-current"></span>
                    <?= htmlspecialchars($funding['status']) ?>
                </span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2 space-y-6">

                    <!-- Funding amount -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <p class="text-sm text-gray-500 mb-2">Funding Amount</p>
                        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                            <?= fundingDetailMoney($funding['amount'], $funding['symbol']) ?>
                        </h2>
                        <p class="text-sm text-gray-500 mt-2">
                            <?= htmlspecialchars($funding['currency']) ?> cash account
                        </p>

                        <div class="border-t border-gray-100 mt-6 pt-5 grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Funding Reference</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($funding['reference']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Date Initiated</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($funding['date']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Payment Method</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($funding['method']) ?></p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 mb-1">Destination Account</p>
                                <p class="font-semibold text-sm text-gray-900"><?= htmlspecialchars($funding['account']) ?></p>
                            </div>
                        </div>
                    </section>

                    <!-- Funding timeline -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-bold text-gray-900 mb-6">Funding Timeline</h3>

                        <div class="space-y-6">

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-full bg-green-50 text-green-600 flex items-center justify-center">
                                        <i class="fa-solid fa-check text-sm"></i>
                                    </div>
                                    <div class="w-px h-12 bg-gray-200"></div>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Funding request created</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($funding['created']) ?></p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-9 h-9 rounded-full <?= $isProcessing ? 'bg-green-50 text-green-600' : 'bg-gray-100 text-gray-400' ?> flex items-center justify-center">
                                        <i class="fa-solid fa-building-columns text-sm"></i>
                                    </div>
                                    <div class="w-px h-12 bg-gray-200"></div>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Payment processing</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($funding['processed']) ?></p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-9 h-9 rounded-full <?= $isCompleted ? 'bg-green-50 text-green-600' : 'bg-gray-100 text-gray-400' ?> flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-wallet text-sm"></i>
                                </div>
                                <div class="pt-1">
                                    <p class="font-semibold text-sm text-gray-900">Cash account credited</p>
                                    <p class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($funding['completed']) ?></p>
                                </div>
                            </div>

                        </div>

                        <?php if (!$isCompleted): ?>
                            <div class="mt-6 bg-blue-50 border border-blue-100 rounded-lg p-4">
                                <p class="text-sm text-blue-800">
                                    <i class="fa-solid fa-circle-info mr-1"></i>
                                    This funding record has not yet been marked as completed. The displayed timeline is illustrative.
                                </p>
                            </div>
                        <?php endif; ?>
                    </section>

                    <!-- Reference information -->
                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <h3 class="font-bold text-gray-900 mb-5">Additional Information</h3>

                        <div class="space-y-4">
                            <div class="flex justify-between gap-4 text-sm">
                                <span class="text-gray-500">Bank / Payment Reference</span>
                                <span class="font-medium text-gray-900 text-right"><?= htmlspecialchars($funding['bankReference']) ?></span>
                            </div>
                            <div class="border-t border-gray-100"></div>
                            <div class="flex justify-between gap-4 text-sm">
                                <span class="text-gray-500">Transaction Type</span>
                                <span class="font-medium text-gray-900">Account Funding</span>
                            </div>
                            <div class="border-t border-gray-100"></div>
                            <div class="flex justify-between gap-4 text-sm">
                                <span class="text-gray-500">Description</span>
                                <span class="font-medium text-gray-900"><?= htmlspecialchars($funding['description']) ?></span>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Side panel -->
                <div class="space-y-6">

                    <section class="bg-white border border-gray-200 rounded-xl p-6">
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-circle-check text-lg"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Funding Summary</h3>
                        <p class="text-sm text-gray-500 mt-2">
                            This record represents a sample funding activity in your cash account.
                        </p>

                        <div class="border-t border-gray-100 mt-5 pt-5 space-y-4">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Amount</span>
                                <span class="font-semibold text-gray-900"><?= fundingDetailMoney($funding['amount'], $funding['symbol']) ?></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Fees</span>
                                <span class="font-semibold text-gray-900">Not specified</span>
                            </div>
                            <div class="border-t border-gray-100 pt-4 flex justify-between text-sm">
                                <span class="font-semibold text-gray-900">Total</span>
                                <span class="font-bold text-gray-900"><?= fundingDetailMoney($funding['amount'], $funding['symbol']) ?></span>
                            </div>
                        </div>
                    </section>

                    <section class="bg-[#0B1F33] rounded-xl p-6 text-white">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3 class="font-bold">Need assistance?</h3>
                        <p class="text-sm text-gray-300 mt-2 leading-relaxed">
                            If you have questions about this funding record, contact the platform support team.
                        </p>
                        <a href="../public/resources.php" class="inline-flex items-center gap-2 mt-5 text-sm font-semibold text-emerald-300 hover:text-white">
                            Visit Help Centre <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </section>

                    <a href="transactions.php" class="flex items-center justify-center gap-2 w-full border border-gray-200 bg-white rounded-xl py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        View All Transactions
                    </a>

                </div>
            </div>

            <div class="mt-6 text-xs text-gray-400 flex items-start gap-2">
                <i class="fa-solid fa-circle-info mt-0.5"></i>
                <p>Prototype demonstration only. All funding references, amounts, statuses and payment details are illustrative. No real payment has been initiated or processed.</p>
            </div>

        <?php endif; ?>

    </main>
</div>

<?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
<?php include __DIR__ . '/../components/shared/footer.php'; ?>

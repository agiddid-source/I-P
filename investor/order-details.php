
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Order Details';
$pageHeading = 'Order Details';
$pageSubtitle = 'Review the status and information for your investment order.';

$currentPage = 'investments';

/*
|--------------------------------------------------------------------------
| ILLUSTRATIVE ORDER RECORD
|--------------------------------------------------------------------------
| This is static demo data. No real order is created or submitted.
*/

$orders = [
    'ORD-2026-0042' => [
        'reference' => 'ORD-2026-0042',
        'product_id' => 'INV-001',
        'product_name' => 'Global Fixed Income Fund',
        'category' => 'Fixed Income',
        'currency' => 'USD',
        'amount' => 1000.00,
        'target_return' => 8.5,
        'term' => '12 months',
        'risk' => 'Low',
        'status' => 'Under Review',
        'submitted_at' => 'Nov 21, 2026 · 10:42 AM UTC',
        'updated_at' => 'Nov 21, 2026 · 10:42 AM UTC',
        'estimated_completion' => 'Pending review',
        'status_note' => 'This illustrative order is waiting for an operations review.',
        'timeline' => [
            [
                'title' => 'Order created',
                'description' => 'Order details were recorded in the prototype.',
                'date' => 'Nov 21, 2026 · 10:42 AM UTC',
                'complete' => true
            ],
            [
                'title' => 'Operations review',
                'description' => 'The order is awaiting a review of eligibility, funds and product terms.',
                'date' => 'In progress',
                'complete' => false
            ],
            [
                'title' => 'Execution',
                'description' => 'Execution would occur only after the required checks and approvals.',
                'date' => 'Pending',
                'complete' => false
            ],
            [
                'title' => 'Portfolio update',
                'description' => 'A holding would appear in the portfolio after confirmed execution.',
                'date' => 'Pending',
                'complete' => false
            ]
        ]
    ]
];

$orderReference = $_GET['id'] ?? 'ORD-2026-0042';
$order = $orders[$orderReference] ?? null;

function orderDetailsMoney($amount, $currency) {
    $symbols = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£'
    ];

    return ($symbols[$currency] ?? $currency . ' ')
        . number_format($amount, 2);
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
?>

<div class="lg:ml-64 min-h-screen bg-gray-50">

    <?php include ROOT_PATH . '/components/investor/topbar.php'; ?>

    <main class="px-4 sm:px-6 lg:px-8 py-6 pb-28 lg:pb-8">

        <?php if (!$order): ?>

            <div class="max-w-xl mx-auto bg-white border border-gray-200 rounded-xl p-10 text-center mt-12">
                <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 text-gray-400 text-xl">
                    <i class="fas fa-file-circle-question"></i>
                </div>

                <h1 class="text-xl font-bold text-gray-900">
                    Order not found
                </h1>

                <p class="text-sm text-gray-500 mt-2">
                    We couldn't find an order with that reference.
                </p>

                <a href="<?= BASE_URL ?>/investor/transactions.php"
                   class="inline-flex mt-6 bg-[#0B1F33] text-white px-5 py-3 rounded-lg text-sm font-semibold">
                    View Transactions
                </a>
            </div>

        <?php else: ?>

            <!-- BREADCRUMB -->
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
                <a href="<?= BASE_URL ?>/investor/transactions.php"
                   class="hover:text-emerald-700">
                    Transactions
                </a>

                <i class="fas fa-chevron-right text-xs"></i>

                <span class="font-medium text-gray-900">Order Details</span>
            </div>

            <!-- PAGE HEADER -->
            <section class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-5 mb-7">

                <div>
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <span class="text-xs font-semibold bg-amber-50 text-amber-700 px-3 py-1.5 rounded-full">
                            <i class="fas fa-clock mr-1"></i>
                            <?= htmlspecialchars($order['status']) ?>
                        </span>

                        <span class="text-xs text-gray-400">
                            Demo order record
                        </span>
                    </div>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                        Investment order
                    </h1>

                    <p class="text-sm text-gray-500 mt-2">
                        Reference:
                        <span class="font-semibold text-gray-700">
                            <?= htmlspecialchars($order['reference']) ?>
                        </span>
                    </p>
                </div>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="inline-flex items-center justify-center gap-2 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-semibold text-sm px-4 py-2.5 rounded-lg transition">
                    <i class="fas fa-arrow-left text-xs"></i>
                    Back to Investments
                </a>

            </section>

            <!-- PROTOTYPE NOTICE -->
            <section class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6">
                <div class="flex gap-3">
                    <i class="fas fa-circle-info text-blue-700 mt-1"></i>

                    <div>
                        <h2 class="text-sm font-semibold text-blue-900">
                            Illustrative order status
                        </h2>

                        <p class="text-xs text-blue-800 mt-1 leading-relaxed">
                            This order is sample data for the frontend prototype.
                            It was not submitted by the confirmation page, and no funds
                            have been moved or investment executed.
                        </p>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                <!-- MAIN COLUMN -->
                <div class="xl:col-span-2 space-y-6">

                    <!-- ORDER STATUS -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">

                            <div>
                                <p class="text-sm text-gray-500">
                                    Order status
                                </p>

                                <h2 class="text-xl font-bold text-gray-900 mt-1">
                                    <?= htmlspecialchars($order['status']) ?>
                                </h2>

                                <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                    <?= htmlspecialchars($order['status_note']) ?>
                                </p>
                            </div>

                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-lg shrink-0">
                                <i class="fas fa-hourglass-half"></i>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 pt-5 border-t border-gray-100">

                            <div>
                                <p class="text-xs text-gray-400">Order created</p>
                                <p class="text-sm font-semibold text-gray-800 mt-1">
                                    <?= htmlspecialchars($order['submitted_at']) ?>
                                </p>
                            </div>

                            <div>
                                <p class="text-xs text-gray-400">Last updated</p>
                                <p class="text-sm font-semibold text-gray-800 mt-1">
                                    <?= htmlspecialchars($order['updated_at']) ?>
                                </p>
                            </div>

                        </div>

                    </section>

                    <!-- ORDER TIMELINE -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900">
                            Order timeline
                        </h2>

                        <p class="text-sm text-gray-500 mt-1 mb-6">
                            Follow the stages of the illustrative order.
                        </p>

                        <div class="space-y-0">

                            <?php foreach ($order['timeline'] as $index => $step): ?>

                                <div class="flex gap-4">

                                    <div class="flex flex-col items-center">

                                        <div class="w-9 h-9 rounded-full flex items-center justify-center shrink-0
                                            <?= $step['complete']
                                                ? 'bg-emerald-100 text-emerald-700'
                                                : ($index === 1
                                                    ? 'bg-amber-100 text-amber-700'
                                                    : 'bg-gray-100 text-gray-400') ?>">
                                            <?php if ($step['complete']): ?>
                                                <i class="fas fa-check text-xs"></i>
                                            <?php elseif ($index === 1): ?>
                                                <i class="fas fa-clock text-xs"></i>
                                            <?php else: ?>
                                                <i class="fas fa-circle text-[7px]"></i>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($index < count($order['timeline']) - 1): ?>
                                            <div class="w-px flex-1 min-h-[44px] bg-gray-200"></div>
                                        <?php endif; ?>

                                    </div>

                                    <div class="pb-6 min-w-0">
                                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                            <h3 class="text-sm font-semibold text-gray-900">
                                                <?= htmlspecialchars($step['title']) ?>
                                            </h3>

                                            <span class="text-xs text-gray-400">
                                                <?= htmlspecialchars($step['date']) ?>
                                            </span>
                                        </div>

                                        <p class="text-sm text-gray-500 mt-1 leading-relaxed">
                                            <?= htmlspecialchars($step['description']) ?>
                                        </p>
                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </section>

                    <!-- NEXT STEPS -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                        <h2 class="text-lg font-bold text-gray-900">
                            What happens next?
                        </h2>

                        <div class="space-y-4 mt-5">

                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center shrink-0">
                                    <i class="fas fa-clipboard-check text-sm"></i>
                                </div>

                                <div>
                                    <h3 class="text-sm font-semibold text-gray-800">
                                        Review and eligibility checks
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1 leading-relaxed">
                                        In a live service, the relevant team would review
                                        investor eligibility, available funds and product terms.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center shrink-0">
                                    <i class="fas fa-file-signature text-sm"></i>
                                </div>

                                <div>
                                    <h3 class="text-sm font-semibold text-gray-800">
                                        Order execution
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1 leading-relaxed">
                                        Execution would be recorded only after required
                                        checks, approvals and applicable settlement steps.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0">
                                    <i class="fas fa-briefcase text-sm"></i>
                                </div>

                                <div>
                                    <h3 class="text-sm font-semibold text-gray-800">
                                        Portfolio update
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1 leading-relaxed">
                                        A holding would appear in the investor's portfolio
                                        after confirmed execution.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>

                <!-- SUMMARY COLUMN -->
                <aside class="space-y-6">

                    <section class="bg-white border border-gray-200 rounded-xl p-5">

                        <h2 class="font-bold text-gray-900 mb-5">
                            Order summary
                        </h2>

                        <div class="flex items-start gap-3 pb-5 border-b border-gray-100">
                            <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0">
                                <i class="fas fa-chart-line"></i>
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-gray-900">
                                    <?= htmlspecialchars($order['product_name']) ?>
                                </h3>

                                <p class="text-xs text-gray-500 mt-1">
                                    <?= htmlspecialchars($order['category']) ?>
                                </p>
                            </div>
                        </div>

                        <div class="space-y-4 py-5">

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Order amount</span>
                                <span class="font-semibold text-gray-900">
                                    <?= orderDetailsMoney($order['amount'], $order['currency']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Currency</span>
                                <span class="font-semibold text-gray-900">
                                    <?= htmlspecialchars($order['currency']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Target return</span>
                                <span class="font-semibold text-gray-900">
                                    <?= number_format($order['target_return'], 1) ?>% p.a.
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Term</span>
                                <span class="font-semibold text-gray-900">
                                    <?= htmlspecialchars($order['term']) ?>
                                </span>
                            </div>

                            <div class="flex justify-between gap-3 text-sm">
                                <span class="text-gray-500">Risk level</span>
                                <span class="font-semibold text-gray-900">
                                    <?= htmlspecialchars($order['risk']) ?>
                                </span>
                            </div>

                        </div>

                        <div class="border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-400">Estimated completion</p>
                            <p class="text-sm font-semibold text-gray-900 mt-1">
                                <?= htmlspecialchars($order['estimated_completion']) ?>
                            </p>
                        </div>

                    </section>

                    <section class="bg-gray-100 rounded-xl p-5">

                        <div class="flex gap-3">
                            <i class="fas fa-circle-info text-gray-500 mt-1"></i>

                            <div>
                                <h3 class="text-sm font-semibold text-gray-800">
                                    Need help with this order?
                                </h3>

                                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                    Contact support if you have questions about an order's
                                    status or the next steps.
                                </p>

                                <a href="mailto:support@example.com"
                                   class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-700 hover:text-emerald-800 mt-3">
                                    Contact Support
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </section>

                    <a href="<?= BASE_URL ?>/investor/portfolio.php"
                       class="w-full inline-flex items-center justify-center gap-2 bg-[#0B1F33] hover:bg-[#163A59] text-white text-sm font-semibold py-3 rounded-lg transition">
                        View Portfolio
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>

                </aside>

            </div>

        <?php endif; ?>

    </main>

    <?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>

</div>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

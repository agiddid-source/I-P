
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Confirm Investment';
$pageHeading = 'Confirm Investment';
$pageSubtitle = 'Review your investment details before proceeding.';

$currentPage = 'investments';

$products = [
    'INV-001' => [
        'id' => 'INV-001',
        'name' => 'Global Fixed Income Fund',
        'category' => 'Fixed Income',
        'currency' => 'USD',
        'target_return' => 8.5,
        'minimum' => 500,
        'term' => '12 months',
        'risk' => 'Low'
    ],
    'INV-002' => [
        'id' => 'INV-002',
        'name' => 'Commercial Property Fund',
        'category' => 'Real Estate',
        'currency' => 'USD',
        'target_return' => 12.0,
        'minimum' => 1000,
        'term' => '24 months',
        'risk' => 'Medium'
    ],
    'INV-003' => [
        'id' => 'INV-003',
        'name' => 'Private Credit Portfolio',
        'category' => 'Private Credit',
        'currency' => 'EUR',
        'target_return' => 10.5,
        'minimum' => 750,
        'term' => '18 months',
        'risk' => 'Medium'
    ],
    'INV-004' => [
        'id' => 'INV-004',
        'name' => 'Global Equity Portfolio',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 15.0,
        'minimum' => 250,
        'term' => 'Open-ended',
        'risk' => 'High'
    ],
    'INV-005' => [
        'id' => 'INV-005',
        'name' => 'Infrastructure Income Fund',
        'category' => 'Infrastructure',
        'currency' => 'GBP',
        'target_return' => 9.0,
        'minimum' => 1500,
        'term' => '36 months',
        'risk' => 'Medium'
    ],
    'INV-006' => [
        'id' => 'INV-006',
        'name' => 'Emerging Markets Fund',
        'category' => 'Equities',
        'currency' => 'USD',
        'target_return' => 14.0,
        'minimum' => 500,
        'term' => 'Open-ended',
        'risk' => 'High'
    ]
];

$productId = $_GET['id'] ?? 'INV-001';
$product = $products[$productId] ?? null;

/*
|--------------------------------------------------------------------------
| MOCK INVESTOR CASH BALANCES
|--------------------------------------------------------------------------
| Illustrative only. Not connected to a real cash account.
*/

$cashBalances = [
    'USD' => 2850,
    'EUR' => 1200,
    'GBP' => 1800
];

if ($product) {
    $availableCash = $cashBalances[$product['currency']] ?? 0;
} else {
    $availableCash = 0;
}

function confirmationAmount($amount, $currency) {
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

        <?php if (!$product): ?>

            <div class="max-w-xl mx-auto bg-white border border-gray-200 rounded-xl p-10 text-center mt-12">
                <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 text-gray-400 text-xl">
                    <i class="fas fa-box-open"></i>
                </div>

                <h2 class="text-xl font-bold text-gray-900">
                    Investment not found
                </h2>

                <p class="text-sm text-gray-500 mt-2">
                    The selected investment could not be found.
                </p>

                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="inline-block mt-6 bg-[#0B1F33] text-white px-5 py-3 rounded-lg text-sm font-semibold">
                    Browse Investments
                </a>
            </div>

        <?php else: ?>

            <!-- BREADCRUMB -->
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
                <a href="<?= BASE_URL ?>/investor/investments.php"
                   class="hover:text-emerald-700">
                    Investments
                </a>

                <i class="fas fa-chevron-right text-xs"></i>

                <a href="<?= BASE_URL ?>/investor/investment-details.php?id=<?= urlencode($product['id']) ?>"
                   class="hover:text-emerald-700">
                    Product Details
                </a>

                <i class="fas fa-chevron-right text-xs"></i>

                <span class="font-medium text-gray-900">Confirmation</span>
            </div>

            <!-- INTRO -->
            <section class="mb-7">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                    Review your investment
                </h1>

                <p class="text-sm text-gray-500 mt-2">
                    Enter your investment amount and review the details carefully.
                </p>
            </section>

            <!-- PROGRESS -->
            <section class="bg-white border border-gray-200 rounded-xl p-5 mb-6">

                <div class="flex items-center justify-between text-xs sm:text-sm mb-4">

                    <div class="flex items-center gap-2 text-emerald-700 font-semibold">
                        <span class="w-7 h-7 rounded-full bg-emerald-100 flex items-center justify-center">
                            <i class="fas fa-check text-xs"></i>
                        </span>
                        Select product
                    </div>

                    <div class="h-px flex-1 bg-emerald-200 mx-3"></div>

                    <div class="flex items-center gap-2 text-emerald-700 font-semibold">
                        <span class="w-7 h-7 rounded-full bg-emerald-600 text-white flex items-center justify-center">
                            2
                        </span>
                        Review
                    </div>

                    <div class="h-px flex-1 bg-gray-200 mx-3"></div>

                    <div class="flex items-center gap-2 text-gray-400 font-medium">
                        <span class="w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center">
                            3
                        </span>
                        Confirmation
                    </div>

                </div>

                <div class="h-1.5 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full w-2/3 bg-emerald-600 rounded-full"></div>
                </div>

            </section>

            <form id="investmentForm" novalidate>

                <input type="hidden" id="productId"
                       value="<?= htmlspecialchars($product['id']) ?>">

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                    <!-- MAIN FORM -->
                    <div class="xl:col-span-2 space-y-6">

                        <!-- PRODUCT -->
                        <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                            <div class="flex items-center justify-between mb-5">
                                <h2 class="font-bold text-gray-900">
                                    Selected investment
                                </h2>

                                <a href="<?= BASE_URL ?>/investor/investments.php"
                                   class="text-xs font-semibold text-emerald-700 hover:text-emerald-800">
                                    Change product
                                </a>
                            </div>

                            <div class="flex items-start gap-4">

                                <div class="w-12 h-12 shrink-0 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-lg">
                                    <i class="fas fa-chart-line"></i>
                                </div>

                                <div class="min-w-0">
                                    <h3 class="text-base font-bold text-gray-900">
                                        <?= htmlspecialchars($product['name']) ?>
                                    </h3>

                                    <p class="text-xs text-gray-500 mt-1">
                                        <?= htmlspecialchars($product['category']) ?>
                                        · <?= htmlspecialchars($product['id']) ?>
                                    </p>

                                    <span class="inline-block mt-2 text-xs font-semibold px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700">
                                        Available
                                    </span>
                                </div>

                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-6 pt-5 border-t border-gray-100">

                                <div>
                                    <p class="text-xs text-gray-400">Target return</p>
                                    <p class="text-sm font-bold text-gray-900 mt-1">
                                        <?= number_format($product['target_return'], 1) ?>% p.a.
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400">Risk level</p>
                                    <p class="text-sm font-bold text-gray-900 mt-1">
                                        <?= htmlspecialchars($product['risk']) ?>
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs text-gray-400">Investment term</p>
                                    <p class="text-sm font-bold text-gray-900 mt-1">
                                        <?= htmlspecialchars($product['term']) ?>
                                    </p>
                                </div>

                            </div>

                        </section>

                        <!-- AMOUNT -->
                        <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                            <h2 class="font-bold text-gray-900">
                                Investment amount
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                How much would you like to invest?
                            </p>

                            <div class="mt-5">

                                <label for="investmentAmount"
                                       class="block text-sm font-semibold text-gray-700 mb-2">
                                    Amount (<?= htmlspecialchars($product['currency']) ?>)
                                </label>

                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-semibold">
                                        <?= $product['currency'] === 'USD' ? '$' : ($product['currency'] === 'EUR' ? '€' : '£') ?>
                                    </span>

                                    <input type="number"
                                           id="investmentAmount"
                                           name="investmentAmount"
                                           min="<?= $product['minimum'] ?>"
                                           max="<?= $availableCash ?>"
                                           step="0.01"
                                           placeholder="Enter amount"
                                           class="w-full pl-10 pr-4 py-4 border border-gray-200 rounded-lg text-xl font-bold text-gray-900 outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                                </div>

                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mt-3">

                                    <p class="text-xs text-gray-500">
                                        Minimum:
                                        <strong>
                                            <?= confirmationAmount($product['minimum'], $product['currency']) ?>
                                        </strong>
                                    </p>

                                    <button type="button" id="useMaxAmount"
                                            class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 text-left">
                                        Use available balance
                                    </button>

                                </div>

                                <p id="amountError" class="hidden text-xs text-red-600 mt-3"></p>

                            </div>

                            <!-- CASH BALANCE -->
                            <div class="flex items-center justify-between gap-3 bg-gray-50 border border-gray-100 rounded-lg p-4 mt-6">

                                <div>
                                    <p class="text-xs text-gray-500">
                                        Available cash balance
                                    </p>

                                    <p class="text-lg font-bold text-gray-900 mt-1">
                                        <?= confirmationAmount($availableCash, $product['currency']) ?>
                                    </p>
                                </div>

                                <a href="<?= BASE_URL ?>/investor/cash.php"
                                   class="text-xs font-semibold text-emerald-700 hover:text-emerald-800 whitespace-nowrap">
                                    View cash account
                                    <i class="fas fa-arrow-right ml-1"></i>
                                </a>

                            </div>

                        </section>

                        <!-- RISK ACKNOWLEDGEMENT -->
                        <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">

                            <h2 class="font-bold text-gray-900 mb-4">
                                Risk acknowledgement
                            </h2>

                            <div class="bg-amber-50 border border-amber-100 rounded-lg p-4 mb-5">

                                <div class="flex gap-3">
                                    <i class="fas fa-triangle-exclamation text-amber-600 mt-1"></i>

                                    <div>
                                        <h3 class="text-sm font-semibold text-amber-900">
                                            Investment capital is at risk
                                        </h3>

                                        <p class="text-xs text-amber-800 mt-2 leading-relaxed">
                                            Investment values can rise or fall. Target returns
                                            are not guaranteed, and you may lose some or all
                                            of your invested capital.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <label class="flex items-start gap-3 cursor-pointer">

                                <input type="checkbox"
                                       id="riskAcknowledgement"
                                       class="w-4 h-4 mt-1 accent-emerald-600 shrink-0">

                                <span class="text-sm text-gray-600 leading-relaxed">
                                    I acknowledge that I have reviewed the investment
                                    information and understand that investment returns
                                    are not guaranteed and my capital is at risk.
                                </span>

                            </label>

                            <p id="acknowledgementError"
                               class="hidden text-xs text-red-600 mt-3">
                                Please acknowledge the investment risks before proceeding.
                            </p>

                        </section>

                    </div>

                    <!-- SUMMARY SIDEBAR -->
                    <aside class="space-y-6">

                        <section class="bg-white border border-gray-200 rounded-xl p-5">

                            <h2 class="font-bold text-gray-900 mb-5">
                                Investment summary
                            </h2>

                            <div class="space-y-4 text-sm">

                                <div class="flex justify-between gap-3">
                                    <span class="text-gray-500">Investment</span>
                                    <span class="font-semibold text-gray-900 text-right">
                                        <?= htmlspecialchars($product['name']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between gap-3">
                                    <span class="text-gray-500">Currency</span>
                                    <span class="font-semibold text-gray-900">
                                        <?= htmlspecialchars($product['currency']) ?>
                                    </span>
                                </div>

                                <div class="flex justify-between gap-3">
                                    <span class="text-gray-500">Target return</span>
                                    <span class="font-semibold text-gray-900">
                                        <?= number_format($product['target_return'], 1) ?>%
                                    </span>
                                </div>

                                <div class="flex justify-between gap-3">
                                    <span class="text-gray-500">Minimum</span>
                                    <span class="font-semibold text-gray-900">
                                        <?= confirmationAmount($product['minimum'], $product['currency']) ?>
                                    </span>
                                </div>

                            </div>

                            <div class="border-t border-gray-100 my-5"></div>

                            <div class="flex justify-between items-center gap-3">
                                <span class="text-sm text-gray-500">
                                    Investment amount
                                </span>

                                <span id="summaryAmount"
                                      class="text-xl font-bold text-gray-900">
                                    <?= confirmationAmount(0, $product['currency']) ?>
                                </span>
                            </div>

                            <div class="mt-4 bg-emerald-50 rounded-lg p-3">

                                <div class="flex items-start gap-2">
                                    <i class="fas fa-circle-info text-emerald-700 mt-0.5"></i>

                                    <p class="text-xs text-emerald-800 leading-relaxed">
                                        The target return shown is illustrative.
                                        Actual performance may differ.
                                    </p>
                                </div>

                            </div>

                            <button type="submit"
                                    id="confirmInvestmentButton"
                                    class="w-full mt-6 bg-[#0B1F33] hover:bg-[#163A59] text-white font-semibold text-sm py-3.5 rounded-lg transition">
                                Review & Confirm
                                <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </button>

                            <a href="<?= BASE_URL ?>/investor/investment-details.php?id=<?= urlencode($product['id']) ?>"
                               class="block text-center text-sm text-gray-500 hover:text-gray-900 mt-4">
                                Go back to product details
                            </a>

                        </section>

                        <section class="bg-gray-100 rounded-xl p-5">

                            <div class="flex gap-3">
                                <i class="fas fa-lock text-gray-500 mt-1"></i>

                                <div>
                                    <h3 class="text-sm font-semibold text-gray-800">
                                        Review before proceeding
                                    </h3>

                                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                        Always check the investment amount, product terms,
                                        fees, risk disclosures and eligibility requirements.
                                    </p>
                                </div>
                            </div>

                        </section>

                    </aside>

                </div>

            </form>

            <!-- CONFIRMATION MODAL -->
            <div id="confirmationModal"
                 class="fixed inset-0 z-[100] hidden items-center justify-center bg-gray-900/60 p-4">

                <div class="bg-white w-full max-w-md rounded-2xl p-6 sm:p-7 shadow-xl">

                    <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mx-auto text-xl mb-5">
                        <i class="fas fa-clipboard-check"></i>
                    </div>

                    <h2 class="text-xl font-bold text-gray-900 text-center">
                        Review complete
                    </h2>

                    <p class="text-sm text-gray-500 text-center mt-2 leading-relaxed">
                        Your investment details have been reviewed in this prototype.
                        No funds will be transferred and no investment order will be submitted.
                    </p>

                    <div class="bg-gray-50 rounded-lg p-4 my-5 space-y-3">

                        <div class="flex justify-between gap-3 text-sm">
                            <span class="text-gray-500">Product</span>
                            <span class="font-semibold text-gray-900 text-right">
                                <?= htmlspecialchars($product['name']) ?>
                            </span>
                        </div>

                        <div class="flex justify-between gap-3 text-sm">
                            <span class="text-gray-500">Amount</span>
                            <span id="modalAmount" class="font-bold text-gray-900"></span>
                        </div>

                    </div>

                    <button type="button" id="closeConfirmationModal"
                            class="w-full bg-[#0B1F33] hover:bg-[#163A59] text-white font-semibold text-sm py-3 rounded-lg transition">
                        Return to investments
                    </button>

                </div>

            </div>

        <?php endif; ?>

    </main>

    <?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>

</div>

<?php if ($product): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const amountInput = document.getElementById('investmentAmount');
    const amountError = document.getElementById('amountError');

    const acknowledgement = document.getElementById('riskAcknowledgement');
    const acknowledgementError = document.getElementById('acknowledgementError');

    const summaryAmount = document.getElementById('summaryAmount');
    const modalAmount = document.getElementById('modalAmount');

    const useMaxButton = document.getElementById('useMaxAmount');
    const form = document.getElementById('investmentForm');

    const modal = document.getElementById('confirmationModal');
    const closeModalButton = document.getElementById('closeConfirmationModal');

    const currency = <?= json_encode($product['currency']) ?>;
    const minimum = <?= json_encode((float) $product['minimum']) ?>;
    const available = <?= json_encode((float) $availableCash) ?>;

    const currencySymbols = {
        USD: '$',
        EUR: '€',
        GBP: '£'
    };

    function formatMoney(value) {
        return (currencySymbols[currency] || currency + ' ')
            + Number(value).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
    }

    function updateSummary() {

        const amount = Number(amountInput.value) || 0;

        summaryAmount.textContent = formatMoney(amount);

        amountInput.classList.remove('border-red-500');

        amountError.classList.add('hidden');
        amountError.textContent = '';

    }

    function validateAmount() {

        const amount = Number(amountInput.value);

        if (!amountInput.value || !Number.isFinite(amount) || amount <= 0) {
            amountError.textContent = 'Enter a valid investment amount.';
            amountError.classList.remove('hidden');
            amountInput.classList.add('border-red-500');
            return false;
        }

        if (amount < minimum) {
            amountError.textContent =
                'The minimum investment is ' + formatMoney(minimum) + '.';

            amountError.classList.remove('hidden');
            amountInput.classList.add('border-red-500');
            return false;
        }

        if (amount > available) {
            amountError.textContent =
                'Your available balance is ' + formatMoney(available) + '.';

            amountError.classList.remove('hidden');
            amountInput.classList.add('border-red-500');
            return false;
        }

        return true;
    }

    amountInput.addEventListener('input', updateSummary);

    useMaxButton.addEventListener('click', function () {
        amountInput.value = available;
        updateSummary();
    });

    form.addEventListener('submit', function (event) {

        event.preventDefault();

        const validAmount = validateAmount();
        const acknowledged = acknowledgement.checked;

        acknowledgementError.classList.toggle('hidden', acknowledged);

        if (!validAmount || !acknowledged) {
            return;
        }

        modalAmount.textContent = formatMoney(Number(amountInput.value));

        modal.classList.remove('hidden');
        modal.classList.add('flex');

    });

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    closeModalButton.addEventListener('click', function () {
        closeModal();

        window.location.href =
            <?= json_encode(BASE_URL . '/investor/investments.php') ?>;
    });

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });

});
</script>
<?php endif; ?>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

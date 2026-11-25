
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Request Redemption';
$bodyClass = 'bg-gray-50';

$holdings = [
    'HLD-001' => [
        'name' => 'Global Fixed Income Fund',
        'currency' => 'USD',
        'symbol' => '$',
        'value' => 12500.00,
        'available' => 5000.00,
        'minimum' => 100.00,
        'notice' => 'Redemptions are subject to review and the fund’s dealing schedule.'
    ],
    'HLD-002' => [
        'name' => 'Balanced Growth Fund',
        'currency' => 'USD',
        'symbol' => '$',
        'value' => 7350.00,
        'available' => 2500.00,
        'minimum' => 50.00,
        'notice' => 'Redemptions are subject to eligibility, review, and settlement terms.'
    ],
    'HLD-003' => [
        'name' => 'Global Equity Index Fund',
        'currency' => 'EUR',
        'symbol' => '€',
        'value' => 5000.00,
        'available' => 1500.00,
        'minimum' => 100.00,
        'notice' => 'Redemption timing depends on the product’s dealing and settlement terms.'
    ]
];

$selectedId = $_GET['holding'] ?? 'HLD-001';
$selectedHolding = $holdings[$selectedId] ?? $holdings['HLD-001'];

function redemptionRequestMoney($amount, $symbol) {
    return $symbol . number_format($amount, 2);
}

include __DIR__ . '/../components/shared/head.php';
?>

<?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

<div class="lg:pl-64 min-h-screen">
    <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

    <main class="p-4 sm:p-6 lg:p-8 max-w-6xl mx-auto">

        <div class="mb-6">
            <a href="redemptions.php" class="text-sm text-gray-500 hover:text-emerald-700 inline-flex items-center gap-2 mb-3">
                <i class="fa-solid fa-arrow-left"></i> Back to Redemptions
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Request Redemption</h1>
            <p class="text-sm text-gray-500 mt-1">Choose an eligible holding and review your sample redemption request.</p>
        </div>

        <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 mb-6 flex gap-3">
            <i class="fa-solid fa-triangle-exclamation text-amber-600 mt-0.5"></i>
            <div>
                <p class="text-sm font-semibold text-amber-900">Redemption is not an immediate withdrawal</p>
                <p class="text-sm text-amber-800 mt-1 leading-relaxed">
                    A redemption request must be reviewed and settled according to the investment’s terms.
                    Once settled, proceeds are credited to your cash account. You can then request a separate withdrawal.
                </p>
            </div>
        </div>

        <form id="redemptionRequestForm" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">

                <!-- Holding selection -->
                <section class="bg-white border border-gray-200 rounded-xl p-6">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <div>
                            <h2 class="font-bold text-gray-900">Select Investment</h2>
                            <p class="text-sm text-gray-500 mt-1">Choose the holding you want to redeem.</p>
                        </div>
                        <span class="text-xs font-semibold text-gray-500">Step 1 of 3</span>
                    </div>

                    <label for="holdingSelect" class="block text-sm font-medium text-gray-700 mb-2">Investment holding</label>
                    <select id="holdingSelect" name="holding" class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
                        <?php foreach ($holdings as $id => $holding): ?>
                            <option value="<?= htmlspecialchars($id) ?>" <?= $id === $selectedId ? 'selected' : '' ?>>
                                <?= htmlspecialchars($holding['name']) ?> — <?= htmlspecialchars($id) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                        <div class="rounded-lg bg-gray-50 p-4">
                            <p class="text-xs text-gray-500">Current Holding Value</p>
                            <p id="holdingValue" class="text-lg font-bold text-gray-900 mt-2">
                                <?= redemptionRequestMoney($selectedHolding['value'], $selectedHolding['symbol']) ?>
                            </p>
                        </div>
                        <div class="rounded-lg bg-emerald-50 p-4">
                            <p class="text-xs text-emerald-700">Illustrative Available to Redeem</p>
                            <p id="availableValue" class="text-lg font-bold text-emerald-800 mt-2">
                                <?= redemptionRequestMoney($selectedHolding['available'], $selectedHolding['symbol']) ?>
                            </p>
                        </div>
                    </div>

                    <p id="holdingNotice" class="text-xs text-gray-500 mt-4 leading-relaxed">
                        <?= htmlspecialchars($selectedHolding['notice']) ?>
                    </p>
                </section>

                <!-- Amount -->
                <section class="bg-white border border-gray-200 rounded-xl p-6">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <div>
                            <h2 class="font-bold text-gray-900">Redemption Amount</h2>
                            <p class="text-sm text-gray-500 mt-1">Enter the amount you would like to redeem.</p>
                        </div>
                        <span class="text-xs font-semibold text-gray-500">Step 2 of 3</span>
                    </div>

                    <label for="redemptionAmount" class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
                    <div class="relative">
                        <span id="amountSymbol" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-semibold">
                            <?= htmlspecialchars($selectedHolding['symbol']) ?>
                        </span>
                        <input
                            type="number"
                            id="redemptionAmount"
                            name="amount"
                            min="<?= htmlspecialchars((string) $selectedHolding['minimum']) ?>"
                            max="<?= htmlspecialchars((string) $selectedHolding['available']) ?>"
                            step="0.01"
                            placeholder="0.00"
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <div class="flex flex-wrap gap-2 mt-3">
                        <button type="button" class="amount-preset px-3 py-1.5 border border-gray-200 rounded-full text-xs font-semibold text-gray-600 hover:bg-gray-50" data-preset="25">25%</button>
                        <button type="button" class="amount-preset px-3 py-1.5 border border-gray-200 rounded-full text-xs font-semibold text-gray-600 hover:bg-gray-50" data-preset="50">50%</button>
                        <button type="button" class="amount-preset px-3 py-1.5 border border-gray-200 rounded-full text-xs font-semibold text-gray-600 hover:bg-gray-50" data-preset="100">Available amount</button>
                    </div>

                    <p id="amountHint" class="text-xs text-gray-500 mt-3">
                        Minimum redemption: <?= redemptionRequestMoney($selectedHolding['minimum'], $selectedHolding['symbol']) ?>
                    </p>
                    <p id="amountError" class="hidden text-sm text-red-600 mt-2"></p>

                    <div class="mt-5 border-t border-gray-100 pt-5">
                        <label for="reasonSelect" class="block text-sm font-medium text-gray-700 mb-2">Reason for redemption <span class="text-gray-400 font-normal">(optional)</span></label>
                        <select id="reasonSelect" name="reason" class="w-full px-4 py-3 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
                            <option value="">Select a reason</option>
                            <option>Personal financial needs</option>
                            <option>Portfolio rebalancing</option>
                            <option>Investment term completed</option>
                            <option>Other</option>
                        </select>
                    </div>
                </section>

                <!-- Acknowledgement -->
                <section class="bg-white border border-gray-200 rounded-xl p-6">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <div>
                            <h2 class="font-bold text-gray-900">Review & Acknowledge</h2>
                            <p class="text-sm text-gray-500 mt-1">Confirm that you understand the redemption process.</p>
                        </div>
                        <span class="text-xs font-semibold text-gray-500">Step 3 of 3</span>
                    </div>

                    <div class="space-y-4">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" id="termsAcknowledged" class="mt-1 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="text-sm text-gray-600 leading-relaxed">
                                I understand that this is a redemption request, not an immediate cash withdrawal, and that processing and settlement depend on the investment’s terms.
                            </span>
                        </label>

                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" id="riskAcknowledged" class="mt-1 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                            <span class="text-sm text-gray-600 leading-relaxed">
                                I understand that the final amount may differ from this estimate due to applicable pricing, fees, or other product terms.
                            </span>
                        </label>
                    </div>

                    <p id="acknowledgementError" class="hidden text-sm text-red-600 mt-4"></p>
                </section>
            </div>

            <!-- Summary -->
            <aside class="space-y-6">
                <section class="bg-white border border-gray-200 rounded-xl p-6 lg:sticky lg:top-6">
                    <h2 class="font-bold text-gray-900">Request Summary</h2>
                    <p class="text-sm text-gray-500 mt-1">Illustrative estimate only.</p>

                    <div class="mt-5 space-y-4">
                        <div class="flex justify-between gap-3 text-sm">
                            <span class="text-gray-500">Selected investment</span>
                            <span id="summaryProduct" class="font-semibold text-gray-900 text-right max-w-40">
                                <?= htmlspecialchars($selectedHolding['name']) ?>
                            </span>
                        </div>
                        <div class="border-t border-gray-100"></div>
                        <div class="flex justify-between gap-3 text-sm">
                            <span class="text-gray-500">Requested amount</span>
                            <span id="summaryAmount" class="font-semibold text-gray-900">—</span>
                        </div>
                        <div class="flex justify-between gap-3 text-sm">
                            <span class="text-gray-500">Estimated fees</span>
                            <span class="font-semibold text-gray-900">Not calculated</span>
                        </div>
                        <div class="border-t border-gray-100 pt-4">
                            <div class="flex justify-between gap-3">
                                <span class="font-semibold text-gray-900">Estimated proceeds</span>
                                <span id="summaryProceeds" class="font-bold text-gray-900">—</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-2">Final proceeds are determined during processing.</p>
                        </div>
                    </div>

                    <button type="submit" class="w-full mt-6 bg-[#0F9D78] hover:bg-[#087A5D] text-white rounded-lg py-3 text-sm font-semibold">
                        Review Demo Request
                    </button>

                    <a href="redemptions.php" class="flex items-center justify-center w-full mt-3 border border-gray-200 rounded-lg py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                        Cancel
                    </a>
                </section>

                <div class="bg-gray-100 rounded-xl p-4">
                    <p class="text-xs text-gray-600 leading-relaxed">
                        <i class="fa-solid fa-circle-info mr-1"></i>
                        This prototype does not submit a request, reserve units, change a holding, or move money.
                    </p>
                </div>
            </aside>
        </form>

    </main>
</div>

<!-- Demo confirmation modal -->
<div id="redemptionModal" class="hidden fixed inset-0 z-[100] bg-gray-900/50 p-4 items-center justify-center">
    <div class="bg-white rounded-2xl w-full max-w-lg p-6 sm:p-8 shadow-xl">
        <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center mx-auto mb-4">
            <i class="fa-solid fa-clipboard-check text-2xl"></i>
        </div>
        <h2 class="text-xl font-bold text-gray-900 text-center">Demo request reviewed</h2>
        <p class="text-sm text-gray-500 text-center mt-2">
            Your sample request passed the frontend checks. No redemption request has been submitted.
        </p>

        <div class="bg-gray-50 rounded-xl p-4 mt-5 space-y-3">
            <div class="flex justify-between gap-3 text-sm">
                <span class="text-gray-500">Investment</span>
                <span id="modalProduct" class="font-semibold text-gray-900 text-right"></span>
            </div>
            <div class="flex justify-between gap-3 text-sm">
                <span class="text-gray-500">Requested amount</span>
                <span id="modalAmount" class="font-semibold text-gray-900"></span>
            </div>
        </div>

        <button type="button" id="closeRedemptionModal" class="w-full mt-5 bg-[#0B1F33] text-white rounded-lg py-3 text-sm font-semibold hover:bg-[#071522]">
            Back to Redemptions
        </button>
    </div>
</div>

<?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
<?php include __DIR__ . '/../components/shared/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const holdings = <?= json_encode($holdings, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;

    const form = document.getElementById('redemptionRequestForm');
    const holdingSelect = document.getElementById('holdingSelect');
    const amountInput = document.getElementById('redemptionAmount');
    const amountSymbol = document.getElementById('amountSymbol');
    const holdingValue = document.getElementById('holdingValue');
    const availableValue = document.getElementById('availableValue');
    const holdingNotice = document.getElementById('holdingNotice');
    const amountHint = document.getElementById('amountHint');
    const amountError = document.getElementById('amountError');
    const summaryProduct = document.getElementById('summaryProduct');
    const summaryAmount = document.getElementById('summaryAmount');
    const summaryProceeds = document.getElementById('summaryProceeds');
    const acknowledgementError = document.getElementById('acknowledgementError');
    const modal = document.getElementById('redemptionModal');

    function money(value, symbol) {
        return symbol + Number(value).toLocaleString('en-US', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function selectedHolding() {
        return holdings[holdingSelect.value];
    }

    function showAmountError(message) {
        amountError.textContent = message;
        amountError.classList.toggle('hidden', !message);
        amountInput.classList.toggle('border-red-500', Boolean(message));
    }

    function updateSummary() {
        const holding = selectedHolding();
        const amount = Number(amountInput.value);

        summaryProduct.textContent = holding.name;

        if (amountInput.value !== '' && Number.isFinite(amount) && amount > 0) {
            summaryAmount.textContent = money(amount, holding.symbol);
            summaryProceeds.textContent = money(amount, holding.symbol);
        } else {
            summaryAmount.textContent = '—';
            summaryProceeds.textContent = '—';
        }
    }

    function updateHolding() {
        const holding = selectedHolding();

        amountSymbol.textContent = holding.symbol;
        holdingValue.textContent = money(holding.value, holding.symbol);
        availableValue.textContent = money(holding.available, holding.symbol);
        holdingNotice.textContent = holding.notice;
        amountInput.min = holding.minimum;
        amountInput.max = holding.available;
        amountHint.textContent = 'Minimum redemption: ' + money(holding.minimum, holding.symbol);

        amountInput.value = '';
        showAmountError('');
        updateSummary();
    }

    holdingSelect.addEventListener('change', updateHolding);
    amountInput.addEventListener('input', function () {
        const holding = selectedHolding();
        const amount = Number(amountInput.value);

        if (amountInput.value === '') {
            showAmountError('');
        } else if (!Number.isFinite(amount) || amount < holding.minimum) {
            showAmountError('Enter at least ' + money(holding.minimum, holding.symbol) + '.');
        } else if (amount > holding.available) {
            showAmountError('The amount exceeds the illustrative available-to-redeem balance.');
        } else {
            showAmountError('');
        }

        updateSummary();
    });

    document.querySelectorAll('.amount-preset').forEach(button => {
        button.addEventListener('click', function () {
            const holding = selectedHolding();
            const percentage = Number(button.dataset.preset);
            const amount = Math.floor((holding.available * percentage / 100) * 100) / 100;

            amountInput.value = amount.toFixed(2);
            amountInput.dispatchEvent(new Event('input', { bubbles: true }));
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const holding = selectedHolding();
        const amount = Number(amountInput.value);
        const termsChecked = document.getElementById('termsAcknowledged').checked;
        const riskChecked = document.getElementById('riskAcknowledged').checked;

        if (!amountInput.value || !Number.isFinite(amount) || amount < holding.minimum || amount > holding.available) {
            showAmountError('Enter a valid amount within the available redemption range.');
            amountInput.focus();
            return;
        }

        if (!termsChecked || !riskChecked) {
            acknowledgementError.textContent = 'Please acknowledge both statements before reviewing this demo request.';
            acknowledgementError.classList.remove('hidden');
            return;
        }

        acknowledgementError.classList.add('hidden');
        document.getElementById('modalProduct').textContent = holding.name;
        document.getElementById('modalAmount').textContent = money(amount, holding.symbol);

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    document.getElementById('closeRedemptionModal').addEventListener('click', function () {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        window.location.href = 'redemptions.php';
    });

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    updateSummary();
});
</script>

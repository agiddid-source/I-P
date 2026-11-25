
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Fund Account';
$bodyClass = 'bg-gray-50 text-gray-900';

$currencies = [
    'USD' => ['name' => 'US Dollar', 'symbol' => '$', 'balance' => 2850.00],
    'EUR' => ['name' => 'Euro', 'symbol' => '€', 'balance' => 1200.00],
    'GBP' => ['name' => 'British Pound', 'symbol' => '£', 'balance' => 1800.00],
];

include __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php include __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64">
        <?php include __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="mx-auto max-w-5xl px-4 py-6 pb-24 sm:px-6 lg:px-8 lg:pb-8">
            <a href="<?= BASE_URL ?>/investor/cash.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to cash account
            </a>

            <div class="mt-5">
                <p class="text-sm font-medium text-gray-500">Cash account</p>
                <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Fund your account</h1>
                <p class="mt-2 text-sm text-gray-500">Add cash to your sample account before exploring investment flows.</p>
            </div>

            <div class="mt-6 rounded-xl border border-amber-200 bg-amber-50 p-4">
                <div class="flex gap-3">
                    <i class="fa-solid fa-circle-info mt-0.5 text-amber-700"></i>
                    <div>
                        <p class="text-sm font-semibold text-amber-900">Demo funding flow</p>
                        <p class="mt-1 text-sm leading-6 text-amber-800">
                            This form is for the frontend prototype only. It is not connected to a bank or payment provider,
                            and submitting it will not transfer money or update your cash balance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-3">
                <section class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6 lg:col-span-2">
                    <form id="fundingForm" class="space-y-6">
                        <div>
                            <label for="fundingCurrency" class="mb-2 block text-sm font-semibold text-gray-700">Currency</label>
                            <select id="fundingCurrency" name="currency" required
                                    class="w-full rounded-lg border border-gray-300 bg-white px-3 py-3 text-sm text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                                <?php foreach ($currencies as $code => $currency): ?>
                                    <option value="<?= htmlspecialchars($code) ?>">
                                        <?= htmlspecialchars($code . ' — ' . $currency['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label for="fundingAmount" class="mb-2 block text-sm font-semibold text-gray-700">Amount to add</label>
                            <div class="relative">
                                <span id="currencySymbol" class="absolute left-3 top-1/2 -translate-y-1/2 text-sm font-medium text-gray-500">$</span>
                                <input id="fundingAmount" name="amount" type="number" min="1" step="0.01" inputmode="decimal"
                                       placeholder="0.00" required
                                       class="w-full rounded-lg border border-gray-300 py-3 pl-8 pr-3 text-lg font-semibold text-gray-900 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                            </div>
                            <p class="mt-2 text-xs text-gray-500">Enter an amount of at least 1.00 in the selected currency.</p>
                        </div>

                        <fieldset>
                            <legend class="mb-3 text-sm font-semibold text-gray-700">Choose a sample funding method</legend>
                            <div class="grid gap-3 sm:grid-cols-2">
                                <label class="funding-method flex cursor-pointer items-start gap-3 rounded-lg border border-gray-200 p-4 transition hover:border-emerald-300">
                                    <input type="radio" name="method" value="bank-transfer" checked class="mt-1 accent-emerald-600">
                                    <span>
                                        <span class="block text-sm font-semibold text-gray-900">Bank transfer</span>
                                        <span class="mt-1 block text-xs leading-5 text-gray-500">Illustrative bank transfer option</span>
                                    </span>
                                </label>

                                <label class="funding-method flex cursor-pointer items-start gap-3 rounded-lg border border-gray-200 p-4 transition hover:border-emerald-300">
                                    <input type="radio" name="method" value="card" class="mt-1 accent-emerald-600">
                                    <span>
                                        <span class="block text-sm font-semibold text-gray-900">Debit or credit card</span>
                                        <span class="mt-1 block text-xs leading-5 text-gray-500">Illustrative card payment option</span>
                                    </span>
                                </label>
                            </div>
                        </fieldset>

                        <div class="rounded-lg border border-gray-200 bg-gray-50 p-4">
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-sm text-gray-500">Amount to add</span>
                                <span id="summaryAmount" class="text-sm font-semibold text-gray-900">$0.00</span>
                            </div>
                            <div class="mt-3 flex items-center justify-between gap-4">
                                <span class="text-sm text-gray-500">Estimated fee</span>
                                <span class="text-sm font-medium text-gray-900">Not calculated in demo</span>
                            </div>
                            <div class="mt-3 border-t border-gray-200 pt-3">
                                <p class="text-xs leading-5 text-gray-500">
                                    Any real funding method, fees, limits, and processing time would depend on the supported provider and your location.
                                </p>
                            </div>
                        </div>

                        <label class="flex items-start gap-3">
                            <input id="fundingAcknowledgement" type="checkbox" required class="mt-1 rounded border-gray-300 accent-emerald-600">
                            <span class="text-sm leading-5 text-gray-600">
                                I understand this is a demonstration form and no money will be transferred.
                            </span>
                        </label>

                        <p id="fundingError" class="hidden rounded-lg bg-red-50 p-3 text-sm text-red-700"></p>

                        <button type="submit"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-[#0F9D78] px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#087A5D]">
                            Continue in demo
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </section>

                <aside class="space-y-4">
                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <h2 class="text-base font-semibold text-gray-900">Sample cash balances</h2>
                        <p class="mt-1 text-sm text-gray-500">Available balance by currency</p>

                        <div class="mt-5 space-y-4">
                            <?php foreach ($currencies as $code => $currency): ?>
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900"><?= htmlspecialchars($code) ?></p>
                                        <p class="mt-1 text-xs text-gray-500"><?= htmlspecialchars($currency['name']) ?></p>
                                    </div>
                                    <p class="text-sm font-semibold text-gray-900">
                                        <?= htmlspecialchars($currency['symbol']) . number_format($currency['balance'], 2) ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?= BASE_URL ?>/investor/cash.php"
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                            View cash account <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>

                    <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-shield-halved text-emerald-700"></i>
                            <h2 class="text-sm font-semibold text-gray-900">Before you fund</h2>
                        </div>
                        <ul class="mt-4 space-y-3 text-sm leading-5 text-gray-500">
                            <li class="flex gap-2"><i class="fa-solid fa-check mt-1 text-xs text-emerald-600"></i><span>Use an account in your own name when supported.</span></li>
                            <li class="flex gap-2"><i class="fa-solid fa-check mt-1 text-xs text-emerald-600"></i><span>Check supported currencies and funding limits.</span></li>
                            <li class="flex gap-2"><i class="fa-solid fa-check mt-1 text-xs text-emerald-600"></i><span>Review any provider fees and processing times.</span></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </main>
    </div>

    <?php include __DIR__ . '/../components/investor/bottom-nav.php'; ?>
</div>

<div id="fundingDemoModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-gray-900/50 p-4" role="dialog" aria-modal="true" aria-labelledby="fundingDemoTitle">
    <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-50 text-emerald-700">
            <i class="fa-solid fa-circle-check text-xl"></i>
        </div>
        <h2 id="fundingDemoTitle" class="mt-4 text-lg font-bold text-gray-900">Demo step complete</h2>
        <p id="fundingDemoMessage" class="mt-2 text-sm leading-6 text-gray-500">
            This prototype does not initiate a payment or change your balance.
        </p>
        <div class="mt-6 flex flex-col gap-3 sm:flex-row">
            <button id="closeFundingModal" type="button" class="inline-flex flex-1 justify-center rounded-lg bg-[#0F9D78] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#087A5D]">
                Back to form
            </button>
            <a href="<?= BASE_URL ?>/investor/cash.php" class="inline-flex flex-1 justify-center rounded-lg border border-gray-300 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                Cash account
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('fundingForm');
    const currencySelect = document.getElementById('fundingCurrency');
    const amountInput = document.getElementById('fundingAmount');
    const symbol = document.getElementById('currencySymbol');
    const summaryAmount = document.getElementById('summaryAmount');
    const error = document.getElementById('fundingError');
    const modal = document.getElementById('fundingDemoModal');
    const closeModal = document.getElementById('closeFundingModal');
    const modalMessage = document.getElementById('fundingDemoMessage');

    const currencySymbols = { USD: '$', EUR: '€', GBP: '£' };

    function updateSummary() {
        const currency = currencySelect.value;
        const amount = Number(amountInput.value);
        const formatted = Number.isFinite(amount) && amount > 0
            ? amount.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })
            : '0.00';

        symbol.textContent = currencySymbols[currency] || '';
        summaryAmount.textContent = `${currencySymbols[currency] || currency + ' '}${formatted}`;
    }

    currencySelect.addEventListener('change', updateSummary);
    amountInput.addEventListener('input', updateSummary);

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        error.classList.add('hidden');
        error.textContent = '';

        const amount = Number(amountInput.value);
        const acknowledged = document.getElementById('fundingAcknowledgement').checked;

        if (!Number.isFinite(amount) || amount < 1) {
            error.textContent = 'Enter an amount of at least 1.00.';
            error.classList.remove('hidden');
            amountInput.focus();
            return;
        }

        if (!acknowledged) {
            error.textContent = 'Please confirm that this is a demo and no money will be transferred.';
            error.classList.remove('hidden');
            return;
        }

        const currency = currencySelect.value;
        const method = form.querySelector('input[name="method"]:checked').value;
        const methodLabel = method === 'card' ? 'Debit or credit card' : 'Bank transfer';
        const formatted = amount.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });

        modalMessage.textContent = `You selected ${currencySymbols[currency] || ''}${formatted} via ${methodLabel}. This prototype does not initiate a payment or change your balance.`;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        closeModal.focus();
    });

    function hideModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    closeModal.addEventListener('click', hideModal);
    modal.addEventListener('click', (event) => {
        if (event.target === modal) hideModal();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) hideModal();
    });

    updateSummary();
});
</script>

<?php include __DIR__ . '/../components/shared/footer.php'; ?>

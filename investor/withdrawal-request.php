<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Request Withdrawal';
$bodyClass = 'bg-gray-50 text-gray-900';

$cashBalances = [
    'USD' => 2850.00,
    'EUR' => 1200.00,
    'GBP' => 1800.00,
];

$bankAccounts = [
    'USD' => [
        ['id' => 'bank-usd-1', 'label' => 'USD account · •••• 4821', 'bank' => 'Example Bank'],
        ['id' => 'bank-usd-2', 'label' => 'USD account · •••• 7740', 'bank' => 'Sample National Bank'],
    ],
    'EUR' => [
        ['id' => 'bank-eur-1', 'label' => 'EUR account · •••• 9134', 'bank' => 'Example Bank'],
    ],
    'GBP' => [
        ['id' => 'bank-gbp-1', 'label' => 'GBP account · •••• 2280', 'bank' => 'Sample International Bank'],
    ],
];

function withdrawalRequestMoney($amount, $currency) {
    $symbols = ['USD' => '$', 'EUR' => '€', 'GBP' => '£'];
    return ($symbols[$currency] ?? $currency . ' ') . number_format((float) $amount, 2);
}

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
include ROOT_PATH . '/components/investor/topbar.php';
?>

<main class="min-h-screen lg:pl-64">
    <div class="mx-auto max-w-5xl px-4 pb-24 pt-6 sm:px-6 lg:px-8 lg:pb-10">
        <div class="mb-6">
            <a href="<?= BASE_URL ?>/investor/withdrawals.php"
               class="inline-flex items-center gap-2 text-sm font-medium text-gray-500 transition hover:text-gray-900">
                <i class="fa-solid fa-arrow-left"></i>
                Back to withdrawals
            </a>
        </div>

        <div class="mb-7">
            <p class="text-sm font-medium text-gray-500">Cash account</p>
            <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Request a withdrawal</h1>
            <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">
                Choose a currency, enter an amount, and select a saved bank account. This demo form does not submit a real transfer.
            </p>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6 lg:col-span-2">
                <form id="withdrawalForm" novalidate>
                    <div class="mb-6">
                        <label for="currency" class="mb-2 block text-sm font-semibold text-gray-700">Cash account currency</label>
                        <select id="currency" name="currency"
                                class="w-full rounded-lg border border-gray-200 bg-white px-3.5 py-3 text-sm text-gray-900 outline-none focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10">
                            <?php foreach ($cashBalances as $currency => $balance): ?>
                                <option value="<?= htmlspecialchars($currency) ?>">
                                    <?= htmlspecialchars($currency) ?> — Available <?= withdrawalRequestMoney($balance, $currency) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="amount" class="mb-2 block text-sm font-semibold text-gray-700">Withdrawal amount</label>
                        <div class="relative">
                            <span id="currencySymbol" class="pointer-events-none absolute left-3.5 top-1/2 -translate-y-1/2 text-sm font-medium text-gray-500">$</span>
                            <input id="amount" name="amount" type="number" min="1" step="0.01" inputmode="decimal"
                                   placeholder="0.00"
                                   class="w-full rounded-lg border border-gray-200 py-3 pl-9 pr-4 text-sm text-gray-900 outline-none focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10">
                        </div>
                        <div class="mt-2 flex flex-wrap items-center justify-between gap-2">
                            <p class="text-xs text-gray-500">Available: <span id="availableBalance" class="font-semibold text-gray-700">$2,850.00</span></p>
                            <button type="button" id="useMaxAmount" class="text-xs font-semibold text-[#087A5D] hover:underline">Use maximum</button>
                        </div>
                        <p id="amountError" class="mt-2 hidden text-xs font-medium text-red-600"></p>
                    </div>

                    <div class="mb-6">
                        <label for="bankAccount" class="mb-2 block text-sm font-semibold text-gray-700">Destination bank account</label>
                        <select id="bankAccount" name="bankAccount"
                                class="w-full rounded-lg border border-gray-200 bg-white px-3.5 py-3 text-sm text-gray-900 outline-none focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10">
                        </select>
                        <p class="mt-2 text-xs text-gray-500">Only saved sample accounts are available in this prototype.</p>
                    </div>

                    <div class="mb-6">
                        <label for="note" class="mb-2 block text-sm font-semibold text-gray-700">Optional note</label>
                        <textarea id="note" name="note" rows="3" maxlength="250"
                                  placeholder="Add a note for this sample request (optional)"
                                  class="w-full resize-y rounded-lg border border-gray-200 px-3.5 py-3 text-sm text-gray-900 outline-none placeholder:text-gray-400 focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10"></textarea>
                    </div>

                    <label class="flex items-start gap-3 rounded-xl border border-gray-200 p-4">
                        <input id="acknowledgement" type="checkbox"
                               class="mt-0.5 h-4 w-4 rounded border-gray-300 text-[#0F9D78] focus:ring-[#0F9D78]">
                        <span class="text-sm leading-5 text-gray-600">
                            I understand this is a sample request only, and that an actual withdrawal may require review, processing time, and applicable fees.
                        </span>
                    </label>
                    <p id="acknowledgementError" class="mt-2 hidden text-xs font-medium text-red-600">
                        Please confirm the sample request acknowledgement to continue.
                    </p>

                    <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                        <a href="<?= BASE_URL ?>/investor/withdrawals.php"
                           class="inline-flex items-center justify-center rounded-lg border border-gray-200 px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                            Cancel
                        </a>
                        <button type="submit"
                                class="inline-flex items-center justify-center gap-2 rounded-lg bg-[#0B1F33] px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-[#163A59]">
                            Review sample request
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </button>
                    </div>
                </form>
            </section>

            <aside class="space-y-5">
                <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                    <h2 class="text-base font-semibold text-gray-900">Request summary</h2>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center justify-between gap-3">
                            <span class="text-sm text-gray-500">Withdrawal amount</span>
                            <span id="summaryAmount" class="text-sm font-semibold text-gray-900">$0.00</span>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <span class="text-sm text-gray-500">Illustrative fee</span>
                            <span id="summaryFee" class="text-sm font-semibold text-gray-900">$0.00</span>
                        </div>
                        <div class="border-t border-gray-100 pt-4">
                            <div class="flex items-center justify-between gap-3">
                                <span class="text-sm font-semibold text-gray-700">Estimated total debit</span>
                                <span id="summaryTotal" class="text-base font-bold text-gray-900">$0.00</span>
                            </div>
                            <p class="mt-2 text-xs leading-5 text-gray-400">The fee shown is a placeholder for this prototype, not a live fee quote.</p>
                        </div>
                    </div>
                </section>

                <section class="rounded-2xl border border-blue-100 bg-blue-50 p-5">
                    <div class="flex gap-3">
                        <i class="fa-solid fa-circle-info mt-0.5 text-blue-600"></i>
                        <div>
                            <h2 class="text-sm font-semibold text-blue-900">Before you withdraw</h2>
                            <p class="mt-2 text-sm leading-5 text-blue-800">
                                Only settled cash can be withdrawn. Redemption proceeds must first settle into your cash account.
                            </p>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
    </div>
</main>

<div id="withdrawalModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-gray-950/50 p-4" role="dialog" aria-modal="true" aria-labelledby="withdrawalModalTitle">
    <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
            <i class="fa-solid fa-check text-xl"></i>
        </div>
        <h2 id="withdrawalModalTitle" class="mt-4 text-lg font-bold text-gray-900">Sample request reviewed</h2>
        <p class="mt-2 text-sm leading-6 text-gray-600">
            Your entries passed the demo form checks. No withdrawal request was submitted, no funds were reserved, and no money was transferred.
        </p>
        <div class="mt-5 rounded-xl bg-gray-50 p-4">
            <div class="flex items-center justify-between gap-3">
                <span class="text-sm text-gray-500">Sample amount</span>
                <span id="modalAmount" class="text-sm font-semibold text-gray-900">$0.00</span>
            </div>
            <div class="mt-2 flex items-center justify-between gap-3">
                <span class="text-sm text-gray-500">Destination</span>
                <span id="modalDestination" class="text-sm font-semibold text-gray-900">—</span>
            </div>
        </div>
        <button type="button" id="closeWithdrawalModal"
                class="mt-5 w-full rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#163A59]">
            Close
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const balances = {
        USD: 2850,
        EUR: 1200,
        GBP: 1800
    };

    const symbols = {
        USD: '$',
        EUR: '€',
        GBP: '£'
    };

    const accounts = {
        USD: [
            { value: 'bank-usd-1', label: 'USD account · •••• 4821' },
            { value: 'bank-usd-2', label: 'USD account · •••• 7740' }
        ],
        EUR: [
            { value: 'bank-eur-1', label: 'EUR account · •••• 9134' }
        ],
        GBP: [
            { value: 'bank-gbp-1', label: 'GBP account · •••• 2280' }
        ]
    };

    const currency = document.getElementById('currency');
    const amount = document.getElementById('amount');
    const bankAccount = document.getElementById('bankAccount');
    const acknowledgement = document.getElementById('acknowledgement');
    const amountError = document.getElementById('amountError');
    const acknowledgementError = document.getElementById('acknowledgementError');
    const modal = document.getElementById('withdrawalModal');

    function money(value, code) {
        return (symbols[code] || code + ' ') + Number(value).toLocaleString('en-US', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function updateAccounts() {
        const code = currency.value;
        bankAccount.innerHTML = '';

        (accounts[code] || []).forEach(function (account) {
            const option = document.createElement('option');
            option.value = account.value;
            option.textContent = account.label;
            bankAccount.appendChild(option);
        });
    }

    function updateSummary() {
        const code = currency.value;
        const entered = Number(amount.value);
        const validAmount = Number.isFinite(entered) && entered > 0 ? entered : 0;
        const fee = validAmount > 0 ? 0 : 0;

        document.getElementById('currencySymbol').textContent = symbols[code];
        document.getElementById('availableBalance').textContent = money(balances[code], code);
        document.getElementById('summaryAmount').textContent = money(validAmount, code);
        document.getElementById('summaryFee').textContent = money(fee, code);
        document.getElementById('summaryTotal').textContent = money(validAmount + fee, code);
    }

    function setAmountError(message) {
        amountError.textContent = message;
        amountError.classList.toggle('hidden', !message);
    }

    currency.addEventListener('change', function () {
        updateAccounts();
        updateSummary();
        setAmountError('');
    });

    amount.addEventListener('input', function () {
        updateSummary();
        setAmountError('');
    });

    document.getElementById('useMaxAmount').addEventListener('click', function () {
        amount.value = balances[currency.value].toFixed(2);
        updateSummary();
        setAmountError('');
    });

    document.getElementById('withdrawalForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const code = currency.value;
        const entered = Number(amount.value);
        let valid = true;

        if (!Number.isFinite(entered) || entered < 1) {
            setAmountError('Enter a withdrawal amount of at least ' + money(1, code) + '.');
            valid = false;
        } else if (entered > balances[code]) {
            setAmountError('The amount exceeds the illustrative available balance of ' + money(balances[code], code) + '.');
            valid = false;
        } else {
            setAmountError('');
        }

        acknowledgementError.classList.toggle('hidden', acknowledgement.checked);
        if (!acknowledgement.checked) valid = false;

        if (!valid) return;

        document.getElementById('modalAmount').textContent = money(entered, code);
        document.getElementById('modalDestination').textContent =
            bankAccount.options[bankAccount.selectedIndex]?.textContent || '—';

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    document.getElementById('closeWithdrawalModal').addEventListener('click', function () {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    updateAccounts();
    updateSummary();
});
</script>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
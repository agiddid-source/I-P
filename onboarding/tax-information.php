
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Tax Information | InvestGlobal';

include ROOT_PATH . '/components/shared/head.php';
?>

<div class="min-h-screen bg-canvas">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8 sm:py-12">

        <!-- Brand -->
        <a href="<?= BASE_URL ?>/public/index.php"
           class="inline-flex items-center gap-2 mb-10">
            <span class="w-10 h-10 rounded-xl bg-brand text-white flex items-center justify-center">
                <i class="fa-solid fa-chart-line"></i>
            </span>
            <span class="text-xl font-bold text-brand">InvestGlobal</span>
        </a>

        <!-- Progress -->
        <div class="mb-8">
            <div class="flex items-center justify-between text-sm mb-3">
                <span class="font-semibold text-brand">Investor onboarding</span>
                <span class="text-muted">Step 5 of 7</span>
            </div>

            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full w-[71.43%] bg-accent rounded-full"></div>
            </div>

            <div class="flex justify-between mt-2 text-xs text-muted">
                <span>Address verification</span>
                <span>Tax information</span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white border border-border rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 sm:p-8 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-accent-light text-accent-dark flex items-center justify-center text-xl mb-5">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-brand mb-2">
                    Tax information
                </h1>

                <p class="text-muted leading-relaxed">
                    Tell us about your tax residency so we can determine the
                    appropriate tax documentation and reporting requirements
                    for your account.
                </p>
            </div>

            <form id="taxForm" class="p-6 sm:p-8 space-y-7">

                <!-- Tax Residency -->
                <section>
                    <h2 class="font-semibold text-brand mb-1">
                        Tax residency
                    </h2>

                    <p class="text-sm text-muted mb-5">
                        Select the country or countries where you are considered
                        a tax resident.
                    </p>

                    <div class="space-y-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Primary country of tax residence
                            </label>

                            <select id="taxCountry" required
                                    class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
                                <option value="">Select tax residence</option>
                                <option value="NG">Nigeria</option>
                                <option value="US">United States</option>
                                <option value="GB">United Kingdom</option>
                                <option value="CA">Canada</option>
                                <option value="GH">Ghana</option>
                                <option value="ZA">South Africa</option>
                                <option value="KE">Kenya</option>
                                <option value="IN">India</option>
                                <option value="OTHER">Other country</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Tax identification number (TIN)
                            </label>

                            <input type="text" id="tin"
                                   placeholder="Enter your tax identification number"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">

                            <p class="text-xs text-muted mt-2">
                                If your country does not issue a TIN, or you are
                                not required to obtain one, select the appropriate
                                declaration below.
                            </p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Tax identification number status
                            </label>

                            <select id="tinStatus" required
                                    class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
                                <option value="">Select status</option>
                                <option value="available">I have a TIN</option>
                                <option value="not-issued">My country does not issue a TIN</option>
                                <option value="not-required">I am not required to obtain a TIN</option>
                                <option value="pending">I have applied and it is pending</option>
                            </select>
                        </div>

                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- Additional Tax Residency -->
                <section>
                    <h2 class="font-semibold text-brand mb-2">
                        Additional tax residency
                    </h2>

                    <p class="text-sm text-muted mb-4">
                        Are you also a tax resident in another country?
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3">

                        <label class="flex-1 border border-border rounded-xl p-4 cursor-pointer hover:border-accent transition">
                            <input type="radio" name="additionalTax"
                                   value="no" checked class="accent-emerald-600 mr-2">
                            <span class="font-medium text-sm text-brand">No</span>
                        </label>

                        <label class="flex-1 border border-border rounded-xl p-4 cursor-pointer hover:border-accent transition">
                            <input type="radio" name="additionalTax"
                                   value="yes" class="accent-emerald-600 mr-2">
                            <span class="font-medium text-sm text-brand">Yes</span>
                        </label>

                    </div>

                    <div id="additionalTaxFields" class="hidden mt-5 space-y-4">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Additional country of tax residence
                            </label>

                            <select id="additionalCountry"
                                    class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
                                <option value="">Select another country</option>
                                <option value="NG">Nigeria</option>
                                <option value="US">United States</option>
                                <option value="GB">United Kingdom</option>
                                <option value="CA">Canada</option>
                                <option value="GH">Ghana</option>
                                <option value="ZA">South Africa</option>
                                <option value="KE">Kenya</option>
                                <option value="IN">India</option>
                                <option value="OTHER">Other country</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Additional country's TIN
                            </label>

                            <input type="text" id="additionalTin"
                                   placeholder="Enter TIN if applicable"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- US Tax Declaration -->
                <section>
                    <h2 class="font-semibold text-brand mb-2">
                        United States tax status
                    </h2>

                    <p class="text-sm text-muted mb-4">
                        Certain US tax documentation and reporting requirements
                        may apply to US persons.
                    </p>

                    <div class="space-y-3">

                        <label class="flex items-start gap-3 p-4 border border-border rounded-xl cursor-pointer">
                            <input type="radio" name="usTaxStatus"
                                   value="yes" required class="mt-1 accent-emerald-600">
                            <span>
                                <span class="block text-sm font-medium text-brand">
                                    I am a US citizen or otherwise a US tax person.
                                </span>
                                <span class="block text-xs text-muted mt-1">
                                    This may include certain US tax residents.
                                </span>
                            </span>
                        </label>

                        <label class="flex items-start gap-3 p-4 border border-border rounded-xl cursor-pointer">
                            <input type="radio" name="usTaxStatus"
                                   value="no" required class="mt-1 accent-emerald-600">
                            <span>
                                <span class="block text-sm font-medium text-brand">
                                    I am not a US tax person.
                                </span>
                            </span>
                        </label>

                    </div>
                </section>

                <!-- Declaration -->
                <div class="border-t border-border"></div>

                <section>
                    <h2 class="font-semibold text-brand mb-4">
                        Declaration
                    </h2>

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" id="taxDeclaration" required
                               class="mt-1 w-4 h-4 accent-emerald-600">

                        <span class="text-sm text-gray-600 leading-relaxed">
                            I confirm that the tax residency information provided
                            is accurate and complete to the best of my knowledge.
                            I agree to notify the platform if my tax residency
                            circumstances change.
                        </span>
                    </label>
                </section>

                <!-- Notice -->
                <div class="flex gap-3 p-4 rounded-xl bg-blue-50 border border-blue-100">
                    <i class="fa-solid fa-circle-info text-blue-600 mt-1"></i>

                    <div>
                        <p class="text-sm font-semibold text-blue-900 mb-1">
                            Important tax notice
                        </p>

                        <p class="text-xs text-blue-800 leading-relaxed">
                            Tax rules and reporting obligations vary by country.
                            This is a demonstration form, not tax advice or a
                            substitute for jurisdiction-specific tax documentation.
                        </p>
                    </div>
                </div>

                <!-- Error -->
                <div id="formError"
                     class="hidden text-sm text-red-600 bg-red-50 border border-red-100 rounded-lg p-3">
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-4 pt-5 border-t border-border">

                    <a href="<?= BASE_URL ?>/onboarding/address-verification.php"
                       class="text-sm font-medium text-muted hover:text-brand">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Back
                    </a>

                    <button type="submit"
                            class="w-full sm:w-auto px-7 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-dark transition">
                        Continue
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                </div>

            </form>
        </div>

        <p class="text-center text-xs text-muted mt-6">
            <i class="fa-solid fa-lock mr-1"></i>
            Secure onboarding experience
        </p>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('taxForm');
    const taxCountry = document.getElementById('taxCountry');
    const tin = document.getElementById('tin');
    const tinStatus = document.getElementById('tinStatus');
    const additionalFields = document.getElementById('additionalTaxFields');
    const additionalCountry = document.getElementById('additionalCountry');
    const additionalTin = document.getElementById('additionalTin');
    const errorBox = document.getElementById('formError');

    // Additional tax residency visibility
    document.querySelectorAll('input[name="additionalTax"]').forEach(radio => {
        radio.addEventListener('change', () => {

            const showFields = document.querySelector(
                'input[name="additionalTax"]:checked'
            ).value === 'yes';

            additionalFields.classList.toggle('hidden', !showFields);

            additionalCountry.required = showFields;

            if (!showFields) {
                additionalCountry.value = '';
                additionalTin.value = '';
            }
        });
    });

    // TIN status interaction
    tinStatus.addEventListener('change', () => {
        tin.required = tinStatus.value === 'available';

        if (tinStatus.value !== 'available') {
            tin.value = '';
        }
    });

    function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        errorBox.classList.add('hidden');

        if (!taxCountry.value) {
            taxCountry.focus();
            showError('Please select your primary country of tax residence.');
            return;
        }

        if (!tinStatus.value) {
            tinStatus.focus();
            showError('Please select your TIN status.');
            return;
        }

        if (tinStatus.value === 'available' && !tin.value.trim()) {
            tin.focus();
            showError('Please enter your tax identification number.');
            return;
        }

        const hasAdditionalTax = document.querySelector(
            'input[name="additionalTax"]:checked'
        ).value === 'yes';

        if (hasAdditionalTax && !additionalCountry.value) {
            additionalCountry.focus();
            showError('Please select your additional tax residence.');
            return;
        }

        if (hasAdditionalTax && additionalCountry.value === taxCountry.value) {
            additionalCountry.focus();
            showError('Your additional tax country must be different from your primary tax country.');
            return;
        }

        if (!document.querySelector('input[name="usTaxStatus"]:checked')) {
            showError('Please complete your US tax status declaration.');
            return;
        }

        if (!document.getElementById('taxDeclaration').checked) {
            showError('Please confirm your tax declaration before continuing.');
            return;
        }

        // Prototype navigation only. No tax information is stored.
        window.location.href = '<?= BASE_URL ?>/onboarding/investor-questionnaire.php';
    });

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

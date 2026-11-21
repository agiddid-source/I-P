
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Address Verification | InvestGlobal';

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
                <span class="text-muted">Step 4 of 7</span>
            </div>

            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full w-[57.14%] bg-accent rounded-full"></div>
            </div>

            <div class="flex justify-between mt-2 text-xs text-muted">
                <span>Identity verification</span>
                <span>Address verification</span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white border border-border rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 sm:p-8 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-accent-light text-accent-dark flex items-center justify-center text-xl mb-5">
                    <i class="fa-solid fa-house-user"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-brand mb-2">
                    Verify your residential address
                </h1>

                <p class="text-muted leading-relaxed">
                    Tell us where you currently reside and provide a supporting
                    document where required. Requirements may vary by country.
                </p>
            </div>

            <form id="addressForm" class="p-6 sm:p-8 space-y-7">

                <!-- Address Details -->
                <section>
                    <h2 class="font-semibold text-brand mb-4">
                        Residential address
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        <div class="sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Street address
                            </label>
                            <input type="text" id="streetAddress" required
                                   placeholder="House number and street name"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div class="sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Apartment, suite or unit
                                <span class="text-muted font-normal">(optional)</span>
                            </label>
                            <input type="text" id="addressLine2"
                                   placeholder="Apartment, suite, unit, etc."
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                City / Town
                            </label>
                            <input type="text" id="city" required
                                   placeholder="Enter city"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                State / Province / Region
                            </label>
                            <input type="text" id="region" required
                                   placeholder="Enter state or region"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Postal / ZIP code
                                <span class="text-muted font-normal">(if applicable)</span>
                            </label>
                            <input type="text" id="postalCode"
                                   placeholder="Enter postal code"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Country of residence
                            </label>
                            <select id="country" required
                                    class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
                                <option value="">Select country</option>
                                <option value="NG">Nigeria</option>
                                <option value="US">United States</option>
                                <option value="GB">United Kingdom</option>
                                <option value="CA">Canada</option>
                                <option value="GH">Ghana</option>
                                <option value="ZA">South Africa</option>
                                <option value="KE">Kenya</option>
                                <option value="IN">India</option>
                                <option value="OTHER">Other</option>
                            </select>
                        </div>

                    </div>
                </section>

                <!-- Proof of Address -->
                <section>
                    <div class="mb-4">
                        <h2 class="font-semibold text-brand mb-1">
                            Proof of address
                        </h2>
                        <p class="text-sm text-muted leading-relaxed">
                            If required for your country or account type, provide
                            a recent document showing your residential address.
                            Examples may include a utility bill, bank statement
                            or official government correspondence.
                        </p>
                    </div>

                    <div class="border-2 border-dashed border-border rounded-xl bg-gray-50 p-6 sm:p-8 text-center hover:border-accent transition">

                        <div class="w-12 h-12 rounded-full bg-accent-light text-accent-dark flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-file-arrow-up text-xl"></i>
                        </div>

                        <label for="proofDocument"
                               class="font-semibold text-brand cursor-pointer hover:text-accent">
                            Choose a document to upload
                        </label>

                        <p class="text-xs text-muted mt-2">
                            PDF, JPG or PNG · Maximum 5MB
                        </p>

                        <input type="file" id="proofDocument"
                               accept=".pdf,image/jpeg,image/png"
                               class="hidden">

                        <div id="fileDetails" class="hidden mt-5 p-3 bg-white border border-border rounded-lg text-left">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-file-lines text-xl text-accent"></i>
                                <div class="flex-1 min-w-0">
                                    <p id="fileName" class="text-sm font-medium text-brand truncate"></p>
                                    <p id="fileSize" class="text-xs text-muted"></p>
                                </div>
                                <button type="button" id="removeFile"
                                        class="text-red-500 hover:text-red-700">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Notice -->
               <!-- <div class="flex gap-3 p-4 rounded-xl bg-blue-50 border border-blue-100">
                    <i class="fa-solid fa-circle-info text-blue-600 mt-1"></i>
                    <div>
                        <p class="text-sm font-semibold text-blue-900 mb-1">
                            Document requirements
                        </p>
                        <p class="text-xs text-blue-800 leading-relaxed">
                            Accepted proof-of-address documents and recency limits
                            depend on the applicable jurisdiction. This prototype
                            does not transmit or store your address or uploaded file.
                        </p>
                    </div>
                </div> -->

                <!-- Error -->
                <div id="formError"
                     class="hidden text-sm text-red-600 bg-red-50 border border-red-100 rounded-lg p-3">
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-4 pt-5 border-t border-border">

                    <a href="<?= BASE_URL ?>/onboarding/identity-verification.php"
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

    const form = document.getElementById('addressForm');
    const fileInput = document.getElementById('proofDocument');
    const fileDetails = document.getElementById('fileDetails');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const errorBox = document.getElementById('formError');

    function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
    }

    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0];

        if (!file) return;

        const allowedTypes = [
            'application/pdf',
            'image/jpeg',
            'image/png'
        ];

        if (!allowedTypes.includes(file.type)) {
            fileInput.value = '';
            fileDetails.classList.add('hidden');
            showError('Please select a PDF, JPG or PNG document.');
            return;
        }

        if (file.size > 5 * 1024 * 1024) {
            fileInput.value = '';
            fileDetails.classList.add('hidden');
            showError('Your document must be 5MB or smaller.');
            return;
        }

        fileName.textContent = file.name;
        fileSize.textContent = (file.size / (1024 * 1024)).toFixed(2) + ' MB';

        fileDetails.classList.remove('hidden');
        errorBox.classList.add('hidden');
    });

    document.getElementById('removeFile').addEventListener('click', () => {
        fileInput.value = '';
        fileDetails.classList.add('hidden');
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        errorBox.classList.add('hidden');

        const requiredFields = [
            document.getElementById('streetAddress'),
            document.getElementById('city'),
            document.getElementById('region'),
            document.getElementById('country')
        ];

        for (const field of requiredFields) {
            if (!field.value.trim()) {
                field.focus();
                showError('Please complete all required address fields.');
                return;
            }
        }

        // Proof of address is optional in this prototype.
        // Actual requirements must be determined by jurisdiction.
        window.location.href = '<?= BASE_URL ?>/onboarding/tax-information.php';
    });

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

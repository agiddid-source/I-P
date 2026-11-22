<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Identity Verification | InvestGlobal';

include ROOT_PATH . '/components/shared/head.php';
?>

<div class="min-h-screen bg-canvas">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8 sm:py-12">

        <!-- Brand -->
        <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center mb-10">
            <?php
            $logoVariant = 'default';
            $logoClass   = 'h-11 w-auto';
            include ROOT_PATH . '/components/shared/logo.php';
            ?>
        </a>

        <!-- Progress -->
        <div class="mb-8">
            <div class="flex items-center justify-between text-sm mb-3">
                <span class="font-semibold text-brand">Investor onboarding</span>
                <span class="text-muted">Step 3 of 7</span>
            </div>

            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full w-[42.86%] bg-accent rounded-full"></div>
            </div>

            <div class="flex justify-between mt-2 text-xs text-muted">
                <span>Personal details</span>
                <span>Identity verification</span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white border border-border rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 sm:p-8 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-accent-light text-accent-dark flex items-center justify-center text-xl mb-5">
                    <i class="fa-solid fa-id-card"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-brand mb-2">
                    Verify your identity
                </h1>

                <p class="text-muted leading-relaxed">
                    Provide a valid identification document so your identity can
                    be reviewed. Accepted documents depend on your country of residence.
                </p>
            </div>

            <form id="identityForm" class="p-6 sm:p-8 space-y-7">

                <!-- ID Details -->
                <section>
                    <h2 class="font-semibold text-brand mb-4">
                        Identification details
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Identification type
                            </label>

                            <select id="idType" required class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
                                <option value="">Select ID type</option>
                                <option value="passport">International passport</option>
                                <option value="national-id">National identity card</option>
                                <option value="drivers-license">Driver's licence</option>
                                <option value="residence-permit">Residence permit</option>
                                <option value="other">Other accepted document</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Issuing country
                            </label>

                            <select id="issuingCountry" required class="w-full rounded-lg border border-border px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-accent">
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

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ID number
                            </label>

                            <input type="text" id="idNumber" required
                                   placeholder="Enter your identification number"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Expiry date <span class="text-muted font-normal">(if applicable)</span>
                            </label>

                            <input type="date" id="expiryDate"
                                   class="w-full rounded-lg border border-border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent">
                        </div>

                    </div>
                </section>

                <!-- Document Upload -->
                <section>
                    <div class="mb-4">
                        <h2 class="font-semibold text-brand mb-1">
                            Upload your identification document
                        </h2>
                        <p class="text-sm text-muted">
                            Upload clear, readable images. Required sides depend on the document type.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        <!-- Front -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Front of document
                            </label>

                            <label for="frontImage"
                                   class="flex flex-col items-center justify-center min-h-48 border-2 border-dashed border-border rounded-xl bg-gray-50 hover:bg-accent-light/30 hover:border-accent cursor-pointer transition p-6 text-center">

                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-muted mb-3"></i>

                                <span class="font-medium text-brand text-sm">
                                    Click to upload front image
                                </span>

                                <span class="text-xs text-muted mt-2">
                                    JPG, PNG or WEBP
                                </span>

                                <input type="file" id="frontImage"
                                       accept="image/jpeg,image/png,image/webp"
                                       class="hidden" required>
                            </label>

                            <div id="frontPreview" class="hidden mt-3">
                                <img id="frontPreviewImage"
                                     class="w-full h-40 object-contain rounded-lg border border-border bg-gray-50"
                                     alt="Front document preview">

                                <button type="button" id="removeFront"
                                        class="text-sm text-red-600 mt-2">
                                    <i class="fa-solid fa-trash mr-1"></i>
                                    Remove image
                                </button>
                            </div>
                        </div>

                        <!-- Back -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Back of document
                                <span class="text-muted font-normal">(if required)</span>
                            </label>

                            <label for="backImage"
                                   class="flex flex-col items-center justify-center min-h-48 border-2 border-dashed border-border rounded-xl bg-gray-50 hover:bg-accent-light/30 hover:border-accent cursor-pointer transition p-6 text-center">

                                <i class="fa-solid fa-cloud-arrow-up text-3xl text-muted mb-3"></i>

                                <span class="font-medium text-brand text-sm">
                                    Click to upload back image
                                </span>

                                <span class="text-xs text-muted mt-2">
                                    JPG, PNG or WEBP
                                </span>

                                <input type="file" id="backImage"
                                       accept="image/jpeg,image/png,image/webp"
                                       class="hidden">
                            </label>

                            <div id="backPreview" class="hidden mt-3">
                                <img id="backPreviewImage"
                                     class="w-full h-40 object-contain rounded-lg border border-border bg-gray-50"
                                     alt="Back document preview">

                                <button type="button" id="removeBack"
                                        class="text-sm text-red-600 mt-2">
                                    <i class="fa-solid fa-trash mr-1"></i>
                                    Remove image
                                </button>
                            </div>
                        </div>

                    </div>
                </section>


                <!-- Error -->
                <div id="formError"
                     class="hidden text-sm text-red-600 bg-red-50 border border-red-100 rounded-lg p-3">
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-4 pt-5 border-t border-border">

                    <a href="<?= BASE_URL ?>/onboarding/personal-information.php"
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

    const form = document.getElementById('identityForm');
    const idType = document.getElementById('idType');
    const frontInput = document.getElementById('frontImage');
    const backInput = document.getElementById('backImage');
    const errorBox = document.getElementById('formError');

    function setupPreview(input, preview, image, removeButton) {
        const previewBox = document.getElementById(preview);
        const previewImage = document.getElementById(image);
        const remove = document.getElementById(removeButton);

        input.addEventListener('change', () => {
            const file = input.files[0];

            if (!file) return;

            if (!file.type.startsWith('image/')) {
                input.value = '';
                showError('Please select a valid image file.');
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                input.value = '';
                showError('Each image must be 5MB or smaller.');
                return;
            }

            previewImage.src = URL.createObjectURL(file);
            previewBox.classList.remove('hidden');
            errorBox.classList.add('hidden');
        });

        remove.addEventListener('click', () => {
            input.value = '';
            previewImage.src = '';
            previewBox.classList.add('hidden');
        });
    }

    function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
    }

    setupPreview(
        frontInput,
        'frontPreview',
        'frontPreviewImage',
        'removeFront'
    );

    setupPreview(
        backInput,
        'backPreview',
        'backPreviewImage',
        'removeBack'
    );

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        errorBox.classList.add('hidden');

        const requiredFields = [
            document.getElementById('idType'),
            document.getElementById('issuingCountry'),
            document.getElementById('idNumber')
        ];

        for (const field of requiredFields) {
            if (!field.value.trim()) {
                field.focus();
                showError('Please complete all required identification details.');
                return;
            }
        }

        if (!frontInput.files.length) {
            showError('Please upload the front of your identification document.');
            return;
        }

        // Back image is required for most cards, but not necessarily passports.
        if (
            idType.value !== 'passport' &&
            !backInput.files.length
        ) {
            showError('Please upload the back of your identification document.');
            return;
        }

        // Prototype navigation only. No identity data or files are stored.
        window.location.href = '<?= BASE_URL ?>/onboarding/address-verification.php';
    });

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
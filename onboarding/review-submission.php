
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Review & Submission | InvestGlobal';

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
                <span class="text-muted">Step 7 of 7</span>
            </div>

            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full w-full bg-accent rounded-full"></div>
            </div>

            <div class="flex justify-between mt-2 text-xs text-muted">
                <span>Investor questionnaire</span>
                <span>Final review</span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white border border-border rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 sm:p-8 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-accent-light text-accent-dark flex items-center justify-center text-xl mb-5">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-brand mb-2">
                    Review your application
                </h1>

                <p class="text-muted leading-relaxed">
                    You're almost there. Review the information you provided
                    and confirm your declarations before submitting your
                    investor onboarding application.
                </p>
            </div>

            <div class="p-6 sm:p-8 space-y-7">

                <!-- Completion Summary -->
                <div class="bg-accent-light/50 border border-green-100 rounded-xl p-5">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-white text-accent flex items-center justify-center">
                            <i class="fa-solid fa-check-double"></i>
                        </div>

                        <div>
                            <p class="font-semibold text-brand">
                                Onboarding steps completed
                            </p>
                            <p class="text-sm text-muted">
                                All seven sections are ready for your review.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Review Sections -->
                <section>
                    <h2 class="font-semibold text-brand mb-4">
                        Application summary
                    </h2>

                    <div class="space-y-3">

                        <!-- Personal Information -->
                        <div class="border border-border rounded-xl p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-brand flex items-center justify-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm text-brand">Personal information</p>
                                        <p class="text-xs text-muted">Basic identity and contact details</p>
                                    </div>
                                </div>

                                <a href="<?= BASE_URL ?>/onboarding/personal-information.php"
                                   class="text-sm font-medium text-accent hover:text-accent-dark">
                                    Edit <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 mt-3 text-xs text-green-700">
                                <i class="fa-solid fa-circle-check"></i>
                                Section completed
                            </div>
                        </div>

                        <!-- Identity -->
                        <div class="border border-border rounded-xl p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-brand flex items-center justify-center">
                                        <i class="fa-solid fa-id-card"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm text-brand">Identity verification</p>
                                        <p class="text-xs text-muted">Identification details and document</p>
                                    </div>
                                </div>

                                <a href="<?= BASE_URL ?>/onboarding/identity-verification.php"
                                   class="text-sm font-medium text-accent hover:text-accent-dark">
                                    Edit <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 mt-3 text-xs text-green-700">
                                <i class="fa-solid fa-circle-check"></i>
                                Section completed
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="border border-border rounded-xl p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-brand flex items-center justify-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm text-brand">Address verification</p>
                                        <p class="text-xs text-muted">Residential address and supporting document</p>
                                    </div>
                                </div>

                                <a href="<?= BASE_URL ?>/onboarding/address-verification.php"
                                   class="text-sm font-medium text-accent hover:text-accent-dark">
                                    Edit <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 mt-3 text-xs text-green-700">
                                <i class="fa-solid fa-circle-check"></i>
                                Section completed
                            </div>
                        </div>

                        <!-- Tax -->
                        <div class="border border-border rounded-xl p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-brand flex items-center justify-center">
                                        <i class="fa-solid fa-file-invoice-dollar"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm text-brand">Tax information</p>
                                        <p class="text-xs text-muted">Tax residence and declarations</p>
                                    </div>
                                </div>

                                <a href="<?= BASE_URL ?>/onboarding/tax-information.php"
                                   class="text-sm font-medium text-accent hover:text-accent-dark">
                                    Edit <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 mt-3 text-xs text-green-700">
                                <i class="fa-solid fa-circle-check"></i>
                                Section completed
                            </div>
                        </div>

                        <!-- Questionnaire -->
                        <div class="border border-border rounded-xl p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-brand flex items-center justify-center">
                                        <i class="fa-solid fa-chart-pie"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-sm text-brand">Investor questionnaire</p>
                                        <p class="text-xs text-muted">Investment objectives and risk profile</p>
                                    </div>
                                </div>

                                <a href="<?= BASE_URL ?>/onboarding/investor-questionnaire.php"
                                   class="text-sm font-medium text-accent hover:text-accent-dark">
                                    Edit <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                                </a>
                            </div>
                            <div class="flex items-center gap-2 mt-3 text-xs text-green-700">
                                <i class="fa-solid fa-circle-check"></i>
                                Section completed
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Important Notice -->
                <div class="flex gap-3 p-4 rounded-xl bg-amber-50 border border-amber-100">
                    <i class="fa-solid fa-triangle-exclamation text-amber-600 mt-1"></i>
                    <div>
                        <p class="text-sm font-semibold text-amber-900 mb-1">
                            Submission does not mean automatic approval
                        </p>
                        <p class="text-xs text-amber-800 leading-relaxed">
                            Your application may require document checks,
                            compliance screening and manual review. Access to
                            investment products remains subject to eligibility
                            and approval requirements.
                        </p>
                    </div>
                </div>

                <!-- Declarations -->
                <section class="space-y-4">
                    <h2 class="font-semibold text-brand">
                        Final declarations
                    </h2>

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" id="accuracyDeclaration"
                               class="mt-1 w-4 h-4 accent-emerald-600">

                        <span class="text-sm text-gray-600 leading-relaxed">
                            I confirm that the information and documents I have
                            provided are accurate and complete to the best of
                            my knowledge.
                        </span>
                    </label>

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" id="riskDeclaration"
                               class="mt-1 w-4 h-4 accent-emerald-600">

                        <span class="text-sm text-gray-600 leading-relaxed">
                            I understand that investing involves risk, including
                            the possible loss of some or all of my invested capital.
                        </span>
                    </label>

                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" id="termsDeclaration"
                               class="mt-1 w-4 h-4 accent-emerald-600">

                        <span class="text-sm text-gray-600 leading-relaxed">
                            I acknowledge that my application will be reviewed
                            and that approval is subject to applicable terms,
                            eligibility and compliance requirements.
                        </span>
                    </label>
                </section>

                <!-- Error -->
                <div id="formError"
                     class="hidden text-sm text-red-600 bg-red-50 border border-red-100 rounded-lg p-3">
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-4 pt-5 border-t border-border">

                    <a href="<?= BASE_URL ?>/onboarding/investor-questionnaire.php"
                       class="text-sm font-medium text-muted hover:text-brand">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Back
                    </a>

                    <button type="button" id="submitApplication"
                            class="w-full sm:w-auto px-7 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-dark transition">
                        Submit application
                        <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>

                </div>

            </div>
        </div>

        <p class="text-center text-xs text-muted mt-6">
            <i class="fa-solid fa-lock mr-1"></i>
            Secure onboarding experience
        </p>

    </div>
</div>

<!-- Submission Confirmation Modal -->
<div id="confirmationModal"
     class="hidden fixed inset-0 z-50 bg-brand/50 backdrop-blur-sm items-center justify-center p-4">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-7 text-center">

        <div class="w-16 h-16 rounded-full bg-accent-light text-accent flex items-center justify-center text-2xl mx-auto mb-5">
            <i class="fa-solid fa-paper-plane"></i>
        </div>

        <h2 class="text-2xl font-bold text-brand mb-2">
            Application submitted!
        </h2>

        <p class="text-sm text-muted leading-relaxed mb-6">
            Your demonstration onboarding application has been submitted.
            In a production environment, it would now enter the review process.
        </p>

        <div class="bg-gray-50 border border-border rounded-xl p-4 text-left mb-6">
            <p class="text-xs text-muted mb-1">Application reference</p>
            <p class="font-semibold text-brand" id="applicationReference">
                IG-DEMO-000001
            </p>
            <p class="text-xs text-muted mt-3">
                <i class="fa-regular fa-clock mr-1"></i>
                Status: Awaiting review (demo)
            </p>
        </div>

        <button type="button" id="finishOnboarding"
                class="w-full px-6 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-dark transition">
            Continue to login
            <i class="fa-solid fa-arrow-right ml-2"></i>
        </button>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const submitButton = document.getElementById('submitApplication');
    const modal = document.getElementById('confirmationModal');
    const errorBox = document.getElementById('formError');

    const declarations = [
        document.getElementById('accuracyDeclaration'),
        document.getElementById('riskDeclaration'),
        document.getElementById('termsDeclaration')
    ];

    function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
        errorBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    submitButton.addEventListener('click', () => {

        errorBox.classList.add('hidden');

        const incomplete = declarations.some(item => !item.checked);

        if (incomplete) {
            showError('Please accept all three declarations before submitting your application.');
            return;
        }

        // Demo reference only. No application data is transmitted or saved.
        document.getElementById('applicationReference').textContent =
            'IG-DEMO-000001';

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    document.getElementById('finishOnboarding').addEventListener('click', () => {
        window.location.href = '<?= BASE_URL ?>/auth/login.php';
    });

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

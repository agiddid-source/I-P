<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Personal Information | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen">

    <!-- Header -->
    <header class="border-b border-border bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                <?php
                $logoVariant = 'default';
                $logoClass   = 'h-11 w-auto';
                include ROOT_PATH . '/components/shared/logo.php';
                ?>
            </a>

            <span class="rounded-full bg-accent-light px-3 py-1.5 text-xs font-semibold text-accent-dark">
                Investor onboarding
            </span>
        </div>
    </header>

    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <!-- Progress -->
        <div class="mx-auto mb-10 max-w-3xl">
            <div class="flex items-center justify-between text-xs font-medium text-muted">
                <span>Personal information</span>
                <span>Step 2 of 7</span>
            </div>

            <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-gray-200">
                <div class="h-full w-[28.56%] rounded-full bg-accent"></div>
            </div>
        </div>

        <div class="mx-auto max-w-3xl">

            <!-- Page heading -->
            <div class="mb-8">
                <a href="<?= BASE_URL ?>/onboarding/welcome.php" class="mb-5 inline-flex items-center gap-2 text-sm font-medium text-muted hover:text-brand">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to overview
                </a>

                <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                    Step 1 · Your profile
                </p>

                <h1 class="mt-2 text-3xl font-bold tracking-tight text-brand sm:text-4xl">
                    Tell us about yourself
                </h1>

                <p class="mt-3 leading-7 text-muted">
                    Provide your personal details as they appear on your
                    official identification documents.
                </p>
            </div>

            <!-- Form -->
            <form id="personalInfoForm" class="rounded-2xl border border-border bg-white p-6 shadow-sm sm:p-8" novalidate>

                <div class="mb-7 flex items-center gap-3 border-b border-border pb-5">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-accent-light text-accent-dark">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div>
                        <h2 class="font-semibold text-brand">Basic details</h2>
                        <p class="text-xs text-muted">Your legal and personal information</p>
                    </div>
                </div>

                <!-- Name -->
                <div class="grid gap-5 sm:grid-cols-2">

                    <div>
                        <label for="firstName" class="mb-2 block text-sm font-medium text-gray-700">
                            First name <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="text"
                            id="firstName"
                            name="firstName"
                            autocomplete="given-name"
                            placeholder="First name"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="firstNameError" class="mt-1 hidden text-xs text-red-600"></p>
                    </div>

                    <div>
                        <label for="lastName" class="mb-2 block text-sm font-medium text-gray-700">
                            Last name <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="text"
                            id="lastName"
                            name="lastName"
                            autocomplete="family-name"
                            placeholder="Last name"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="lastNameError" class="mt-1 hidden text-xs text-red-600"></p>
                    </div>

                </div>

                <!-- Other names -->
                <div class="mt-5">
                    <label for="middleName" class="mb-2 block text-sm font-medium text-gray-700">
                        Middle name <span class="text-muted font-normal">(Optional)</span>
                    </label>

                    <input
                        type="text"
                        id="middleName"
                        name="middleName"
                        autocomplete="additional-name"
                        placeholder="Middle name"
                        class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                    >
                </div>

                <!-- Date of birth and gender -->
                <div class="mt-5 grid gap-5 sm:grid-cols-2">

                    <div>
                        <label for="dateOfBirth" class="mb-2 block text-sm font-medium text-gray-700">
                            Date of birth <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="date"
                            id="dateOfBirth"
                            name="dateOfBirth"
                            autocomplete="bday"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="dateOfBirthError" class="mt-1 hidden text-xs text-red-600"></p>
                    </div>

                    <div>
                        <label for="gender" class="mb-2 block text-sm font-medium text-gray-700">
                            Gender <span class="text-muted font-normal">(Optional)</span>
                        </label>

                        <select
                            id="gender"
                            name="gender"
                            class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >
                            <option value="">Select option</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer-not-to-say">Prefer not to say</option>
                        </select>
                    </div>

                </div>

                <!-- Nationality -->
                <div class="mt-5">
                    <label for="nationality" class="mb-2 block text-sm font-medium text-gray-700">
                        Nationality <span class="text-red-500">*</span>
                    </label>

                    <select
                        id="nationality"
                        name="nationality"
                        required
                        class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                    >
                        <option value="">Select your nationality</option>
                        <option value="Australian">Australian</option>
                        <option value="British">British</option>
                        <option value="Canadian">Canadian</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="Ghanaian">Ghanaian</option>
                        <option value="Indian">Indian</option>
                        <option value="Kenyan">Kenyan</option>
                        <option value="Nigerian">Nigerian</option>
                        <option value="Singaporean">Singaporean</option>
                        <option value="South African">South African</option>
                        <option value="Other">Other</option>
                    </select>

                    <p id="nationalityError" class="mt-1 hidden text-xs text-red-600"></p>
                </div>

                <!-- Contact -->
                <div class="mb-7 mt-9 flex items-center gap-3 border-b border-border pb-5">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gold-light text-gold-dark">
                        <i class="fa-solid fa-address-book"></i>
                    </div>

                    <div>
                        <h2 class="font-semibold text-brand">Contact information</h2>
                        <p class="text-xs text-muted">How we can reach you</p>
                    </div>
                </div>

                <div class="space-y-5">

                    <div>
                        <label for="phone" class="mb-2 block text-sm font-medium text-gray-700">
                            Phone number <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            autocomplete="tel"
                            placeholder="+1-300-000-0000"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3 text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p class="mt-1 text-xs text-muted">
                            Include your country calling code.
                        </p>

                        <p id="phoneError" class="mt-1 hidden text-xs text-red-600"></p>
                    </div>

                </div>

                <!-- Notice -->
                <div class="mt-8 flex gap-3 rounded-xl border border-gold/40 bg-gold-light p-4">
                    <i class="fa-solid fa-shield-halved mt-0.5 text-gold-dark"></i>

                    <p class="text-xs leading-5 text-brand">
                        Your details are requested for investor identification
                        and onboarding purposes.
                    </p>
                </div>

                <!-- Actions -->
                <div class="mt-8 flex flex-col-reverse gap-3 border-t border-border pt-6 sm:flex-row sm:items-center sm:justify-between">

                    <a href="<?= BASE_URL ?>/onboarding/welcome.php" class="text-center text-sm font-medium text-muted hover:text-brand">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-primary justify-center px-7 py-3.5">
                        Continue
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                </div>

            </form>

            <p class="mt-6 text-center text-xs text-muted">
                © <?= date('Y') ?> InvestGlobal. All rights reserved.
            </p>

        </div>
    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('personalInfoForm');

    const showError = (id, message) => {
        const element = document.getElementById(id);
        element.textContent = message;
        element.classList.remove('hidden');
    };

    const clearErrors = () => {
        document.querySelectorAll('[id$="Error"]').forEach(element => {
            element.textContent = '';
            element.classList.add('hidden');
        });
    };

    // Prevent selecting a future date.
    const dob = document.getElementById('dateOfBirth');
    dob.max = new Date().toISOString().split('T')[0];

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        clearErrors();

        let valid = true;

        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const dateOfBirth = dob.value;
        const nationality = document.getElementById('nationality').value;
        const phone = document.getElementById('phone').value.trim();

        if (firstName.length < 2) {
            showError('firstNameError', 'Enter your first name.');
            valid = false;
        }

        if (lastName.length < 2) {
            showError('lastNameError', 'Enter your last name.');
            valid = false;
        }

        if (!dateOfBirth) {
            showError('dateOfBirthError', 'Select your date of birth.');
            valid = false;
        } else {
            const birthDate = new Date(dateOfBirth + 'T00:00:00');
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();

            const beforeBirthday =
                today.getMonth() < birthDate.getMonth() ||
                (today.getMonth() === birthDate.getMonth() &&
                 today.getDate() < birthDate.getDate());

            if (beforeBirthday) age--;

            if (birthDate >= today || age < 18) {
                showError('dateOfBirthError', 'You must be at least 18 years old.');
                valid = false;
            }
        }

        if (!nationality) {
            showError('nationalityError', 'Select your nationality.');
            valid = false;
        }

        if (!/^\+?[0-9\s().-]{7,20}$/.test(phone)) {
            showError('phoneError', 'Enter a valid phone number with country code.');
            valid = false;
        }

        if (!valid) return;

        // Demonstration only: do not persist personal information.
        window.location.href = '<?= BASE_URL ?>/onboarding/identity-verification.php';
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
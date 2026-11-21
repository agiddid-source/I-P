
<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Create Account | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen">
    <div class="grid min-h-screen lg:grid-cols-2">

        <!-- Brand panel -->
        <section class="relative hidden overflow-hidden bg-brand p-10 text-white lg:flex lg:flex-col lg:justify-between xl:p-14">

            <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center gap-3 text-xl font-bold">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10">
                    <i class="fa-solid fa-chart-line"></i>
                </span>
                InvestGlobal
            </a>

            <div class="relative z-10 max-w-xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 px-3 py-1 text-sm text-white/80">
                    <i class="fa-solid fa-globe"></i>
                    Your investment journey starts here
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight xl:text-5xl">
                    Make informed decisions. Build towards your goals.
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-white/70">
                    Create your account to explore investment opportunities
                    and manage your financial journey in one place.
                </p>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-white/50">
                <span>© <?= date('Y') ?> InvestGlobal</span>
                <span>Prototype experience</span>
            </div>

            <div class="pointer-events-none absolute -right-24 -top-20 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-4 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-white/5"></div>
        </section>

        <!-- Registration form -->
        <section class="flex items-center justify-center px-4 py-10 sm:px-8">
            <div class="w-full max-w-md">

                <div class="mb-10 flex items-center justify-between lg:hidden">
                    <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center gap-2 font-bold text-brand">
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand text-white">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        InvestGlobal
                    </a>

                    <a href="<?= BASE_URL ?>/public/index.php" class="text-sm font-medium text-muted hover:text-brand">
                        Back to site
                    </a>
                </div>

                <div class="mb-7">
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                        Get started
                    </p>

                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                        Create your account
                    </h2>

                    <p class="mt-3 text-muted">
                        Enter your details to get started with InvestGlobal.
                    </p>
                </div>

                <div id="registerNotice" class="mb-5 hidden rounded-xl border px-4 py-3 text-sm" role="status"></div>

                <form id="registerForm" class="space-y-4" novalidate>

                    <!-- Full name -->
                    <div>
                        <label for="fullName" class="mb-2 block text-sm font-medium text-gray-700">
                            Full name
                        </label>

                        <input
                            type="text"
                            id="fullName"
                            name="fullName"
                            autocomplete="name"
                            placeholder="Enter your full name"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="nameError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email address
                        </label>

                        <div class="relative">
                            <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                autocomplete="email"
                                placeholder="you@example.com"
                                required
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                        </div>

                        <p id="emailError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="country" class="mb-2 block text-sm font-medium text-gray-700">
                            Country of residence
                        </label>

                        <div class="relative">
                            <i class="fa-solid fa-globe absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>

                            <select
                                id="country"
                                name="country"
                                required
                                class="w-full appearance-none rounded-xl border border-border bg-white py-3.5 pl-11 pr-10 text-sm text-gray-700 outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                                <option value="">Select your country</option>
                                <option value="AU">Australia</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="IN">India</option>
                                <option value="KE">Kenya</option>
                                <option value="NG">Nigeria</option>
                                <option value="SG">Singapore</option>
                                <option value="ZA">South Africa</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="OTHER">Other</option>
                            </select>

                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-xs text-muted pointer-events-none"></i>
                        </div>

                        <p id="countryError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                            Password
                        </label>

                        <div class="relative">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                autocomplete="new-password"
                                placeholder="Create a password"
                                required
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-12 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >

                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-muted hover:text-brand"
                                aria-label="Show password"
                            >
                                <i id="passwordIcon" class="fa-regular fa-eye"></i>
                            </button>
                        </div>

                        <p class="mt-1.5 text-xs text-muted">
                            Use at least 8 characters, including a number.
                        </p>

                        <p id="passwordError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Confirm password -->
                    <div>
                        <label for="confirmPassword" class="mb-2 block text-sm font-medium text-gray-700">
                            Confirm password
                        </label>

                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            autocomplete="new-password"
                            placeholder="Re-enter your password"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="confirmPasswordError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Terms -->
                    <div>
                        <label class="flex cursor-pointer items-start gap-3 text-sm text-gray-600">
                            <input
                                type="checkbox"
                                id="terms"
                                name="terms"
                                class="mt-1 h-4 w-4 shrink-0 rounded border-border text-accent focus:ring-accent"
                            >

                            <span>
                                I agree to the
                                <a href="<?= BASE_URL ?>/public/disclosures.php" class="font-semibold text-accent-dark hover:underline">
                                    risk disclosures
                                </a>
                                and acknowledge that investing involves risk.
                            </span>
                        </label>

                        <p id="termsError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <button type="submit" class="btn btn-primary w-full justify-center py-3.5">
                        Create account
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                    <p class="pt-2 text-center text-sm text-muted">
                        Already have an account?
                        <a href="<?= BASE_URL ?>/auth/login.php" class="font-semibold text-accent-dark hover:underline">
                            Sign in
                        </a>
                    </p>

                </form>

                <div class="mt-7 flex justify-center gap-5 text-xs text-muted">
                    <a href="<?= BASE_URL ?>/public/disclosures.php" class="hover:text-brand">Risk & disclosures</a>
                    <a href="<?= BASE_URL ?>/public/index.php" class="hover:text-brand">Home</a>
                </div>

            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registerForm');
    const password = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const passwordIcon = document.getElementById('passwordIcon');
    const notice = document.getElementById('registerNotice');

    const showError = (id, message) => {
        const element = document.getElementById(id);
        element.textContent = message;
        element.classList.remove('hidden');
    };

    const clearErrors = () => {
        document.querySelectorAll('#registerForm p[id$="Error"]').forEach(element => {
            element.textContent = '';
            element.classList.add('hidden');
        });
    };

    togglePassword.addEventListener('click', () => {
        const showing = password.type === 'text';

        password.type = showing ? 'password' : 'text';

        togglePassword.setAttribute(
            'aria-label',
            showing ? 'Show password' : 'Hide password'
        );

        passwordIcon.className = showing
            ? 'fa-regular fa-eye'
            : 'fa-regular fa-eye-slash';
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        clearErrors();
        notice.classList.add('hidden');

        const fullName = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email');
        const country = document.getElementById('country').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const terms = document.getElementById('terms').checked;

        let valid = true;

        if (fullName.length < 2) {
            showError('nameError', 'Please enter your full name.');
            valid = false;
        }

        if (!email.value.trim() || !email.validity.valid) {
            showError('emailError', 'Enter a valid email address.');
            valid = false;
        }

        if (!country) {
            showError('countryError', 'Select your country of residence.');
            valid = false;
        }

        if (!/^(?=.*\d).{8,}$/.test(password.value)) {
            showError('passwordError', 'Use at least 8 characters and include a number.');
            valid = false;
        }

        if (confirmPassword !== password.value) {
            showError('confirmPasswordError', 'Your passwords do not match.');
            valid = false;
        }

        if (!terms) {
            showError('termsError', 'Please acknowledge the risk disclosures.');
            valid = false;
        }

        if (!valid) return;

        notice.className = 'mb-5 rounded-xl border border-blue-200 bg-blue-50 px-4 py-3 text-sm text-blue-800';
        notice.textContent = 'Prototype only: your details passed the form checks, but no account was created and no information was saved.';
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>

<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Reset Password | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen">
    <div class="grid min-h-screen lg:grid-cols-2">

        <!-- Brand panel -->
        <section class="relative hidden overflow-hidden bg-brand p-10 text-white lg:flex lg:flex-col lg:justify-between xl:p-14">

            <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                <?php
                $logoVariant = 'light';
                $logoClass   = 'h-28 w-auto';
                include ROOT_PATH . '/components/shared/logo.php';
                ?>
            </a>

            <div class="relative z-10 max-w-xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 px-3 py-1 text-sm text-white/80">
                    <i class="fa-solid fa-shield-halved"></i>
                    Keep your account secure
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight xl:text-5xl">
                    Choose a new password you'll remember.
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-white/70">
                    Use a strong, unique password that you don't use on any
                    other website or app.
                </p>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-white/50">
                <span>&copy; <?= date('Y') ?> InvestGlobal</span>
            </div>

            <div class="pointer-events-none absolute -right-24 -top-20 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-4 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-white/5"></div>
        </section>

        <!-- Reset password form -->
        <section class="flex items-center justify-center px-4 py-10 sm:px-8">
            <div class="w-full max-w-md">

                <div class="mb-10 flex items-center justify-between lg:hidden">
                    <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                        <?php
                        $logoVariant = 'default';
                        $logoClass   = 'h-10 w-auto';
                        include ROOT_PATH . '/components/shared/logo.php';
                        ?>
                    </a>

                    <a href="<?= BASE_URL ?>/auth/login.php" class="text-sm font-medium text-muted hover:text-brand">
                        Back to sign in
                    </a>
                </div>

                <div class="mb-8">
                    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-accent-light text-accent-dark">
                        <i class="fa-solid fa-lock text-xl"></i>
                    </div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                        New password
                    </p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                        Reset your password
                    </h2>
                    <p class="mt-3 text-muted">
                        Enter and confirm your new password below.
                    </p>
                </div>

                <div id="resetNotice" class="mb-5 hidden rounded-xl border px-4 py-3 text-sm" role="status"></div>

                <form id="resetForm" class="space-y-5" novalidate>

                    <!-- New password -->
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                            New password
                        </label>
                        <div class="relative">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="Create a new password"
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-12 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                            <!-- <button
                                type="button"
                                class="toggle-password absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-muted hover:text-brand"
                                data-target="password"
                                aria-label="Show password"
                            >
                                <i class="fa-regular fa-eye"></i>
                            </button> -->
                        </div>
                        <p id="passwordError" class="mt-1.5 hidden text-sm text-red-600"></p>

                        <!-- Strength -->
                        <div class="mt-3">
                            <div class="h-1.5 overflow-hidden rounded-full bg-gray-200">
                                <div id="strengthBar" class="h-full w-0 rounded-full transition-all duration-300"></div>
                            </div>
                            <p id="strengthLabel" class="mt-1.5 text-xs text-muted">Password strength</p>
                        </div>

                        <!-- Requirements -->
                        <ul class="mt-3 space-y-1.5 text-xs text-muted">
                            <li data-rule="length" class="flex items-center gap-2">
                                <i class="fa-regular fa-circle text-[10px]"></i> At least 8 characters
                            </li>
                            <li data-rule="case" class="flex items-center gap-2">
                                <i class="fa-regular fa-circle text-[10px]"></i> Uppercase and lowercase letters
                            </li>
                            <li data-rule="number" class="flex items-center gap-2">
                                <i class="fa-regular fa-circle text-[10px]"></i> At least one number
                            </li>
                        </ul>
                    </div>

                    <!-- Confirm password -->
                    <div>
                        <label for="confirmPassword" class="mb-2 block text-sm font-medium text-gray-700">
                            Confirm new password
                        </label>
                        <div class="relative">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>
                            <input
                                id="confirmPassword"
                                name="confirmPassword"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="Re-enter your new password"
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-12 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                            <!-- <button
                                type="button"
                                class="toggle-password absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-muted hover:text-brand"
                                data-target="confirmPassword"
                                aria-label="Show password"
                            >
                                <i class="fa-regular fa-eye"></i>
                            </button> -->
                        </div>
                        <p id="confirmError" class="mt-1.5 hidden text-sm text-red-600"></p>
                    </div>

                    <button type="submit" class="btn btn-primary w-full justify-center py-3.5">
                        Reset password
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                    <p class="text-center text-sm text-muted">
                        <a href="<?= BASE_URL ?>/auth/login.php" class="font-semibold text-accent-dark hover:underline">
                            Back to sign in
                        </a>
                    </p>
                </form>

                <div class="mt-8 flex justify-center gap-5 text-xs text-muted">
                    <a href="<?= BASE_URL ?>/public/disclosures.php" class="hover:text-brand">Risk &amp; disclosures</a>
                    <a href="<?= BASE_URL ?>/public/index.php" class="hover:text-brand">Home</a>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('resetForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const passwordError = document.getElementById('passwordError');
    const confirmError = document.getElementById('confirmError');
    const notice = document.getElementById('resetNotice');
    const strengthBar = document.getElementById('strengthBar');
    const strengthLabel = document.getElementById('strengthLabel');

    // Show / hide password toggles
    document.querySelectorAll('.toggle-password').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.getElementById(button.dataset.target);
            const showing = input.type === 'text';

            input.type = showing ? 'password' : 'text';
            button.setAttribute('aria-label', showing ? 'Show password' : 'Hide password');
            button.querySelector('i').className = showing
                ? 'fa-regular fa-eye'
                : 'fa-regular fa-eye-slash';
        });
    });

    function checkRules(value) {
        return {
            length: value.length >= 8,
            case: /[a-z]/.test(value) && /[A-Z]/.test(value),
            number: /\d/.test(value)
        };
    }

    function updateStrength() {
        const value = password.value;
        const rules = checkRules(value);

        document.querySelectorAll('[data-rule]').forEach((item) => {
            const passed = rules[item.dataset.rule];
            item.className = 'flex items-center gap-2 ' + (passed ? 'text-accent-dark' : 'text-muted');
            item.querySelector('i').className = passed
                ? 'fa-solid fa-circle-check text-[10px]'
                : 'fa-regular fa-circle text-[10px]';
        });

        let score = Object.values(rules).filter(Boolean).length;
        if (value.length >= 12 && /[^A-Za-z0-9]/.test(value)) score += 1;

        const levels = [
            { width: '0%',   color: '',                label: 'Password strength' },
            { width: '25%',  color: 'bg-red-500',      label: 'Weak' },
            { width: '50%',  color: 'bg-gold',         label: 'Fair' },
            { width: '75%',  color: 'bg-accent',       label: 'Good' },
            { width: '100%', color: 'bg-accent-dark',  label: 'Strong' }
        ];

        const level = value ? levels[Math.max(1, score)] : levels[0];

        strengthBar.className = 'h-full rounded-full transition-all duration-300 ' + level.color;
        strengthBar.style.width = level.width;
        strengthLabel.textContent = level.label;
    }

    password.addEventListener('input', () => {
        updateStrength();
        passwordError.classList.add('hidden');
    });

    confirmPassword.addEventListener('input', () => {
        confirmError.classList.add('hidden');
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        passwordError.classList.add('hidden');
        confirmError.classList.add('hidden');
        notice.classList.add('hidden');

        const rules = checkRules(password.value);
        let isValid = true;

        if (!rules.length || !rules.case || !rules.number) {
            passwordError.textContent = 'Your password does not meet all the requirements.';
            passwordError.classList.remove('hidden');
            isValid = false;
        }

        if (confirmPassword.value !== password.value || !confirmPassword.value) {
            confirmError.textContent = 'Passwords do not match.';
            confirmError.classList.remove('hidden');
            isValid = false;
        }

        if (!isValid) return;

        notice.className = 'mb-5 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800';
        notice.textContent = 'Prototype only: your password was not changed. Redirecting to sign in...';

        setTimeout(() => {
            window.location.href = '<?= BASE_URL ?>/auth/login.php';
        }, 1800);
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
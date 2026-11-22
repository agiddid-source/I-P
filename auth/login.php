<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Sign In | InvestGlobal';
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
                    <i class="fa-solid fa-lock"></i>
                    Your Investing Workspace
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight xl:text-5xl">
                    A clearer view of your financial journey.
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-white/70">
                    Explore investment opportunities, follow your portfolio,
                    and keep track of your account activity in one place.
                </p>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-white/50">
                <span>&copy; <?= date('Y') ?> InvestGlobal</span>
            </div>

            <div class="pointer-events-none absolute -right-24 -top-20 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-4 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-white/5"></div>
        </section>

        <!-- Login form -->
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

                    <a href="<?= BASE_URL ?>/public/index.php" class="text-sm font-medium text-muted hover:text-brand">
                        Back to site
                    </a>
                </div>

                <div class="mb-8">
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                        Welcome back
                    </p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                        Sign in to your account
                    </h2>
                    <p class="mt-3 text-muted">
                        Enter your details to continue to your workspace.
                    </p>
                </div>

                <div id="loginNotice" class="mb-5 hidden rounded-xl border border-gold/40 bg-gold-light px-4 py-3 text-sm text-brand" role="status"></div>

                <form id="loginForm" class="space-y-5" novalidate>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="relative">
                            <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                placeholder="you@example.com"
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                        </div>
                        <p id="emailError" class="mt-1.5 hidden text-sm text-red-600"></p>
                    </div>

                    <div>
                        <div class="mb-2 flex items-center justify-between gap-3">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <a href="<?= BASE_URL ?>/auth/forgot-password.php" class="text-sm font-medium text-accent-dark hover:underline">
                                Forgot password?
                            </a>
                        </div>

                        <div class="relative">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                placeholder="Enter your password"
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
                        <p id="passwordError" class="mt-1.5 hidden text-sm text-red-600"></p>
                    </div>

                    <label class="flex cursor-pointer items-center gap-2.5 text-sm text-gray-600">
                        <input
                            id="rememberMe"
                            name="rememberMe"
                            type="checkbox"
                            class="h-4 w-4 rounded border-border text-accent focus:ring-accent"
                        >
                        Keep me signed in
                    </label>

                    <button type="submit" class="btn btn-primary w-full justify-center py-3.5">
                        Sign in
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                    <p class="text-center text-sm text-muted">
                        New to InvestGlobal?
                        <a href="<?= BASE_URL ?>/auth/register.php" class="font-semibold text-accent-dark hover:underline">
                            Create an account
                        </a>
                    </p>
                </form>

                <div class="mt-8 flex justify-center gap-5 text-xs text-muted">
                    <a href="<?= BASE_URL ?>/public/disclosures.php" class="hover:text-brand">Risk & disclosures</a>
                    <a href="<?= BASE_URL ?>/public/index.php" class="hover:text-brand">Home</a>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('loginForm');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const notice = document.getElementById('loginNotice');
    const togglePassword = document.getElementById('togglePassword');
    const passwordIcon = document.getElementById('passwordIcon');

    togglePassword.addEventListener('click', () => {
        const showingPassword = password.type === 'text';
        password.type = showingPassword ? 'password' : 'text';
        togglePassword.setAttribute(
            'aria-label',
            showingPassword ? 'Show password' : 'Hide password'
        );
        passwordIcon.className = showingPassword
            ? 'fa-regular fa-eye'
            : 'fa-regular fa-eye-slash';
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        emailError.classList.add('hidden');
        passwordError.classList.add('hidden');
        notice.classList.add('hidden');

        let isValid = true;

        if (!email.value.trim() || !email.validity.valid) {
            emailError.textContent = 'Enter a valid email address.';
            emailError.classList.remove('hidden');
            isValid = false;
        }

        if (!password.value) {
            passwordError.textContent = 'Enter your password.';
            passwordError.classList.remove('hidden');
            isValid = false;
        }

        if (!isValid) return;

        notice.textContent = 'Prototype only: authentication is not connected yet. No credentials were sent or saved.';
        notice.classList.remove('hidden');
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
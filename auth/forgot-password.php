<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Forgot Password | InvestGlobal';
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
                    <i class="fa-solid fa-key"></i>
                    Account recovery
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight xl:text-5xl">
                    Locked out? We'll help you get back in.
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-white/70">
                    Enter the email address linked to your account and we'll
                    send you instructions to set a new password.
                </p>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-white/50">
                <span>&copy; <?= date('Y') ?> InvestGlobal</span>
            </div>

            <div class="pointer-events-none absolute -right-24 -top-20 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-4 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-white/5"></div>
        </section>

        <!-- Forgot password form -->
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
                    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-accent-light text-accent-dark">
                        <i class="fa-solid fa-key text-xl"></i>
                    </div>

                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                        Reset password
                    </p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                        Forgot your password?
                    </h2>
                    <p class="mt-3 text-muted">
                        No problem. Enter your email address and we'll send you
                        a link to reset it.
                    </p>
                </div>

                <div id="forgotNotice" class="mb-5 hidden rounded-xl border px-4 py-3 text-sm" role="status"></div>

                <form id="forgotForm" class="space-y-5" novalidate>
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

                    <button type="submit" class="btn btn-primary w-full justify-center py-3.5">
                        Send reset link
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                    <p class="text-center text-sm text-muted">
                        Remembered your password?
                        <a href="<?= BASE_URL ?>/auth/login.php" class="font-semibold text-accent-dark hover:underline">
                            Back to sign in
                        </a>
                    </p>
                </form>

                <div id="afterSend" class="mt-6 hidden rounded-xl border border-border bg-white p-4 text-center">
                    <p class="text-sm text-muted">Didn't get the email?</p>
                    <button type="button" id="resendLink" class="mt-1 text-sm font-semibold text-accent-dark hover:underline">
                        Send it again
                    </button>
                    <p class="mt-3 text-xs text-muted">
                        Prototype shortcut:
                        <a href="<?= BASE_URL ?>/auth/reset-password.php" class="font-semibold text-brand hover:underline">
                            open the reset page
                        </a>
                    </p>
                </div>

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
    const form = document.getElementById('forgotForm');
    const email = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const notice = document.getElementById('forgotNotice');
    const afterSend = document.getElementById('afterSend');
    const resendLink = document.getElementById('resendLink');

    function showNotice(message) {
        notice.className = 'mb-5 rounded-xl border border-gold/40 bg-gold-light px-4 py-3 text-sm text-brand';
        notice.textContent = message;
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        emailError.classList.add('hidden');
        notice.classList.add('hidden');

        if (!email.value.trim() || !email.validity.valid) {
            emailError.textContent = 'Enter a valid email address.';
            emailError.classList.remove('hidden');
            return;
        }

        showNotice(
            'Prototype only: if an account exists for ' + email.value.trim() +
            ', a reset link would be sent here. No email was sent.'
        );
        afterSend.classList.remove('hidden');
    });

    resendLink.addEventListener('click', () => {
        showNotice('Prototype only: a new reset link would be sent here. No email was sent.');
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
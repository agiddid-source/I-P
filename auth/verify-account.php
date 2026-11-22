<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Verify Account | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="flex min-h-screen flex-col">

    <!-- Header -->
    <header class="border-b border-border bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
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
    </header>

    <!-- Verification -->
    <section class="flex flex-1 items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">

            <!-- Progress -->
            <div class="mb-10">
                <div class="flex items-center justify-between text-xs font-medium text-muted">
                    <span>Account setup</span>
                    <span>Step 1 of 3</span>
                </div>

                <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-gray-200">
                    <div class="h-full w-1/3 rounded-full bg-accent"></div>
                </div>
            </div>

            <!-- Icon -->
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-accent-light text-accent-dark">
                <i class="fa-regular fa-envelope-open text-2xl"></i>
            </div>

            <div class="mt-7 text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                    Verify your email
                </p>

                <h1 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                    Check your inbox
                </h1>

                <p class="mt-3 leading-7 text-muted">
                    We've sent a verification code to the email address associated
                    with your registration.
                </p>

                <p id="displayEmail" class="mt-2 font-semibold text-brand">
                    your email address
                </p>
            </div>

            <!-- Notice -->
            <div id="verificationNotice" class="mt-7 hidden rounded-xl border px-4 py-3 text-sm" role="status"></div>

            <!-- OTP Form -->
            <form id="verificationForm" class="mt-8">

                <label class="mb-3 block text-center text-sm font-medium text-gray-700">
                    Enter your 6-digit verification code
                </label>

                <div id="otpContainer" class="flex justify-center gap-2 sm:gap-3">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <input
                            type="text"
                            inputmode="numeric"
                            maxlength="1"
                            autocomplete="<?= $i === 0 ? 'one-time-code' : 'off' ?>"
                            aria-label="Verification digit <?= $i + 1 ?>"
                            class="otp-input h-14 w-11 rounded-xl border border-border bg-white text-center text-xl font-bold text-brand outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10 sm:h-16 sm:w-14"
                            required
                        >
                    <?php endfor; ?>
                </div>

                <p id="otpError" class="mt-3 hidden text-center text-sm text-red-600"></p>

                <button type="submit" class="btn btn-primary mt-7 w-full justify-center py-3.5">
                    Verify email
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </button>

            </form>

            <!-- Resend -->
            <div class="mt-7 text-center">
                <p class="text-sm text-muted">
                    Didn't receive the code?
                </p>

                <button type="button" id="resendCode" class="mt-2 text-sm font-semibold text-accent-dark hover:underline">
                    Resend verification code
                </button>

                <p id="resendMessage" class="mt-3 text-xs text-muted"></p>
            </div>

            <p class="mt-8 text-center text-xs text-muted">
                &copy; <?= date('Y') ?> InvestGlobal. All rights reserved.
            </p>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const inputs = [...document.querySelectorAll('.otp-input')];
    const form = document.getElementById('verificationForm');
    const notice = document.getElementById('verificationNotice');
    const otpError = document.getElementById('otpError');
    const resendButton = document.getElementById('resendCode');
    const resendMessage = document.getElementById('resendMessage');

    // Display email passed from the previous registration step.
    // No email or OTP is stored by this prototype.
    const params = new URLSearchParams(window.location.search);
    const email = params.get('email');

    if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('displayEmail').textContent = email;
    }

    // OTP input behavior
    inputs.forEach((input, index) => {
        input.addEventListener('input', () => {
            input.value = input.value.replace(/\D/g, '').slice(0, 1);

            if (input.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }

            otpError.classList.add('hidden');
            notice.classList.add('hidden');
        });

        input.addEventListener('keydown', (event) => {
            if (event.key === 'Backspace' && !input.value && index > 0) {
                inputs[index - 1].focus();
            }

            if (event.key === 'ArrowLeft' && index > 0) {
                inputs[index - 1].focus();
            }

            if (event.key === 'ArrowRight' && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('paste', (event) => {
            event.preventDefault();

            const pasted = event.clipboardData
                .getData('text')
                .replace(/\D/g, '')
                .slice(0, 6);

            pasted.split('').forEach((digit, digitIndex) => {
                if (inputs[digitIndex]) {
                    inputs[digitIndex].value = digit;
                }
            });

            inputs[Math.min(pasted.length, 5)].focus();
        });
    });

    // Submit verification
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const code = inputs.map(input => input.value).join('');

        otpError.classList.add('hidden');
        notice.classList.add('hidden');

        if (!/^\d{6}$/.test(code)) {
            otpError.textContent = 'Please enter all six digits.';
            otpError.classList.remove('hidden');
            return;
        }

        notice.className = 'mt-7 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800';
        notice.textContent = 'Demo verification successful! Your email step is complete.';

        // Continue to the onboarding welcome screen.
        setTimeout(() => {
            window.location.href = '<?= BASE_URL ?>/onboarding/welcome.php';
        }, 1200);
    });

    // Resend simulation
    resendButton.addEventListener('click', () => {
        resendMessage.textContent = 'Demo: a new verification code would be sent here.';
    });

    inputs[0].focus();
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
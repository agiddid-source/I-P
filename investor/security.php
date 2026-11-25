
<?php
$pageTitle = 'Security Settings';
$bodyClass = 'bg-gray-50';

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php require_once __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64 min-h-screen flex flex-col">
        <?php require_once __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8 pb-24 lg:pb-8 max-w-7xl w-full mx-auto">

            <!-- Heading -->
            <div class="mb-8">
                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                    <a href="dashboard.php" class="hover:text-emerald-700">Dashboard</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <a href="profile.php" class="hover:text-emerald-700">My Profile</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span class="text-gray-900">Security</span>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Security settings</h1>
                <p class="text-sm text-gray-500 mt-1">
                    Manage your password, authentication and account security.
                </p>
            </div>

            <!-- Security overview -->
            <section class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 mb-6">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-shield-halved text-xl"></i>
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Your account is protected</h2>
                            <p class="text-sm text-gray-500 mt-1">
                                Your password is active. Review the recommendations below to strengthen account protection.
                            </p>
                        </div>
                    </div>

                    <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-emerald-50 text-emerald-700 rounded-full text-xs font-semibold whitespace-nowrap">
                        <i class="fa-solid fa-circle-check"></i>
                        Protection active
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6 pt-5 border-t border-gray-100">
                    <div>
                        <p class="text-xs text-gray-500">Password last changed</p>
                        <p class="text-sm font-semibold text-gray-900 mt-1">October 12, 2026</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Two-factor authentication</p>
                        <p class="text-sm font-semibold text-amber-700 mt-1" id="twoFactorSummary">Not enabled</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Active sessions</p>
                        <p class="text-sm font-semibold text-gray-900 mt-1">2 devices</p>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Main column -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Password -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Password</h3>
                                <p class="text-xs text-gray-500 mt-1">Update your account password.</p>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center">
                                <i class="fa-solid fa-key"></i>
                            </div>
                        </div>

                        <form id="passwordForm" class="p-5 sm:p-6 space-y-5">

                            <div>
                                <label for="currentPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                    Current password
                                </label>
                                <div class="relative">
                                    <input type="password" id="currentPassword" required
                                        placeholder="Enter current password"
                                        class="password-field w-full px-3.5 py-2.5 pr-11 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                    <button type="button" class="toggle-password absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700" data-target="currentPassword">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div>
                                <label for="newPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                    New password
                                </label>
                                <div class="relative">
                                    <input type="password" id="newPassword" required minlength="8"
                                        placeholder="Create a new password"
                                        class="password-field w-full px-3.5 py-2.5 pr-11 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                    <button type="button" class="toggle-password absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700" data-target="newPassword">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>

                                <div class="mt-3 space-y-2" id="passwordRequirements">
                                    <p class="text-xs text-gray-500 font-medium">Password requirements</p>
                                    <p data-rule="length" class="text-xs text-gray-400">
                                        <i class="fa-regular fa-circle mr-1"></i> At least 8 characters
                                    </p>
                                    <p data-rule="uppercase" class="text-xs text-gray-400">
                                        <i class="fa-regular fa-circle mr-1"></i> At least one uppercase letter
                                    </p>
                                    <p data-rule="number" class="text-xs text-gray-400">
                                        <i class="fa-regular fa-circle mr-1"></i> At least one number
                                    </p>
                                    <p data-rule="special" class="text-xs text-gray-400">
                                        <i class="fa-regular fa-circle mr-1"></i> At least one special character
                                    </p>
                                </div>
                            </div>

                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                    Confirm new password
                                </label>
                                <div class="relative">
                                    <input type="password" id="confirmPassword" required
                                        placeholder="Confirm your new password"
                                        class="password-field w-full px-3.5 py-2.5 pr-11 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                    <button type="button" class="toggle-password absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700" data-target="confirmPassword">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                                <p id="passwordMatchMessage" class="text-xs mt-2 hidden"></p>
                            </div>

                            <div class="flex justify-end pt-4 border-t border-gray-100">
                                <button type="submit" class="px-5 py-2.5 bg-[#0B1F33] hover:bg-[#163A59] text-white rounded-lg text-sm font-semibold transition">
                                    Update password
                                </button>
                            </div>

                        </form>
                    </section>

                    <!-- Two-factor authentication -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Two-factor authentication</h3>
                                <p class="text-xs text-gray-500 mt-1">Add another layer of protection to your account.</p>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-purple-50 text-purple-700 flex items-center justify-center">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Authenticator app</p>
                                    <p class="text-sm text-gray-500 mt-1 max-w-lg">
                                        Require an additional verification code when signing in.
                                    </p>
                                </div>

                                <label class="inline-flex items-center gap-3 cursor-pointer">
                                    <span id="twoFactorLabel" class="text-xs font-semibold text-gray-500">Disabled</span>
                                    <input type="checkbox" id="twoFactorToggle" class="sr-only peer">
                                    <span class="relative w-11 h-6 bg-gray-200 rounded-full peer-checked:bg-emerald-600 transition after:content-[''] after:absolute after:w-5 after:h-5 after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:shadow after:transition-transform peer-checked:after:translate-x-5"></span>
                                </label>
                            </div>

                            <div id="twoFactorInfo" class="mt-5 p-4 bg-amber-50 border border-amber-100 rounded-lg">
                                <div class="flex items-start gap-3">
                                    <i class="fa-solid fa-circle-info text-amber-600 mt-0.5"></i>
                                    <p class="text-xs text-amber-800 leading-relaxed">
                                        Two-factor authentication is currently disabled in this demo. Enabling the switch only changes its visual state; no authenticator is connected.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Login activity -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Recent login activity</h3>
                                <p class="text-xs text-gray-500 mt-1">Review devices that have accessed your account.</p>
                            </div>
                            <i class="fa-solid fa-clock-rotate-left text-gray-400 text-lg"></i>
                        </div>

                        <div class="divide-y divide-gray-100">

                            <div class="p-5 flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-laptop"></i>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                        <p class="text-sm font-semibold text-gray-900">Windows · Chrome</p>
                                        <span class="text-xs text-emerald-700 font-semibold">Current session</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Washington, United States · IP: 192.0.2.10</p>
                                    <p class="text-xs text-gray-400 mt-1">Today, 10:42 AM</p>
                                </div>
                            </div>

                            <div class="p-5 flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                </div>

                                <div class="flex-1 min-w-0">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                                        <p class="text-sm font-semibold text-gray-900">iPhone · Safari</p>
                                        <span class="text-xs text-gray-500">Recognised device</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Washington, United States · IP: 192.0.2.25</p>
                                    <p class="text-xs text-gray-400 mt-1">Yesterday, 8:15 PM</p>
                                </div>
                            </div>

                        </div>

                        <div class="px-5 py-4 bg-gray-50 border-t border-gray-100">
                            <p class="text-xs text-gray-500">
                                <i class="fa-solid fa-circle-info mr-1"></i>
                                This is illustrative login activity, not a record of actual account access.
                            </p>
                        </div>
                    </section>

                    <!-- Trusted devices -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100">
                            <h3 class="font-semibold text-gray-900">Trusted devices</h3>
                            <p class="text-xs text-gray-500 mt-1">Devices recognised in this demo account.</p>
                        </div>

                        <div class="p-5 sm:p-6">
                            <div class="flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center">
                                        <i class="fa-solid fa-laptop"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900">Windows computer</p>
                                        <p class="text-xs text-gray-500 mt-1">This device · Last active today</p>
                                    </div>
                                </div>

                                <span class="text-xs font-semibold text-emerald-700">Current</span>
                            </div>

                            <div class="flex items-center justify-between gap-4 mt-5 pt-5 border-t border-gray-100">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900">iPhone</p>
                                        <p class="text-xs text-gray-500 mt-1">Last active yesterday</p>
                                    </div>
                                </div>

                                <button type="button" class="remove-device text-xs font-semibold text-red-600 hover:text-red-700" data-device="iPhone">
                                    Remove
                                </button>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Right column -->
                <aside class="space-y-6">

                    <!-- Security recommendations -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">
                        <h3 class="font-semibold text-gray-900">Security recommendations</h3>
                        <p class="text-xs text-gray-500 mt-1">Ways to keep your account safer.</p>

                        <div class="space-y-4 mt-5">
                            <div class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5"></i>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Use a strong password</p>
                                    <p class="text-xs text-gray-500 mt-1">Avoid predictable words and reused passwords.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-exclamation text-amber-500 mt-0.5"></i>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Enable two-factor authentication</p>
                                    <p class="text-xs text-gray-500 mt-1">Add a second verification step to sign-ins.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5"></i>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Review login activity</p>
                                    <p class="text-xs text-gray-500 mt-1">Check for devices you don't recognise.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Account recovery -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-life-ring"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900">Account recovery</h3>
                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                            Make sure your registered email and phone number are up to date so you can recover access if needed.
                        </p>
                        <a href="profile.php" class="inline-flex items-center gap-2 mt-4 text-sm font-semibold text-emerald-700 hover:text-emerald-800">
                            Review profile <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </section>

                    <!-- Security support -->
                    <section class="bg-[#0B1F33] rounded-xl p-5 text-white">
                        <div class="w-10 h-10 rounded-lg bg-white/10 text-emerald-300 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3 class="font-semibold">Need security assistance?</h3>
                        <p class="text-sm text-gray-300 mt-2 leading-relaxed">
                            If you suspect unauthorised access, contact the platform's support team immediately.
                        </p>
                        <a href="../public/resources.php" class="inline-flex items-center gap-2 mt-5 text-sm font-semibold text-emerald-300 hover:text-white">
                            Visit support resources <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </section>

                </aside>
            </div>

        </main>

        <?php require_once __DIR__ . '/../components/investor/bottom-nav.php'; ?>
    </div>
</div>

<!-- Demo toast -->
<div id="securityToast" class="fixed bottom-6 right-6 z-[100] hidden max-w-sm bg-gray-900 text-white px-4 py-3 rounded-lg shadow-xl flex items-center gap-3">
    <i class="fa-solid fa-circle-info text-emerald-400"></i>
    <span id="securityToastMessage" class="text-sm">Demo action.</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toast = document.getElementById('securityToast');
    const toastMessage = document.getElementById('securityToastMessage');
    let toastTimeout;

    function showToast(message) {
        toastMessage.textContent = message;
        toast.classList.remove('hidden');

        clearTimeout(toastTimeout);
        toastTimeout = setTimeout(() => {
            toast.classList.add('hidden');
        }, 3200);
    }

    // Password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function () {
            const input = document.getElementById(this.dataset.target);
            const icon = this.querySelector('i');

            const show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            icon.classList.toggle('fa-eye', !show);
            icon.classList.toggle('fa-eye-slash', show);
        });
    });

    // Password requirement checks
    const newPassword = document.getElementById('newPassword');
    const confirmPassword = document.getElementById('confirmPassword');
    const matchMessage = document.getElementById('passwordMatchMessage');

    function updatePasswordRequirements() {
        const password = newPassword.value;

        const rules = {
            length: password.length >= 8,
            uppercase: /[A-Z]/.test(password),
            number: /[0-9]/.test(password),
            special: /[^A-Za-z0-9]/.test(password)
        };

        Object.entries(rules).forEach(([rule, passed]) => {
            const element = document.querySelector(`[data-rule="${rule}"]`);
            const icon = element.querySelector('i');

            element.classList.toggle('text-emerald-700', passed);
            element.classList.toggle('text-gray-400', !passed);

            icon.classList.toggle('fa-circle-check', passed);
            icon.classList.toggle('fa-circle', !passed);
        });

        return Object.values(rules).every(Boolean);
    }

    function updatePasswordMatch() {
        if (!confirmPassword.value) {
            matchMessage.classList.add('hidden');
            return false;
        }

        const matches = newPassword.value === confirmPassword.value;

        matchMessage.textContent = matches
            ? 'Passwords match.'
            : 'Passwords do not match.';

        matchMessage.className = matches
            ? 'text-xs mt-2 text-emerald-700'
            : 'text-xs mt-2 text-red-600';

        return matches;
    }

    newPassword.addEventListener('input', function () {
        updatePasswordRequirements();
        updatePasswordMatch();
    });

    confirmPassword.addEventListener('input', updatePasswordMatch);

    document.getElementById('passwordForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const current = document.getElementById('currentPassword').value;
        const requirementsPassed = updatePasswordRequirements();
        const passwordsMatch = updatePasswordMatch();

        if (!current) {
            showToast('Enter your current password.');
            return;
        }

        if (!requirementsPassed) {
            showToast('Your new password does not meet all requirements.');
            return;
        }

        if (!passwordsMatch) {
            showToast('Please confirm your new password.');
            return;
        }

        showToast('Demo only: password has not been changed.');
        this.reset();
        updatePasswordRequirements();
        matchMessage.classList.add('hidden');
    });

    // Two-factor authentication demo toggle
    const twoFactorToggle = document.getElementById('twoFactorToggle');
    const twoFactorLabel = document.getElementById('twoFactorLabel');
    const twoFactorSummary = document.getElementById('twoFactorSummary');
    const twoFactorInfo = document.getElementById('twoFactorInfo');

    twoFactorToggle.addEventListener('change', function () {
        const enabled = this.checked;

        twoFactorLabel.textContent = enabled ? 'Enabled' : 'Disabled';
        twoFactorLabel.className = enabled
            ? 'text-xs font-semibold text-emerald-700'
            : 'text-xs font-semibold text-gray-500';

        twoFactorSummary.textContent = enabled ? 'Enabled (demo)' : 'Not enabled';
        twoFactorSummary.className = enabled
            ? 'text-sm font-semibold text-emerald-700 mt-1'
            : 'text-sm font-semibold text-amber-700 mt-1';

        twoFactorInfo.className = enabled
            ? 'mt-5 p-4 bg-emerald-50 border border-emerald-100 rounded-lg'
            : 'mt-5 p-4 bg-amber-50 border border-amber-100 rounded-lg';

        twoFactorInfo.querySelector('p').textContent = enabled
            ? 'Demo mode: the setting appears enabled, but no authenticator app or verification process is connected.'
            : 'Two-factor authentication is currently disabled in this demo. Enabling the switch only changes its visual state; no authenticator is connected.';

        showToast(enabled
            ? 'Demo: two-factor authentication enabled visually.'
            : 'Demo: two-factor authentication disabled.');
    });

    // Trusted device removal demo
    document.querySelectorAll('.remove-device').forEach(button => {
        button.addEventListener('click', function () {
            const device = this.dataset.device;

            if (!confirm(`Remove ${device} from this demo device list?`)) return;

            this.closest('.flex.items-center.justify-between').remove();
            showToast(`${device} removed from the demo list.`);
        });
    });
});
</script>

<?php require_once __DIR__ . '/../components/shared/footer.php'; ?>

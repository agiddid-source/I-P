
<?php
$pageTitle = 'My Profile';
$bodyClass = 'bg-gray-50';

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php require_once __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64 min-h-screen flex flex-col">
        <?php require_once __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8 pb-24 lg:pb-8 max-w-7xl w-full mx-auto">

            <!-- Page heading -->
            <div class="mb-8">
                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                    <a href="dashboard.php" class="hover:text-emerald-700">Dashboard</a>
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                    <span class="text-gray-900">My Profile</span>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">My Profile</h1>
                <p class="text-sm text-gray-500 mt-1">
                    Manage your personal information and account details.
                </p>
            </div>

            <!-- Profile overview -->
            <section class="bg-white border border-gray-200 rounded-xl overflow-hidden mb-6">
                <div class="h-28 bg-gradient-to-r from-[#0B1F33] to-[#163A59]"></div>

                <div class="px-5 sm:px-7 pb-6">
                    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 -mt-10">
                        <div class="flex items-end gap-4">
                            <div class="w-20 h-20 rounded-2xl bg-emerald-100 border-4 border-white flex items-center justify-center text-emerald-800 text-2xl font-bold shadow-sm">
                                JD
                            </div>

                            <div class="pb-1">
                                <h2 class="text-xl font-bold text-gray-900">John Doe</h2>
                                <p class="text-sm text-gray-500">Investor ID: INV-2026-00482</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 pb-1">
                            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                Verified account
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-7 pt-5 border-t border-gray-100">
                        <div>
                            <p class="text-xs text-gray-500">Member since</p>
                            <p class="text-sm font-semibold text-gray-900 mt-1">January 2026</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Account type</p>
                            <p class="text-sm font-semibold text-gray-900 mt-1">Individual Investor</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Account status</p>
                            <p class="text-sm font-semibold text-emerald-700 mt-1">Active</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Profile content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Main profile form -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Personal information -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Personal information</h3>
                                <p class="text-xs text-gray-500 mt-1">Your basic identity details.</p>
                            </div>
                            <i class="fa-regular fa-user text-gray-400 text-lg"></i>
                        </div>

                        <form id="personalInfoForm" class="p-5 sm:p-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="firstName">First name</label>
                                    <input type="text" id="firstName" value="John" required
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="lastName">Last name</label>
                                    <input type="text" id="lastName" value="Doe" required
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="middleName">Middle name</label>
                                    <input type="text" id="middleName" value="Michael"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="dateOfBirth">Date of birth</label>
                                    <input type="date" id="dateOfBirth" value="1992-06-15"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="nationality">Nationality</label>
                                    <select id="nationality"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                        <option value="United States" selected>United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="occupation">Occupation</label>
                                    <input type="text" id="occupation" value="Business Consultant"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                            </div>

                            <div class="flex justify-end mt-6 pt-5 border-t border-gray-100">
                                <button type="submit" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-[#0B1F33] hover:bg-[#163A59] text-white rounded-lg text-sm font-semibold transition">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </section>

                    <!-- Contact information -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Contact information</h3>
                                <p class="text-xs text-gray-500 mt-1">Your registered email and phone number.</p>
                            </div>
                            <i class="fa-regular fa-address-book text-gray-400 text-lg"></i>
                        </div>

                        <form id="contactInfoForm" class="p-5 sm:p-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email address</label>
                                    <input type="email" id="email" value="john.doe@example.com" required
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                    <p class="text-xs text-emerald-700 mt-2">
                                        <i class="fa-solid fa-circle-check mr-1"></i> Verified email
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="phone">Phone number</label>
                                    <input type="tel" id="phone" value="+1 202 555 0148" required
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                    <p class="text-xs text-emerald-700 mt-2">
                                        <i class="fa-solid fa-circle-check mr-1"></i> Verified phone
                                    </p>
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="alternatePhone">Alternative phone number <span class="text-gray-400 font-normal">(Optional)</span></label>
                                    <input type="tel" id="alternatePhone" placeholder="Enter an alternative phone number"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                            </div>

                            <div class="flex justify-end mt-6 pt-5 border-t border-gray-100">
                                <button type="submit" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-[#0B1F33] hover:bg-[#163A59] text-white rounded-lg text-sm font-semibold transition">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </section>

                    <!-- Address information -->
                    <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">
                        <div class="px-5 sm:px-6 py-5 border-b border-gray-100 flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900">Residential address</h3>
                                <p class="text-xs text-gray-500 mt-1">Your current residential address.</p>
                            </div>
                            <i class="fa-solid fa-location-dot text-gray-400 text-lg"></i>
                        </div>

                        <form id="addressForm" class="p-5 sm:p-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                                <div class="sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="addressLine">Street address</label>
                                    <input type="text" id="addressLine" value="125 Market Street"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="city">City</label>
                                    <input type="text" id="city" value="Washington"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="state">State / Province</label>
                                    <input type="text" id="state" value="District of Columbia"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="postalCode">Postal code</label>
                                    <input type="text" id="postalCode" value="20001"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="country">Country</label>
                                    <select id="country"
                                        class="w-full px-3.5 py-2.5 border border-gray-200 rounded-lg text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500">
                                        <option selected>United States</option>
                                        <option>United Kingdom</option>
                                        <option>Nigeria</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                            </div>

                            <div class="flex justify-end mt-6 pt-5 border-t border-gray-100">
                                <button type="submit" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-[#0B1F33] hover:bg-[#163A59] text-white rounded-lg text-sm font-semibold transition">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </section>

                </div>

                <!-- Sidebar information -->
                <aside class="space-y-6">

                    <!-- Account information -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">
                        <h3 class="font-semibold text-gray-900">Account information</h3>
                        <p class="text-xs text-gray-500 mt-1">Your investor account details.</p>

                        <div class="space-y-4 mt-5">
                            <div>
                                <p class="text-xs text-gray-500">Investor ID</p>
                                <div class="flex items-center justify-between gap-2 mt-1">
                                    <p class="text-sm font-semibold text-gray-900">INV-2026-00482</p>
                                    <button type="button" id="copyInvestorId" class="text-gray-400 hover:text-emerald-700" title="Copy investor ID">
                                        <i class="fa-regular fa-copy"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 pt-4">
                                <p class="text-xs text-gray-500">Account type</p>
                                <p class="text-sm font-semibold text-gray-900 mt-1">Individual Investor</p>
                            </div>

                            <div class="border-t border-gray-100 pt-4">
                                <p class="text-xs text-gray-500">Preferred currency</p>
                                <p class="text-sm font-semibold text-gray-900 mt-1">USD — US Dollar</p>
                            </div>

                            <div class="border-t border-gray-100 pt-4">
                                <p class="text-xs text-gray-500">Registration date</p>
                                <p class="text-sm font-semibold text-gray-900 mt-1">January 12, 2026</p>
                            </div>
                        </div>
                    </section>

                    <!-- Verification status -->
                    <section class="bg-white border border-gray-200 rounded-xl p-5">
                        <h3 class="font-semibold text-gray-900">Verification status</h3>
                        <p class="text-xs text-gray-500 mt-1">Your account verification overview.</p>

                        <div class="space-y-4 mt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
                                        <i class="fa-solid fa-id-card"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Identity verification</span>
                                </div>
                                <span class="text-xs font-semibold text-emerald-700">Verified</span>
                            </div>

                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
                                        <i class="fa-solid fa-house"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Address verification</span>
                                </div>
                                <span class="text-xs font-semibold text-emerald-700">Verified</span>
                            </div>

                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Tax information</span>
                                </div>
                                <span class="text-xs font-semibold text-emerald-700">Submitted</span>
                            </div>
                        </div>
                    </section>

                    <!-- Security shortcut -->
                    <section class="bg-[#0B1F33] rounded-xl p-5 text-white">
                        <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center mb-4">
                            <i class="fa-solid fa-shield-halved text-emerald-300"></i>
                        </div>
                        <h3 class="font-semibold">Protect your account</h3>
                        <p class="text-sm text-gray-300 mt-2 leading-relaxed">
                            Review your password, two-factor authentication and active sessions.
                        </p>
                        <a href="security.php" class="inline-flex items-center gap-2 mt-5 text-sm font-semibold text-emerald-300 hover:text-white">
                            Security settings <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </section>

                </aside>
            </div>

        </main>

        <?php require_once __DIR__ . '/../components/investor/bottom-nav.php'; ?>
    </div>
</div>

<!-- Demo toast -->
<div id="profileToast" class="fixed bottom-6 right-6 z-[100] hidden max-w-sm bg-gray-900 text-white px-4 py-3 rounded-lg shadow-xl flex items-center gap-3">
    <i class="fa-solid fa-circle-check text-emerald-400"></i>
    <span id="profileToastMessage" class="text-sm">Changes saved successfully.</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toast = document.getElementById('profileToast');
    const toastMessage = document.getElementById('profileToastMessage');
    let toastTimeout;

    function showToast(message) {
        toastMessage.textContent = message;
        toast.classList.remove('hidden');

        clearTimeout(toastTimeout);
        toastTimeout = setTimeout(() => {
            toast.classList.add('hidden');
        }, 3000);
    }

    ['personalInfoForm', 'contactInfoForm', 'addressForm'].forEach(formId => {
        document.getElementById(formId).addEventListener('submit', function (event) {
            event.preventDefault();

            if (!this.reportValidity()) return;

            showToast('Demo only: changes are not permanently saved.');
        });
    });

    document.getElementById('copyInvestorId').addEventListener('click', function () {
        const investorId = 'INV-2026-00482';

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(investorId)
                .then(() => showToast('Investor ID copied.'))
                .catch(() => showToast('Unable to copy Investor ID.'));
        } else {
            showToast('Clipboard access is unavailable in this browser context.');
        }
    });
});
</script>

<?php require_once __DIR__ . '/../components/shared/footer.php'; ?>

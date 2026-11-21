
<?php
$pageHeading = $pageHeading ?? 'Dashboard';
$pageSubtitle = $pageSubtitle ?? 'Welcome back to your investment account.';
?>

<header class="sticky top-0 z-30 flex h-20 items-center justify-between border-b border-gray-200 bg-white/95 px-4 backdrop-blur sm:px-6 lg:px-8">

    <!-- Left: Mobile menu + Page heading -->
    <div class="flex min-w-0 items-center gap-4">

        <button id="openSidebar"
                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-200 text-gray-600 transition hover:bg-gray-50 lg:hidden"
                aria-label="Open navigation">
            <i class="fa-solid fa-bars text-lg"></i>
        </button>

        <div class="min-w-0">
            <h1 class="truncate text-lg font-bold text-gray-900 sm:text-xl">
                <?= htmlspecialchars($pageHeading) ?>
            </h1>

            <p class="hidden truncate text-xs text-gray-500 sm:block">
                <?= htmlspecialchars($pageSubtitle) ?>
            </p>
        </div>

    </div>

    <!-- Right: Actions -->
    <div class="flex items-center gap-2 sm:gap-4">

        <!-- Notifications -->
        <a href="<?= BASE_URL ?>/investor/notifications.php"
           class="relative flex h-10 w-10 items-center justify-center rounded-xl text-gray-500 transition hover:bg-gray-100 hover:text-brand"
           aria-label="Notifications">

            <i class="fa-regular fa-bell text-lg"></i>

            <span class="absolute right-2 top-2 h-2 w-2 rounded-full border-2 border-white bg-red-500"></span>
        </a>

        <div class="hidden h-8 w-px bg-gray-200 sm:block"></div>

        <!-- Profile dropdown -->
        <div class="relative">

            <button id="profileDropdownButton"
                    class="flex items-center gap-2 rounded-xl p-1.5 transition hover:bg-gray-50"
                    aria-expanded="false"
                    aria-haspopup="true">

                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-accent-light text-sm font-bold text-accent-dark">
                    JD
                </div>

                <div class="hidden text-left sm:block">
                    <p class="text-sm font-semibold text-gray-900">John Doe</p>
                    <p class="text-xs text-gray-500">Investor</p>
                </div>

                <i class="fa-solid fa-chevron-down hidden text-xs text-gray-400 sm:block"></i>

            </button>

            <!-- Dropdown menu -->
            <div id="profileDropdown"
                 class="absolute right-0 top-full mt-3 hidden w-56 overflow-hidden rounded-xl border border-gray-200 bg-white py-2 shadow-xl">

                <div class="border-b border-gray-100 px-4 py-3">
                    <p class="text-sm font-semibold text-gray-900">John Doe</p>
                    <p class="mt-1 text-xs text-gray-500">john.doe@example.com</p>
                </div>

                <a href="<?= BASE_URL ?>/investor/profile.php"
                   class="flex items-center gap-3 px-4 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-brand">
                    <i class="fa-regular fa-user w-4"></i>
                    My Profile
                </a>

                <a href="<?= BASE_URL ?>/investor/security.php"
                   class="flex items-center gap-3 px-4 py-3 text-sm text-gray-600 transition hover:bg-gray-50 hover:text-brand">
                    <i class="fa-solid fa-shield-halved w-4"></i>
                    Security Settings
                </a>

                <div class="my-1 border-t border-gray-100"></div>

                <a href="<?= BASE_URL ?>/auth/login.php"
                   class="flex items-center gap-3 px-4 py-3 text-sm text-red-600 transition hover:bg-red-50">
                    <i class="fa-solid fa-right-from-bracket w-4"></i>
                    Sign Out
                </a>

            </div>

        </div>

    </div>

</header>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const dropdownButton = document.getElementById('profileDropdownButton');
    const dropdown = document.getElementById('profileDropdown');

    // ...existing dropdown functionality...

});
</script>

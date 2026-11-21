
<?php
$currentPage = $currentPage ?? '';
?>

<aside id="investorSidebar"
       class="fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full flex-col border-r border-gray-200 bg-white transition-transform duration-300 lg:translate-x-0">

    <!-- Brand -->
    <div class="flex h-20 items-center justify-between border-b border-gray-100 px-6">
        <a href="<?= BASE_URL ?>/investor/dashboard.php"
           class="flex items-center gap-2 text-xl font-bold tracking-tight text-brand">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand text-white">
                <i class="fa-solid fa-chart-line"></i>
            </span>
            InvestGlobal
        </a>

        <button id="closeSidebar"
                class="rounded-lg p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-700 lg:hidden"
                aria-label="Close navigation">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 space-y-1 overflow-y-auto px-4 py-6">

        <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
            Overview
        </p>

        <a href="<?= BASE_URL ?>/investor/dashboard.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'dashboard' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-grid-2 w-5 text-center"></i>
            Dashboard
        </a>

        <a href="<?= BASE_URL ?>/investor/portfolio.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'portfolio' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-chart-pie w-5 text-center"></i>
            My Portfolio
        </a>

        <a href="<?= BASE_URL ?>/investor/holdings.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'holdings' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-wallet w-5 text-center"></i>
            My Holdings
        </a>

        <p class="mb-3 mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
            Investments
        </p>

        <a href="<?= BASE_URL ?>/investor/investments.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'investments' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-magnifying-glass-chart w-5 text-center"></i>
            Explore Investments
        </a>

        <a href="<?= BASE_URL ?>/investor/transactions.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'transactions' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-arrow-right-arrow-left w-5 text-center"></i>
            Transactions
        </a>

        <a href="<?= BASE_URL ?>/investor/redemptions.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'redemptions' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-money-bill-transfer w-5 text-center"></i>
            Redemptions
        </a>

        <p class="mb-3 mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
            Cash Management
        </p>

        <a href="<?= BASE_URL ?>/investor/cash.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'cash' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-building-columns w-5 text-center"></i>
            Cash Account
        </a>

        <a href="<?= BASE_URL ?>/investor/withdrawals.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'withdrawals' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-money-bill-wave w-5 text-center"></i>
            Withdrawals
        </a>

        <p class="mb-3 mt-8 px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">
            Account
        </p>

        <a href="<?= BASE_URL ?>/investor/documents.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'documents' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-folder-open w-5 text-center"></i>
            Documents
        </a>

        <a href="<?= BASE_URL ?>/investor/notifications.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'notifications' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-bell w-5 text-center"></i>
            Notifications
        </a>

        <a href="<?= BASE_URL ?>/investor/profile.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'profile' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-user-gear w-5 text-center"></i>
            My Profile
        </a>

        <a href="<?= BASE_URL ?>/investor/security.php"
           class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium <?= $currentPage === 'security' ? 'bg-accent-light text-accent-dark' : 'text-gray-600 hover:bg-gray-50' ?>">
            <i class="fa-solid fa-shield-halved w-5 text-center"></i>
            Security
        </a>

    </nav>

    <!-- Account footer -->
    <div class="border-t border-gray-100 p-4">
        <div class="flex items-center gap-3 rounded-xl bg-gray-50 p-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-brand text-sm font-bold text-white">
                JD
            </div>

            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-semibold text-gray-900">John Doe</p>
                <p class="truncate text-xs text-gray-500">Investor account</p>
            </div>

            <a href="<?= BASE_URL ?>/auth/login.php"
               class="text-gray-400 transition hover:text-red-500"
               title="Sign out">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </div>

</aside>

<!-- Mobile overlay -->
<div id="sidebarOverlay"
     class="fixed inset-0 z-40 hidden bg-gray-900/40 lg:hidden">
</div>

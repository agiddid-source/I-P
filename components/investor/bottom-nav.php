
<?php
$currentPage = $currentPage ?? '';
?>

<nav class="fixed inset-x-0 bottom-0 z-30 border-t border-gray-200 bg-white px-2 pb-[env(safe-area-inset-bottom)] lg:hidden">

    <div class="mx-auto flex max-w-xl items-center justify-around">

        <!-- Home -->
        <a href="<?= BASE_URL ?>/investor/dashboard.php"
           class="flex min-w-0 flex-1 flex-col items-center gap-1 py-3 text-xs font-medium <?= $currentPage === 'dashboard' ? 'text-accent-dark' : 'text-gray-400' ?>">
            <i class="fa-solid fa-house text-lg"></i>
            <span>Home</span>
        </a>

        <!-- Explore -->
        <a href="<?= BASE_URL ?>/investor/investments.php"
           class="flex min-w-0 flex-1 flex-col items-center gap-1 py-3 text-xs font-medium <?= $currentPage === 'investments' ? 'text-accent-dark' : 'text-gray-400' ?>">
            <i class="fa-solid fa-chart-line text-lg"></i>
            <span>Explore</span>
        </a>

        <!-- Portfolio -->
        <a href="<?= BASE_URL ?>/investor/portfolio.php"
           class="flex min-w-0 flex-1 flex-col items-center gap-1 py-3 text-xs font-medium <?= $currentPage === 'portfolio' ? 'text-accent-dark' : 'text-gray-400' ?>">
            <i class="fa-solid fa-briefcase text-lg"></i>
            <span>Portfolio</span>
        </a>

        <!-- Cash -->
        <a href="<?= BASE_URL ?>/investor/cash.php"
           class="flex min-w-0 flex-1 flex-col items-center gap-1 py-3 text-xs font-medium <?= $currentPage === 'cash' ? 'text-accent-dark' : 'text-gray-400' ?>">
            <i class="fa-solid fa-wallet text-lg"></i>
            <span>Cash</span>
        </a>

        <!-- Profile -->
        <a href="<?= BASE_URL ?>/investor/profile.php"
           class="flex min-w-0 flex-1 flex-col items-center gap-1 py-3 text-xs font-medium <?= $currentPage === 'profile' ? 'text-accent-dark' : 'text-gray-400' ?>">
            <i class="fa-solid fa-user text-lg"></i>
            <span>Profile</span>
        </a>

    </div>

</nav>


<?php
$pageTitle = 'Notifications';
$bodyClass = 'bg-gray-50';

require_once __DIR__ . '/../config/app.php';

$notifications = [
    [
        'id' => 1,
        'category' => 'Investments',
        'title' => 'Investment confirmed',
        'message' => 'Your investment in Global Income Fund has been successfully confirmed.',
        'time' => '10 minutes ago',
        'date' => 'Today',
        'icon' => 'fa-chart-line',
        'color' => 'emerald',
        'read' => false,
        'link' => 'order-details.php'
    ],
    [
        'id' => 2,
        'category' => 'Cash',
        'title' => 'Funding received',
        'message' => 'Your account funding of $5,000.00 has been recorded successfully.',
        'time' => '2 hours ago',
        'date' => 'Today',
        'icon' => 'fa-wallet',
        'color' => 'blue',
        'read' => false,
        'link' => 'funding-details.php'
    ],
    [
        'id' => 3,
        'category' => 'Account',
        'title' => 'Account verification completed',
        'message' => 'Your identity verification has been reviewed and approved.',
        'time' => 'Yesterday',
        'date' => 'Yesterday',
        'icon' => 'fa-user-check',
        'color' => 'emerald',
        'read' => false,
        'link' => 'profile.php'
    ],
    [
        'id' => 4,
        'category' => 'Investments',
        'title' => 'Investment update available',
        'message' => 'A new performance update is available for your Infrastructure Growth Fund holding.',
        'time' => 'Yesterday',
        'date' => 'Yesterday',
        'icon' => 'fa-chart-pie',
        'color' => 'purple',
        'read' => true,
        'link' => 'holdings.php'
    ],
    [
        'id' => 5,
        'category' => 'Security',
        'title' => 'New sign-in detected',
        'message' => 'A sign-in to your account was detected from a new browser.',
        'time' => '2 days ago',
        'date' => 'Nov 23, 2026',
        'icon' => 'fa-shield-halved',
        'color' => 'amber',
        'read' => true,
        'link' => 'security.php'
    ],
    [
        'id' => 6,
        'category' => 'Cash',
        'title' => 'Withdrawal request received',
        'message' => 'Your withdrawal request of $1,200.00 is awaiting review.',
        'time' => '3 days ago',
        'date' => 'Nov 22, 2026',
        'icon' => 'fa-arrow-up-from-bracket',
        'color' => 'blue',
        'read' => true,
        'link' => 'withdrawals.php'
    ],
    [
        'id' => 7,
        'category' => 'Account',
        'title' => 'Welcome to InvestGlobal',
        'message' => 'Your investor account is ready. Explore available opportunities from your dashboard.',
        'time' => '1 week ago',
        'date' => 'Nov 18, 2026',
        'icon' => 'fa-handshake',
        'color' => 'purple',
        'read' => true,
        'link' => 'dashboard.php'
    ]
];

require_once __DIR__ . '/../components/shared/head.php';
?>

<div class="min-h-screen">
    <?php require_once __DIR__ . '/../components/investor/sidebar.php'; ?>

    <div class="lg:pl-64 min-h-screen flex flex-col">
        <?php require_once __DIR__ . '/../components/investor/topbar.php'; ?>

        <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8 pb-24 lg:pb-8 max-w-7xl w-full mx-auto">

            <!-- Page heading -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div>
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <a href="dashboard.php" class="hover:text-emerald-700">Dashboard</a>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                        <span class="text-gray-900">Notifications</span>
                    </div>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                        Notifications
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Stay updated on your account and investments.
                    </p>
                </div>

                <button
                    type="button"
                    id="markAllRead"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2.5 border border-gray-200 bg-white rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 transition"
                >
                    <i class="fa-solid fa-check-double"></i>
                    Mark all as read
                </button>
            </div>

            <!-- Summary cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total notifications</p>
                            <p id="totalCount" class="text-2xl font-bold text-gray-900 mt-2">7</p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-gray-100 text-gray-600 flex items-center justify-center">
                            <i class="fa-regular fa-bell text-lg"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Unread</p>
                            <p id="unreadCount" class="text-2xl font-bold text-gray-900 mt-2">3</p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-lg"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Read</p>
                            <p id="readCount" class="text-2xl font-bold text-gray-900 mt-2">4</p>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-700 flex items-center justify-center">
                            <i class="fa-solid fa-envelope-open text-lg"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Notification list container -->
            <section class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                <!-- Filters -->
                <div class="p-4 sm:p-5 border-b border-gray-200">
                    <div class="flex flex-col lg:flex-row gap-3 lg:items-center lg:justify-between">

                        <div class="relative w-full lg:max-w-sm">
                            <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input
                                type="search"
                                id="notificationSearch"
                                placeholder="Search notifications..."
                                class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500"
                            >
                        </div>

                        <div class="flex flex-wrap items-center gap-2">
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium bg-gray-900 text-white" data-filter="All">
                                All
                            </button>
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100" data-filter="Unread">
                                Unread
                            </button>
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100" data-filter="Investments">
                                Investments
                            </button>
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100" data-filter="Cash">
                                Cash
                            </button>
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100" data-filter="Account">
                                Account
                            </button>
                            <button class="notification-filter px-3.5 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100" data-filter="Security">
                                Security
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Notification list -->
                <div id="notificationList" class="divide-y divide-gray-100">

                    <?php foreach ($notifications as $notification): ?>
                        <article
                            class="notification-item p-4 sm:p-5 hover:bg-gray-50/70 transition"
                            data-id="<?= $notification['id'] ?>"
                            data-category="<?= htmlspecialchars($notification['category']) ?>"
                            data-title="<?= htmlspecialchars(strtolower($notification['title'])) ?>"
                            data-message="<?= htmlspecialchars(strtolower($notification['message'])) ?>"
                            data-read="<?= $notification['read'] ? 'true' : 'false' ?>"
                        >
                            <div class="flex gap-3 sm:gap-4">

                                <div class="w-11 h-11 shrink-0 rounded-xl flex items-center justify-center
                                    <?php
                                    echo match ($notification['color']) {
                                        'emerald' => 'bg-emerald-50 text-emerald-700',
                                        'blue' => 'bg-blue-50 text-blue-700',
                                        'purple' => 'bg-purple-50 text-purple-700',
                                        'amber' => 'bg-amber-50 text-amber-700',
                                        default => 'bg-gray-100 text-gray-600'
                                    };
                                    ?>">
                                    <i class="fa-solid <?= htmlspecialchars($notification['icon']) ?> text-base"></i>
                                </div>

                                <div class="flex-1 min-w-0">

                                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-2">
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <h3 class="notification-title text-sm font-semibold text-gray-900">
                                                    <?= htmlspecialchars($notification['title']) ?>
                                                </h3>

                                                <span class="unread-indicator <?= $notification['read'] ? 'hidden' : '' ?> w-2 h-2 rounded-full bg-emerald-500"></span>
                                            </div>

                                            <p class="text-sm text-gray-500 leading-relaxed mt-1">
                                                <?= htmlspecialchars($notification['message']) ?>
                                            </p>
                                        </div>

                                        <span class="text-xs text-gray-400 whitespace-nowrap">
                                            <?= htmlspecialchars($notification['time']) ?>
                                        </span>
                                    </div>

                                    <div class="flex flex-wrap items-center justify-between gap-3 mt-3">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs font-medium text-gray-500 bg-gray-100 px-2.5 py-1 rounded-full">
                                                <?= htmlspecialchars($notification['category']) ?>
                                            </span>
                                            <span class="notification-status text-xs <?= $notification['read'] ? 'text-gray-400' : 'text-emerald-700 font-medium' ?>">
                                                <?= $notification['read'] ? 'Read' : 'Unread' ?>
                                            </span>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <button
                                                type="button"
                                                class="mark-read text-xs font-semibold text-gray-500 hover:text-emerald-700 <?= $notification['read'] ? 'hidden' : '' ?>"
                                            >
                                                Mark as read
                                            </button>

                                            <a
                                                href="<?= htmlspecialchars($notification['link']) ?>"
                                                class="text-xs font-semibold text-emerald-700 hover:text-emerald-800"
                                            >
                                                View details <i class="fa-solid fa-arrow-right ml-1"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>

                </div>

                <!-- Empty state -->
                <div id="emptyNotifications" class="hidden px-6 py-16 text-center">
                    <div class="w-14 h-14 rounded-full bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-4">
                        <i class="fa-regular fa-bell-slash text-xl"></i>
                    </div>
                    <h3 class="text-base font-semibold text-gray-900">No notifications found</h3>
                    <p class="text-sm text-gray-500 mt-1">
                        Try changing your search or filter.
                    </p>
                    <button
                        type="button"
                        id="clearNotificationFilters"
                        class="mt-4 text-sm font-semibold text-emerald-700 hover:text-emerald-800"
                    >
                        Clear filters
                    </button>
                </div>

                <!-- Footer -->
                <div class="px-5 py-4 border-t border-gray-100 flex items-center justify-between">
                    <p class="text-xs text-gray-500" id="notificationResultCount">
                        Showing 7 notifications
                    </p>
                    <span class="text-xs text-gray-400">Demo notification centre</span>
                </div>

            </section>

            <!-- Notification preferences shortcut -->
            <div class="mt-6 bg-emerald-50 border border-emerald-100 rounded-xl p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-white text-emerald-700 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Manage notification preferences</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            Review your account security and notification settings.
                        </p>
                    </div>
                </div>

                <a
                    href="security.php"
                    class="inline-flex items-center justify-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-800 whitespace-nowrap"
                >
                    View settings <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </main>

        <?php require_once __DIR__ . '/../components/investor/bottom-nav.php'; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const items = Array.from(document.querySelectorAll('.notification-item'));
    const searchInput = document.getElementById('notificationSearch');
    const filterButtons = document.querySelectorAll('.notification-filter');
    const emptyState = document.getElementById('emptyNotifications');
    const resultCount = document.getElementById('notificationResultCount');

    let activeFilter = 'All';

    function updateSummary() {
        const unread = items.filter(item => item.dataset.read === 'false').length;
        const read = items.length - unread;

        document.getElementById('totalCount').textContent = items.length;
        document.getElementById('unreadCount').textContent = unread;
        document.getElementById('readCount').textContent = read;
    }

    function applyFilters() {
        const search = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        items.forEach(item => {
            const category = item.dataset.category;
            const isUnread = item.dataset.read === 'false';

            const matchesFilter =
                activeFilter === 'All' ||
                (activeFilter === 'Unread' && isUnread) ||
                category === activeFilter;

            const matchesSearch =
                item.dataset.title.includes(search) ||
                item.dataset.message.includes(search) ||
                category.toLowerCase().includes(search);

            const visible = matchesFilter && matchesSearch;

            item.classList.toggle('hidden', !visible);

            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
        resultCount.textContent = `Showing ${visibleCount} notification${visibleCount === 1 ? '' : 's'}`;
    }

    function markAsRead(item) {
        item.dataset.read = 'true';

        const indicator = item.querySelector('.unread-indicator');
        const status = item.querySelector('.notification-status');
        const button = item.querySelector('.mark-read');

        indicator.classList.add('hidden');
        status.textContent = 'Read';
        status.className = 'notification-status text-xs text-gray-400';
        button.classList.add('hidden');

        updateSummary();
        applyFilters();
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            activeFilter = this.dataset.filter;

            filterButtons.forEach(filter => {
                filter.classList.remove('bg-gray-900', 'text-white');
                filter.classList.add('text-gray-600', 'hover:bg-gray-100');
            });

            this.classList.add('bg-gray-900', 'text-white');
            this.classList.remove('text-gray-600', 'hover:bg-gray-100');

            applyFilters();
        });
    });

    searchInput.addEventListener('input', applyFilters);

    document.querySelectorAll('.mark-read').forEach(button => {
        button.addEventListener('click', function () {
            markAsRead(this.closest('.notification-item'));
        });
    });

    document.getElementById('markAllRead').addEventListener('click', function () {
        items.forEach(item => markAsRead(item));
    });

    document.getElementById('clearNotificationFilters').addEventListener('click', function () {
        searchInput.value = '';
        activeFilter = 'All';

        filterButtons.forEach(button => {
            const active = button.dataset.filter === 'All';
            button.classList.toggle('bg-gray-900', active);
            button.classList.toggle('text-white', active);
            button.classList.toggle('text-gray-600', !active);
            button.classList.toggle('hover:bg-gray-100', !active);
        });

        applyFilters();
    });

    updateSummary();
    applyFilters();
});
</script>

<?php require_once __DIR__ . '/../components/shared/footer.php'; ?>

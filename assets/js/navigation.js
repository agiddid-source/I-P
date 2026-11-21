
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================
       INVESTOR MOBILE SIDEBAR
    ===================================== */

    const sidebar = document.getElementById('investorSidebar');
    const overlay = document.getElementById('sidebarOverlay');

    const openButton = document.getElementById('openSidebar');
    const closeButton = document.getElementById('closeSidebar');

    function openSidebar() {
        if (!sidebar || !overlay) return;

        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');

        document.body.classList.add('overflow-hidden');

        openButton?.setAttribute('aria-expanded', 'true');
    }

    function closeSidebar() {
        if (!sidebar || !overlay) return;

        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');

        openButton?.setAttribute('aria-expanded', 'false');
    }

    openButton?.addEventListener('click', openSidebar);
    closeButton?.addEventListener('click', closeSidebar);
    overlay?.addEventListener('click', closeSidebar);

    sidebar?.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeSidebar);
    });


    /* =====================================
       INVESTOR PROFILE DROPDOWN
    ===================================== */

    const dropdownButton = document.getElementById('profileDropdownButton');
    const dropdown = document.getElementById('profileDropdown');

    function closeDropdown() {
        dropdown?.classList.add('hidden');
        dropdownButton?.setAttribute('aria-expanded', 'false');
    }

    dropdownButton?.addEventListener('click', function (event) {
        event.stopPropagation();

        const isOpen = !dropdown.classList.contains('hidden');

        dropdown.classList.toggle('hidden');

        dropdownButton.setAttribute(
            'aria-expanded',
            String(!isOpen)
        );
    });

    document.addEventListener('click', function (event) {
        if (
            dropdown &&
            dropdownButton &&
            !dropdown.contains(event.target) &&
            !dropdownButton.contains(event.target)
        ) {
            closeDropdown();
        }
    });


    /* =====================================
       GLOBAL KEYBOARD INTERACTIONS
    ===================================== */

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            closeSidebar();
            closeDropdown();
        }

    });

});


<?php
$activePage = $activePage ?? '';
?>

<header class="sticky top-0 z-50 bg-white border-b border-border">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="h-20 flex items-center justify-between">

            <!-- Brand -->
            <a href="<?= BASE_URL ?>/public/index.php"
               class="flex items-center gap-2">

                <div class="w-10 h-10 rounded-xl bg-brand flex items-center justify-center">
                    <i class="fa-solid fa-chart-line text-white text-lg"></i>
                </div>

                <span class="text-xl font-extrabold tracking-tight text-brand">
                    Invest<span class="text-accent">Global</span>
                </span>

            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8">

                <a href="<?= BASE_URL ?>/public/index.php"
                   class="<?= $activePage === 'home' ? 'text-accent' : 'text-gray-600 hover:text-brand' ?> text-sm font-semibold transition">
                    Home
                </a>

                <a href="<?= BASE_URL ?>/public/investments.php"
                   class="<?= $activePage === 'investments' ? 'text-accent' : 'text-gray-600 hover:text-brand' ?> text-sm font-semibold transition">
                    Investments
                </a>

                <a href="<?= BASE_URL ?>/public/how-it-works.php"
                   class="<?= $activePage === 'how-it-works' ? 'text-accent' : 'text-gray-600 hover:text-brand' ?> text-sm font-semibold transition">
                    How It Works
                </a>

                <a href="<?= BASE_URL ?>/public/about.php"
                   class="<?= $activePage === 'about' ? 'text-accent' : 'text-gray-600 hover:text-brand' ?> text-sm font-semibold transition">
                    About
                </a>

                <a href="<?= BASE_URL ?>/public/resources.php"
                   class="<?= $activePage === 'resources' ? 'text-accent' : 'text-gray-600 hover:text-brand' ?> text-sm font-semibold transition">
                    Resources
                </a>

            </nav>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex items-center gap-3">

                <a href="<?= BASE_URL ?>/auth/login.php"
                   class="px-4 py-2.5 text-sm font-semibold text-brand hover:text-accent transition">
                    Log In
                </a>

                <a href="<?= BASE_URL ?>/auth/register.php"
                   class="btn btn-primary">
                    Get Started
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>

            </div>

            <!-- Mobile Navigation -->
            <details class="relative lg:hidden">

                <summary class="list-none cursor-pointer w-11 h-11 rounded-lg border border-border flex items-center justify-center text-brand">
                    <i class="fa-solid fa-bars text-lg"></i>
                </summary>

                <div class="absolute right-0 top-14 w-72 bg-white border border-border rounded-xl shadow-dropdown p-5">

                    <nav class="flex flex-col gap-1">

                        <a href="<?= BASE_URL ?>/public/index.php"
                           class="px-3 py-3 rounded-lg text-sm font-semibold text-gray-700 hover:bg-canvas">
                            Home
                        </a>

                        <a href="<?= BASE_URL ?>/public/investments.php"
                           class="px-3 py-3 rounded-lg text-sm font-semibold text-gray-700 hover:bg-canvas">
                            Investments
                        </a>

                        <a href="<?= BASE_URL ?>/public/how-it-works.php"
                           class="px-3 py-3 rounded-lg text-sm font-semibold text-gray-700 hover:bg-canvas">
                            How It Works
                        </a>

                        <a href="<?= BASE_URL ?>/public/about.php"
                           class="px-3 py-3 rounded-lg text-sm font-semibold text-gray-700 hover:bg-canvas">
                            About
                        </a>

                        <a href="<?= BASE_URL ?>/public/resources.php"
                           class="px-3 py-3 rounded-lg text-sm font-semibold text-gray-700 hover:bg-canvas">
                            Resources
                        </a>

                    </nav>

                    <div class="border-t border-border mt-4 pt-4 flex flex-col gap-3">

                        <a href="<?= BASE_URL ?>/auth/login.php"
                           class="text-center py-2.5 text-sm font-semibold text-brand">
                            Log In
                        </a>

                        <a href="<?= BASE_URL ?>/auth/register.php"
                           class="btn btn-primary w-full">
                            Get Started
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>

                    </div>

                </div>

            </details>

        </div>

    </div>

</header>

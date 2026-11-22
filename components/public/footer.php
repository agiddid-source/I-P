<footer class="bg-brand text-white mt-20">

    <div class="max-w-7xl mx-auto px-5 lg:px-8 py-16">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Brand Information -->
            <div class="lg:col-span-1">

                <a href="<?= BASE_URL ?>/public/index.php"
                   class="inline-flex items-center gap-2 mb-5">

                    <?php
                    $logoVariant = 'light';
                    $logoClass   = 'h-32 w-auto';
                    include ROOT_PATH . '/components/shared/logo.php';
                    ?>

                </a>

                <p class="text-sm text-gray-300 leading-7 max-w-xs">
                    Explore investment opportunities and manage your investment journey through one connected platform.
                </p>

                <div class="flex items-center gap-4 mt-6">

                    <a href="#" aria-label="LinkedIn"
                       class="text-gray-300 hover:text-gold transition">
                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                    </a>

                    <a href="#" aria-label="X"
                       class="text-gray-300 hover:text-gold transition">
                        <i class="fa-brands fa-x-twitter text-lg"></i>
                    </a>

                    <a href="#" aria-label="Instagram"
                       class="text-gray-300 hover:text-gold transition">
                        <i class="fa-brands fa-instagram text-lg"></i>
                    </a>

                </div>

            </div>

            <!-- Platform -->
            <div>

                <h3 class="font-bold text-sm mb-5">
                    Platform
                </h3>

                <ul class="space-y-4 text-sm text-gray-300">

                    <li>
                        <a href="<?= BASE_URL ?>/public/index.php"
                           class="hover:text-gold transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>/public/investments.php"
                           class="hover:text-gold transition">
                            Investments
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>/public/how-it-works.php"
                           class="hover:text-gold transition">
                            How It Works
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>/public/about.php"
                           class="hover:text-gold transition">
                            About Us
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Resources -->
            <div>

                <h3 class="font-bold text-sm mb-5">
                    Resources
                </h3>

                <ul class="space-y-4 text-sm text-gray-300">

                    <li>
                        <a href="<?= BASE_URL ?>/public/resources.php"
                           class="hover:text-gold transition">
                            Resources & Insights
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>/public/disclosures.php"
                           class="hover:text-gold transition">
                            Risk Disclosures
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-gold transition">
                            Help Centre
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-gold transition">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Account -->
            <div>

                <h3 class="font-bold text-sm mb-5">
                    Your Account
                </h3>

                <ul class="space-y-4 text-sm text-gray-300">

                    <li>
                        <a href="<?= BASE_URL ?>/auth/login.php"
                           class="hover:text-gold transition">
                            Log In
                        </a>
                    </li>

                    <li>
                        <a href="<?= BASE_URL ?>/auth/register.php"
                           class="hover:text-gold transition">
                            Create Account
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <!-- Legal Notice -->
        <div class="border-t border-white/10 mt-14 pt-8">

            <p class="text-xs text-gray-400 leading-6 max-w-4xl mb-6">
                Investment products involve risk, including possible loss of principal.
                Returns, where displayed, are not guaranteed unless expressly stated
                in legally approved product documentation. Product availability and
                eligibility depend on applicable jurisdictional requirements.
            </p>

            <div class="flex flex-col md:flex-row justify-between gap-4 text-xs text-gray-400">

                <p>
                    &copy; <?= date('Y') ?> InvestGlobal. All rights reserved.
                </p>

                <div class="flex flex-wrap gap-5">

                    <a href="#" class="hover:text-white transition">
                        Privacy Policy
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Terms of Service
                    </a>

                    <a href="<?= BASE_URL ?>/public/disclosures.php"
                       class="hover:text-white transition">
                        Disclosures
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>
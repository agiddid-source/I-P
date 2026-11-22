<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Create Account | InvestGlobal';
$bodyClass = 'min-h-screen bg-canvas';

// Country code => display name. Flags are loaded from flagcdn.com using the lowercase code.
// "OTHER" has no flag, so the globe icon stays in the field for it.
$countries = [
    'AU'    => 'Australia',
    'CA'    => 'Canada',
    'FR'    => 'France',
    'DE'    => 'Germany',
    'GH'    => 'Ghana',
    'IN'    => 'India',
    'KE'    => 'Kenya',
    'NG'    => 'Nigeria',
    'SG'    => 'Singapore',
    'ZA'    => 'South Africa',
    'AE'    => 'United Arab Emirates',
    'GB'    => 'United Kingdom',
    'US'    => 'United States',
    'OTHER' => 'Other',
];

include ROOT_PATH . '/components/shared/head.php';
?>

<main class="min-h-screen">
    <div class="grid min-h-screen lg:grid-cols-2">

        <!-- Brand panel -->
        <section class="relative hidden overflow-hidden bg-brand p-10 text-white lg:flex lg:flex-col lg:justify-between xl:p-14">

            <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                <?php
                $logoVariant = 'light';
                $logoClass   = 'h-28 w-auto';
                include ROOT_PATH . '/components/shared/logo.php';
                ?>
            </a>

            <div class="relative z-10 max-w-xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 px-3 py-1 text-sm text-white/80">
                    <i class="fa-solid fa-globe"></i>
                    Your investment journey starts here
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight xl:text-5xl">
                    Make Informed Decisions,<br>
                    Build Towards Your Goals.
                </h1>

                <p class="mt-5 max-w-lg text-lg leading-8 text-white/70">
                    Create your account to explore investment opportunities
                    and manage your financial journey in one place.
                </p>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-white/50">
                <span>&copy; <?= date('Y') ?> InvestGlobal</span>
            </div>

            <div class="pointer-events-none absolute -right-24 -top-20 h-96 w-96 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-8 -top-4 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-white/5"></div>
        </section>

        <!-- Registration form -->
        <section class="flex items-center justify-center px-4 py-10 sm:px-8">
            <div class="w-full max-w-md">

                <div class="mb-10 flex items-center justify-between lg:hidden">
                    <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center">
                        <?php
                        $logoVariant = 'default';
                        $logoClass   = 'h-10 w-auto';
                        include ROOT_PATH . '/components/shared/logo.php';
                        ?>
                    </a>

                    <a href="<?= BASE_URL ?>/public/index.php" class="text-sm font-medium text-muted hover:text-brand">
                        Back to site
                    </a>
                </div>

                <div class="mb-7">
                    <p class="text-sm font-semibold uppercase tracking-wider text-accent-dark">
                        Get started
                    </p>

                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-brand">
                        Create your account
                    </h2>

                    <p class="mt-3 text-muted">
                        Enter your details to get started with InvestGlobal.
                    </p>
                </div>

                <div id="registerNotice" class="mb-5 hidden rounded-xl border px-4 py-3 text-sm" role="status"></div>

                <form id="registerForm" class="space-y-4" novalidate>

                    <!-- Full name -->
                    <div>
                        <label for="fullName" class="mb-2 block text-sm font-medium text-gray-700">
                            Full name
                        </label>

                        <input
                            type="text"
                            id="fullName"
                            name="fullName"
                            autocomplete="name"
                            placeholder="Enter your full name"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="nameError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email address
                        </label>

                        <div class="relative">
                            <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                autocomplete="email"
                                placeholder="you@example.com"
                                required
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                        </div>

                        <p id="emailError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Country -->
                    <div>
                        <label for="countryButton" id="countryLabelText" class="mb-2 block text-sm font-medium text-gray-700">
                            Country of residence
                        </label>

                        <div class="relative" id="countryField">

                            <!-- Native select kept (hidden) so form values and validation keep working -->
                            <select id="country" name="country" required class="sr-only" tabindex="-1" aria-hidden="true">
                                <option value="">Select your country</option>
                                <?php foreach ($countries as $code => $name): ?>
                                    <option value="<?= $code ?>"><?= htmlspecialchars($name) ?></option>
                                <?php endforeach; ?>
                            </select>

                            <!-- Custom select with flags -->
                            <button
                                type="button"
                                id="countryButton"
                                aria-haspopup="listbox"
                                aria-expanded="false"
                                aria-controls="countryMenu"
                                class="flex w-full items-center rounded-xl border border-border bg-white py-3.5 pl-11 pr-10 text-left text-sm outline-none transition focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >
                                <span id="countryIcon" class="pointer-events-none absolute left-4 top-1/2 flex h-5 w-6 -translate-y-1/2 items-center justify-center text-muted">
                                    <i class="fa-solid fa-globe"></i>
                                </span>
                                <span id="countryLabel" class="truncate text-gray-400">Select your country</span>
                            </button>

                            <i class="fa-solid fa-chevron-down pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 text-xs text-muted transition-transform" id="countryChevron"></i>

                            <ul
                                id="countryMenu"
                                role="listbox"
                                tabindex="-1"
                                aria-labelledby="countryLabelText"
                                class="absolute left-0 right-0 z-30 mt-2 hidden max-h-64 overflow-y-auto rounded-xl border border-border bg-white py-1.5 shadow-xl"
                            >
                                <?php foreach ($countries as $code => $name): ?>
                                    <li
                                        role="option"
                                        data-value="<?= $code ?>"
                                        data-name="<?= htmlspecialchars($name) ?>"
                                        aria-selected="false"
                                        class="country-option flex cursor-pointer items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-accent-light"
                                    >
                                        <?php if ($code !== 'OTHER'): ?>
                                            <img
                                                src="https://flagcdn.com/w40/<?= strtolower($code) ?>.png"
                                                srcset="https://flagcdn.com/w80/<?= strtolower($code) ?>.png 2x"
                                                alt=""
                                                width="24"
                                                height="16"
                                                class="h-4 w-6 shrink-0 rounded-[3px] object-cover ring-1 ring-black/10"
                                            >
                                        <?php else: ?>
                                            <span class="flex h-4 w-6 shrink-0 items-center justify-center text-muted">
                                                <i class="fa-solid fa-globe"></i>
                                            </span>
                                        <?php endif; ?>
                                        <span class="flex-1 truncate"><?= htmlspecialchars($name) ?></span>
                                        <i class="country-check fa-solid fa-check hidden text-xs text-accent-dark"></i>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <p id="countryError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                            Password
                        </label>

                        <div class="relative">
                            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-muted"></i>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                autocomplete="new-password"
                                placeholder="Create a password"
                                required
                                class="w-full rounded-xl border border-border bg-white py-3.5 pl-11 pr-12 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                            >

                         <!--   <button
                                type="button"
                                id="togglePassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-muted hover:text-brand"
                                aria-label="Show password"
                            >
                                <i id="passwordIcon" class="fa-regular fa-eye"></i>
                            </button> -->
                        </div>

                        <p class="mt-1.5 text-xs text-muted">
                            Use at least 8 characters, including a number.
                        </p>

                        <p id="passwordError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Confirm password -->
                    <div>
                        <label for="confirmPassword" class="mb-2 block text-sm font-medium text-gray-700">
                            Confirm password
                        </label>

                        <input
                            type="password"
                            id="confirmPassword"
                            name="confirmPassword"
                            autocomplete="new-password"
                            placeholder="Re-enter your password"
                            required
                            class="w-full rounded-xl border border-border bg-white px-4 py-3.5 text-sm outline-none transition placeholder:text-gray-400 focus:border-accent focus:ring-4 focus:ring-accent/10"
                        >

                        <p id="confirmPasswordError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <!-- Terms -->
                    <div>
                        <label class="flex cursor-pointer items-start gap-3 text-sm text-gray-600">
                            <input
                                type="checkbox"
                                id="terms"
                                name="terms"
                                class="mt-1 h-4 w-4 shrink-0 rounded border-border text-accent focus:ring-accent"
                            >

                            <span>
                                I agree to the
                                <a href="<?= BASE_URL ?>/public/disclosures.php" class="font-semibold text-accent-dark hover:underline">
                                    risk disclosures
                                </a>
                                and acknowledge that investing involves risk.
                            </span>
                        </label>

                        <p id="termsError" class="mt-1 hidden text-sm text-red-600"></p>
                    </div>

                    <button type="submit" class="btn btn-primary w-full justify-center py-3.5">
                        Create account
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                    <p class="pt-2 text-center text-sm text-muted">
                        Already have an account?
                        <a href="<?= BASE_URL ?>/auth/login.php" class="font-semibold text-accent-dark hover:underline">
                            Sign in
                        </a>
                    </p>

                </form>

                <div class="mt-7 flex justify-center gap-5 text-xs text-muted">
                    <a href="<?= BASE_URL ?>/public/disclosures.php" class="hover:text-brand">Risk & disclosures</a>
                    <a href="<?= BASE_URL ?>/public/index.php" class="hover:text-brand">Home</a>
                </div>

            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registerForm');
    const password = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const passwordIcon = document.getElementById('passwordIcon');
    const notice = document.getElementById('registerNotice');

    const showError = (id, message) => {
        const element = document.getElementById(id);
        element.textContent = message;
        element.classList.remove('hidden');
    };

    const clearErrors = () => {
        document.querySelectorAll('#registerForm p[id$="Error"]').forEach(element => {
            element.textContent = '';
            element.classList.add('hidden');
        });
    };

    togglePassword.addEventListener('click', () => {
        const showing = password.type === 'text';

        password.type = showing ? 'password' : 'text';

        togglePassword.setAttribute(
            'aria-label',
            showing ? 'Show password' : 'Hide password'
        );

        passwordIcon.className = showing
            ? 'fa-regular fa-eye'
            : 'fa-regular fa-eye-slash';
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        clearErrors();
        notice.classList.add('hidden');

        const fullName = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email');
        const country = document.getElementById('country').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const terms = document.getElementById('terms').checked;

        let valid = true;

        if (fullName.length < 2) {
            showError('nameError', 'Please enter your full name.');
            valid = false;
        }

        if (!email.value.trim() || !email.validity.valid) {
            showError('emailError', 'Enter a valid email address.');
            valid = false;
        }

        if (!country) {
            showError('countryError', 'Select your country of residence.');
            valid = false;
        }

        if (!/^(?=.*\d).{8,}$/.test(password.value)) {
            showError('passwordError', 'Use at least 8 characters and include a number.');
            valid = false;
        }

        if (confirmPassword !== password.value) {
            showError('confirmPasswordError', 'Your passwords do not match.');
            valid = false;
        }

        if (!terms) {
            showError('termsError', 'Please acknowledge the risk disclosures.');
            valid = false;
        }

        if (!valid) return;

        notice.className = 'mb-5 rounded-xl border border-gold/40 bg-gold-light px-4 py-3 text-sm text-brand';
        notice.textContent = 'Prototype only: your details passed the form checks, but no account was created and no information was saved.';
    });
});
</script>

<script>
// Country select with flags
document.addEventListener('DOMContentLoaded', () => {
    const select = document.getElementById('country');
    const field = document.getElementById('countryField');
    const button = document.getElementById('countryButton');
    const menu = document.getElementById('countryMenu');
    const icon = document.getElementById('countryIcon');
    const label = document.getElementById('countryLabel');
    const chevron = document.getElementById('countryChevron');
    const error = document.getElementById('countryError');
    const options = [...menu.querySelectorAll('.country-option')];

    let activeIndex = -1;

    function isOpen() {
        return !menu.classList.contains('hidden');
    }

    function setActive(index) {
        options.forEach((option, i) => {
            option.classList.toggle('bg-accent-light', i === index);
        });
        activeIndex = index;

        if (options[index]) {
            options[index].scrollIntoView({ block: 'nearest' });
        }
    }

    function openMenu() {
        menu.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        chevron.classList.add('rotate-180');

        const selectedIndex = options.findIndex(o => o.dataset.value === select.value);
        setActive(selectedIndex >= 0 ? selectedIndex : 0);
    }

    function closeMenu() {
        menu.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        chevron.classList.remove('rotate-180');
        options.forEach(o => o.classList.remove('bg-accent-light'));
        activeIndex = -1;
    }

    function choose(option) {
        const value = option.dataset.value;
        const name = option.dataset.name;

        // Keep the hidden native select in sync
        select.value = value;
        select.dispatchEvent(new Event('change', { bubbles: true }));

        // Text
        label.textContent = name;
        label.className = 'truncate text-gray-700';

        // Icon: selected country's flag (globe for "Other")
        icon.className = 'pointer-events-none absolute left-4 top-1/2 flex h-5 w-6 -translate-y-1/2 items-center justify-center';
        const flag = option.querySelector('img');

        if (flag) {
            icon.innerHTML = '';
            const img = document.createElement('img');
            img.src = flag.src;
            img.srcset = flag.getAttribute('srcset') || '';
            img.alt = name + ' flag';
            img.width = 24;
            img.height = 16;
            img.className = 'h-4 w-6 rounded-[3px] object-cover ring-1 ring-black/10';
            icon.appendChild(img);
        } else {
            icon.className += ' text-muted';
            icon.innerHTML = '<i class="fa-solid fa-globe"></i>';
        }

        // Selected state in the list
        options.forEach(o => {
            const selected = o === option;
            o.setAttribute('aria-selected', selected ? 'true' : 'false');
            o.querySelector('.country-check').classList.toggle('hidden', !selected);
        });

        if (error) error.classList.add('hidden');

        closeMenu();
        button.focus();
    }

    button.addEventListener('click', () => (isOpen() ? closeMenu() : openMenu()));

    options.forEach((option, index) => {
        option.addEventListener('click', () => choose(option));
        option.addEventListener('mousemove', () => setActive(index));
    });

    button.addEventListener('keydown', (event) => {
        const key = event.key;

        if (!isOpen()) {
            if (['ArrowDown', 'ArrowUp', 'Enter', ' '].includes(key)) {
                event.preventDefault();
                openMenu();
            }
            return;
        }

        if (key === 'ArrowDown') {
            event.preventDefault();
            setActive(Math.min(activeIndex + 1, options.length - 1));
        } else if (key === 'ArrowUp') {
            event.preventDefault();
            setActive(Math.max(activeIndex - 1, 0));
        } else if (key === 'Home') {
            event.preventDefault();
            setActive(0);
        } else if (key === 'End') {
            event.preventDefault();
            setActive(options.length - 1);
        } else if (key === 'Enter' || key === ' ') {
            event.preventDefault();
            if (options[activeIndex]) choose(options[activeIndex]);
        } else if (key === 'Escape' || key === 'Tab') {
            closeMenu();
        } else if (key.length === 1) {
            // Type a letter to jump to a country
            const match = options.findIndex(
                (o, i) => i > activeIndex && o.dataset.name.toLowerCase().startsWith(key.toLowerCase())
            );
            const fallback = options.findIndex(o => o.dataset.name.toLowerCase().startsWith(key.toLowerCase()));
            const target = match >= 0 ? match : fallback;
            if (target >= 0) setActive(target);
        }
    });

    // Close when clicking elsewhere
    document.addEventListener('click', (event) => {
        if (!field.contains(event.target)) closeMenu();
    });
});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
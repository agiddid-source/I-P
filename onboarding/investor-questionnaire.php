<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Investor Questionnaire | InvestGlobal';

include ROOT_PATH . '/components/shared/head.php';
?>

<div class="min-h-screen bg-canvas">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-8 sm:py-12">

        <!-- Brand -->
        <a href="<?= BASE_URL ?>/public/index.php" class="inline-flex items-center mb-10">
            <?php
            $logoVariant = 'default';
            $logoClass   = 'h-11 w-auto';
            include ROOT_PATH . '/components/shared/logo.php';
            ?>
        </a>

        <!-- Progress -->
        <div class="mb-8">
            <div class="flex items-center justify-between text-sm mb-3">
                <span class="font-semibold text-brand">Investor onboarding</span>
                <span class="text-muted">Step 6 of 7</span>
            </div>

            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full w-[85.71%] bg-accent rounded-full"></div>
            </div>

            <div class="flex justify-between mt-2 text-xs text-muted">
                <span>Tax information</span>
                <span>Investor questionnaire</span>
            </div>
        </div>

        <!-- Main Card -->
        <div class="bg-white border border-border rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 sm:p-8 border-b border-border">
                <div class="w-12 h-12 rounded-xl bg-accent-light text-accent-dark flex items-center justify-center text-xl mb-5">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-brand mb-2">
                    Let's understand your investment profile
                </h1>

                <p class="text-muted leading-relaxed">
                    Answer a few questions about your financial goals,
                    investment experience and preferences. This helps establish
                    your investor profile.
                </p>

                <div class="flex items-center gap-2 mt-5 text-xs text-muted">
                    <i class="fa-regular fa-clock"></i>
                    Approximately 5 minutes
                </div>
            </div>

            <form id="questionnaireForm" class="p-6 sm:p-8 space-y-9">

                <!-- 1. Experience -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">01</span>
                        <h2 class="font-semibold text-brand">Investment experience</h2>
                    </div>

                    <div class="space-y-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                How would you describe your investment experience?
                            </label>

                            <div class="space-y-3">
                                <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="experience" value="beginner" required class="mt-1 accent-accent">
                                    <span>
                                        <span class="block text-sm font-medium text-brand">Beginner</span>
                                        <span class="block text-xs text-muted mt-1">I have little or no previous investment experience.</span>
                                    </span>
                                </label>

                                <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="experience" value="intermediate" class="mt-1 accent-accent">
                                    <span>
                                        <span class="block text-sm font-medium text-brand">Intermediate</span>
                                        <span class="block text-xs text-muted mt-1">I have invested before and understand common investment products.</span>
                                    </span>
                                </label>

                                <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="experience" value="experienced" class="mt-1 accent-accent">
                                    <span>
                                        <span class="block text-sm font-medium text-brand">Experienced</span>
                                        <span class="block text-xs text-muted mt-1">I regularly invest and understand different financial instruments.</span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Which investment products have you used before?
                            </label>

                            <p class="text-xs text-muted mb-3">Select all that apply.</p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <?php
                                $products = [
                                    'Stocks and shares',
                                    'Exchange-traded funds (ETFs)',
                                    'Bonds and fixed income',
                                    'Mutual funds',
                                    'Real estate',
                                    'Money market products',
                                    'Private investments',
                                    'None of the above'
                                ];
                                foreach ($products as $product):
                                ?>
                                    <label class="flex items-center gap-3 border border-border rounded-lg p-3 text-sm text-gray-700 cursor-pointer hover:border-accent">
                                        <input type="checkbox" name="products[]" value="<?= htmlspecialchars($product) ?>" class="product-checkbox accent-accent">
                                        <?= htmlspecialchars($product) ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- 2. Objectives -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">02</span>
                        <h2 class="font-semibold text-brand">Investment objectives</h2>
                    </div>

                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        What are your primary investment goals?
                    </label>

                    <p class="text-xs text-muted mb-3">Select all that apply.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <?php
                        $objectives = [
                            'Preserve my capital',
                            'Generate regular income',
                            'Grow my wealth over time',
                            'Save for retirement',
                            'Save for a major purchase',
                            'Diversify my investments'
                        ];
                        foreach ($objectives as $objective):
                        ?>
                            <label class="flex items-center gap-3 border border-border rounded-lg p-3 text-sm text-gray-700 cursor-pointer hover:border-accent">
                                <input type="checkbox" name="objectives[]" value="<?= htmlspecialchars($objective) ?>" class="accent-accent">
                                <?= htmlspecialchars($objective) ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- 3. Risk tolerance -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">03</span>
                        <h2 class="font-semibold text-brand">Risk tolerance</h2>
                    </div>

                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        How comfortable are you with investment risk?
                    </label>

                    <div class="space-y-3">
                        <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="riskTolerance" value="low" required class="mt-1 accent-accent">
                            <span>
                                <span class="block text-sm font-medium text-brand">Low risk</span>
                                <span class="block text-xs text-muted mt-1">I prefer stability and want to limit potential losses, even if returns are lower.</span>
                            </span>
                        </label>

                        <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="riskTolerance" value="moderate" class="mt-1 accent-accent">
                            <span>
                                <span class="block text-sm font-medium text-brand">Moderate risk</span>
                                <span class="block text-xs text-muted mt-1">I can accept some fluctuations in pursuit of long-term growth.</span>
                            </span>
                        </label>

                        <label class="flex items-start gap-3 border border-border rounded-xl p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="riskTolerance" value="high" class="mt-1 accent-accent">
                            <span>
                                <span class="block text-sm font-medium text-brand">High risk</span>
                                <span class="block text-xs text-muted mt-1">I can accept significant fluctuations and potential losses for higher growth opportunities.</span>
                            </span>
                        </label>
                    </div>

                    <div class="mt-5">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            If your investment temporarily lost 20% of its value, what would you most likely do?
                        </label>

                        <div class="space-y-2">
                            <?php
                            $lossResponses = [
                                'sell' => 'Sell immediately to prevent further losses',
                                'reduce' => 'Sell part of the investment',
                                'hold' => 'Hold and wait for recovery',
                                'invest-more' => 'Consider investing more if my circumstances allow'
                            ];
                            foreach ($lossResponses as $value => $label):
                            ?>
                                <label class="flex items-center gap-3 border border-border rounded-lg p-3 text-sm text-gray-700 cursor-pointer hover:border-accent">
                                    <input type="radio" name="lossReaction" value="<?= $value ?>" required class="accent-accent">
                                    <?= $label ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- 4. Time horizon -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">04</span>
                        <h2 class="font-semibold text-brand">Investment time horizon</h2>
                    </div>

                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        How long do you expect to keep your investments?
                    </label>

                    <div class="space-y-3">
                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="timeHorizon" value="under-1" required class="accent-accent">
                            <span class="text-sm text-brand">Less than 1 year</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="timeHorizon" value="1-3" class="accent-accent">
                            <span class="text-sm text-brand">1–3 years</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="timeHorizon" value="3-5" class="accent-accent">
                            <span class="text-sm text-brand">3–5 years</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="timeHorizon" value="5-plus" class="accent-accent">
                            <span class="text-sm text-brand">More than 5 years</span>
                        </label>
                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- 5. Liquidity -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">05</span>
                        <h2 class="font-semibold text-brand">Access to your money</h2>
                    </div>

                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        When might you need access to the money you plan to invest?
                    </label>

                    <div class="space-y-3">
                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="liquidity" value="immediate" required class="accent-accent">
                            <span class="text-sm text-brand">At any time, including at short notice</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="liquidity" value="within-year" class="accent-accent">
                            <span class="text-sm text-brand">Within the next 12 months</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="liquidity" value="1-3-years" class="accent-accent">
                            <span class="text-sm text-brand">Within 1–3 years</span>
                        </label>

                        <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                            <input type="radio" name="liquidity" value="not-soon" class="accent-accent">
                            <span class="text-sm text-brand">I do not expect to need it soon</span>
                        </label>
                    </div>
                </section>

                <div class="border-t border-border"></div>

                <!-- 6. Financial capacity -->
                <section>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-lg bg-brand/5 text-brand flex items-center justify-center font-semibold text-sm">06</span>
                        <h2 class="font-semibold text-brand">Financial circumstances</h2>
                    </div>

                    <div class="space-y-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                How would a significant loss of your investment affect your financial situation?
                            </label>

                            <div class="space-y-3">
                                <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="lossCapacity" value="significant" required class="accent-accent">
                                    <span class="text-sm text-brand">It would seriously affect my financial stability.</span>
                                </label>

                                <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="lossCapacity" value="manageable" class="accent-accent">
                                    <span class="text-sm text-brand">It would affect my finances, but I could manage.</span>
                                </label>

                                <label class="flex items-center gap-3 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="lossCapacity" value="limited-impact" class="accent-accent">
                                    <span class="text-sm text-brand">It would have a limited impact on my financial situation.</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Do you have an emergency fund separate from the money you intend to invest?
                            </label>

                            <div class="flex flex-col sm:flex-row gap-3">
                                <label class="flex-1 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="emergencyFund" value="yes" required class="accent-accent mr-2">
                                    <span class="text-sm text-brand">Yes</span>
                                </label>

                                <label class="flex-1 border border-border rounded-lg p-4 cursor-pointer hover:border-accent">
                                    <input type="radio" name="emergencyFund" value="no" class="accent-accent mr-2">
                                    <span class="text-sm text-brand">No</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Notice -->
                <div class="flex gap-3 p-4 rounded-xl bg-gold-light border border-gold/30">
                    <i class="fa-solid fa-circle-info text-gold-dark mt-1"></i>
                    <div>
                        <p class="text-sm font-semibold text-brand mb-1">
                            About your investor profile
                        </p>
                        <p class="text-xs text-brand leading-relaxed">
                            Your answers are intended to support an assessment
                            of your investment knowledge, objectives and capacity
                            for risk. They do not guarantee suitability or returns.
                        </p>
                    </div>
                </div>

                <!-- Error -->
                <div id="formError"
                     class="hidden text-sm text-red-600 bg-red-50 border border-red-100 rounded-lg p-3">
                </div>

                <!-- Actions -->
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between gap-4 pt-5 border-t border-border">

                    <a href="<?= BASE_URL ?>/onboarding/tax-information.php"
                       class="text-sm font-medium text-muted hover:text-brand">
                        <i class="fa-solid fa-arrow-left mr-2"></i>
                        Back
                    </a>

                    <button type="submit"
                            class="w-full sm:w-auto px-7 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-dark transition">
                        Review my information
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </button>

                </div>

            </form>
        </div>

        <p class="text-center text-xs text-muted mt-6">
            <i class="fa-solid fa-lock mr-1"></i>
            Secure onboarding experience
        </p>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('questionnaireForm');
    const errorBox = document.getElementById('formError');

    // Prevent selecting "None of the above" alongside other products.
    const productCheckboxes = document.querySelectorAll('.product-checkbox');

    productCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const noneOption = [...productCheckboxes].find(
                item => item.value === 'None of the above'
            );

            if (checkbox.value === 'None of the above' && checkbox.checked) {
                productCheckboxes.forEach(item => {
                    if (item !== checkbox) item.checked = false;
                });
            } else if (checkbox.checked && noneOption) {
                noneOption.checked = false;
            }
        });
    });

    function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
        errorBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function hasChecked(name) {
        return !!document.querySelector(`input[name="${name}"]:checked`);
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        errorBox.classList.add('hidden');

        const requiredGroups = [
            ['experience', 'Please select your investment experience.'],
            ['riskTolerance', 'Please select your risk tolerance.'],
            ['lossReaction', 'Please select how you would react to an investment loss.'],
            ['timeHorizon', 'Please select your investment time horizon.'],
            ['liquidity', 'Please select your liquidity preference.'],
            ['lossCapacity', 'Please answer the financial loss question.'],
            ['emergencyFund', 'Please answer the emergency fund question.']
        ];

        for (const [name, message] of requiredGroups) {
            if (!hasChecked(name)) {
                showError(message);
                return;
            }
        }

        const selectedObjectives = document.querySelectorAll(
            'input[name="objectives[]"]:checked'
        );

        if (!selectedObjectives.length) {
            showError('Please select at least one investment objective.');
            return;
        }

        // Prototype navigation only. Answers are not saved.
        window.location.href = '<?= BASE_URL ?>/onboarding/review-submission.php';
    });

});
</script>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
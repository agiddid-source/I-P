<?php

require_once __DIR__ . '/config/app.php';

$pageTitle = 'Invest Global | Welcome';
$bodyClass = 'bg-canvas font-sans text-gray-900';

include ROOT_PATH . '/components/shared/head.php';

?>

<main class="min-h-screen flex items-center justify-center p-6">

    <div class="bg-white border border-border rounded-panel shadow-card p-10 max-w-lg w-full text-center">

        <div class="flex justify-center mb-6">
            <?php
            $logoVariant = 'default';
            $logoClass   = 'h-28 w-auto';
            include ROOT_PATH . '/components/shared/logo.php';
            ?>
        </div>

        <h1 class="text-3xl font-bold text-brand mb-3">
            Invest Global
        </h1>

        <p class="text-muted leading-relaxed mb-6">
            Your global investment platform foundation is ready.
        </p>

        <div class="inline-flex items-center gap-2 bg-accent-light text-accent-dark px-4 py-2 rounded-full text-sm font-semibold">
            <i class="fa-solid fa-circle-check"></i>
            Shared Layout Successfully Integrated
        </div>

    </div>

</main>

<?php include ROOT_PATH . '/components/shared/footer.php'; ?>
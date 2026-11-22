<?php
/**
 * Shared logo component
 *
 * Usage:
 *   $logoVariant = 'default'; // 'default' (light backgrounds) | 'light' (dark backgrounds)
 *   $logoClass   = 'h-14 w-auto';
 *   include ROOT_PATH . '/components/shared/logo.php';
 */
$logoVariant = $logoVariant ?? 'default';
$logoClass   = $logoClass ?? 'h-14 w-auto';

$logoFiles = [
    'default' => 'logo.png',
    'light'   => 'logo-light.png',
];

$logoFile = $logoFiles[$logoVariant] ?? $logoFiles['default'];
?>
<img src="<?= ASSET_URL ?>/images/<?= $logoFile ?>"
     alt="<?= htmlspecialchars(APP_NAME) ?>"
     class="<?= htmlspecialchars($logoClass) ?>">
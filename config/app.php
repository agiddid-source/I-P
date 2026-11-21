
<?php

/**
 * Application Configuration
 * Global Investment Platform
 */

// Application details
define('APP_NAME', 'Investment Platform');
define('APP_ENV', 'development');

// Base URL for local XAMPP development
define('BASE_URL', '/I-P');

// Application paths
define('ROOT_PATH', dirname(__DIR__));

// Shared asset paths
define('ASSET_URL', BASE_URL . '/assets');

// Default timezone
date_default_timezone_set('UTC');

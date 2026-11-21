
<?php
$pageTitle = $pageTitle ?? APP_NAME;
$bodyClass = $bodyClass ?? 'bg-canvas font-sans text-gray-900';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#0B1F33',
                            dark: '#071522',
                            light: '#163A59'
                        },
                        accent: {
                            DEFAULT: '#0F9D78',
                            dark: '#087A5D',
                            light: '#DDF5ED'
                        },
                        surface: '#FFFFFF',
                        canvas: '#F7F9FB',
                        border: '#E5E9EF',
                        muted: '#667085'
                    },

                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    },

                    borderRadius: {
                        card: '12px',
                        panel: '16px'
                    },

                    boxShadow: {
                        card: '0 2px 10px rgba(16, 24, 40, 0.04)'
                    }
                }
            }
        };
    </script>

    <!-- Global Stylesheets -->
    <link rel="stylesheet" href="<?= ASSET_URL ?>/css/tokens.css">
    <link rel="stylesheet" href="<?= ASSET_URL ?>/css/global.css">

</head>

<body class="<?= htmlspecialchars($bodyClass) ?>">

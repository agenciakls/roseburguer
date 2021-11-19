<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo titleName(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#060606">
    <meta name="apple-mobile-web-app-status-bar-style" content="#060606">
    <meta name="msapplication-navbutton-color" content="#060606">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6G30RMKDLH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-6G30RMKDLH');
    </script>
</head>

<body>
    <main id="home">
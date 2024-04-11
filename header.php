<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="google-site-verification" content="EecTcvdM0xO2hTF18KPt-aHk1WlgoacxMqV7DU-UW0Y" />
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
    <script src="https://integrations.etrusted.com/applications/widget.js/v2" defer async></script>
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <!-- <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K89Q2RJ');
    </script> -->
    <!-- End Google Tag Managerr -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K89Q2RJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="navbar js-navbar">
            <?php get_template_part('templates-parts/header/header', 'brand'); ?>
            <?php get_template_part('templates-parts/header/header', 'nav'); ?>
            <?php get_template_part('templates-parts/header/header', 'burger'); ?>
            <?php get_template_part('templates-parts/header/header', 'icons'); ?>
            <?php get_template_part('templates-parts/header/header', 'card'); ?>
        </div>
        <?php
        if (is_shop() || is_product_category() || is_tax('producent') || is_product() || is_cart() || is_checkout() || is_account_page() || is_page(5174)) {
            get_template_part('templates-parts/header/header', 'nav-wc');
        }
        ?>
        <?php get_template_part('templates-parts/header/header', 'socialmedia'); ?>
    </header>
    <main id="main">
        <div class="container">
            <div class="row">
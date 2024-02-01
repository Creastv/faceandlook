<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Sorts+Mill+Goudy&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="navbar js-navbar">
            <?php get_template_part('templates-parts/header/header', 'brand'); ?>
            <?php get_template_part('templates-parts/header/header', 'nav'); ?>
            <?php get_template_part('templates-parts/header/header', 'burger'); ?>
            <?php get_template_part('templates-parts/header/header', 'icons'); ?>
            <?php get_template_part('templates-parts/header/header', 'card'); ?>
        </div>
        <?php
        if (!is_home() && !is_front_page()) {
            get_template_part('templates-parts/header/header', 'nav-wc');
        }
        ?>
        <?php get_template_part('templates-parts/header/header', 'socialmedia'); ?>
    </header>
    <main id="main">
        <div class="container">
            <div class="row">
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#fff">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@900&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
	  <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-73385417-1', 'auto');
        ga('send', 'pageview');

    </script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1349990108521908');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1" alt=""
	src="https://www.facebook.com/tr?id=1349990108521908&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="navbar">
            <?php get_template_part('templates-parts/header/header', 'brand'); ?>
            <?php get_template_part('templates-parts/header/header', 'nav'); ?>
            <?php get_template_part('templates-parts/header/header', 'search'); ?>
            <?php get_template_part('templates-parts/header/header', 'socialmedia'); ?>
            <?php get_template_part('templates-parts/header/header', 'accessibility'); ?>
            <?php get_template_part('templates-parts/header/header', 'wpml'); ?>
            
        </div>
        <?php get_template_part('templates-parts/header/header', 'label-radio'); ?>
    </header>
    <?php get_template_part('templates-parts/header/header', 'mega-menu'); ?>
    
    <main id="main">
        <div class="container">
            <div class="row">
            
            
            
<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}
function enqueue_styles()
{
	wp_enqueue_style('go-style', get_stylesheet_uri());
	wp_enqueue_style('go-custome-style', get_template_directory_uri() . '/src/css/go-main.min.css');
	wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	if (is_shop() || is_product() || is_product_category()) {
		wp_enqueue_style('go-woocommerce', get_template_directory_uri() . '/src/css/go-woocommerce.min.css');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

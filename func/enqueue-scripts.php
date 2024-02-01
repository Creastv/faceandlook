<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

function enqueue_scripts()
{
	if ((is_singular('post') || (is_category() || is_home()))) {
		wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
		wp_enqueue_script('go-wc-carousel_js', get_template_directory_uri() . '/src/js/go-wc-pproducts-carousel.js',  array(), '20130456', true);
	}
	if (is_singular('post')) {
		wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
		wp_enqueue_script('go-recomended_js', get_template_directory_uri() . '/src/js/go-recomended.js',  array(), '20130456', true);
	}
	if (is_shop() || is_product() || is_product_category()) {
		wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
		wp_enqueue_script('go-wc-carousel_js', get_template_directory_uri() . '/src/js/go-wc-pproducts-carousel.js',  array(), '20130456', true);
		wp_enqueue_script('go-faq_js', get_template_directory_uri() . '/src/js/go-faq.js',  array(), '20130456', true);
	}
	wp_enqueue_script('go-main', get_template_directory_uri() . '/src/js/go-main.js', array('jquery'), '3', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

function enqueue_scripts()
{
	if (is_singular()) {
		wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
		wp_enqueue_script('go-recomended_js', get_template_directory_uri() . '/src/js/go-recomended.js',  array(), '20130456', true);
	}
	wp_enqueue_script('go-main', get_template_directory_uri() . '/src/js/go-main.js', array('jquery'), '3', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

<?php
get_header();
while (have_posts()) : the_post();
	get_template_part('templates-parts/content/content', 'post');
endwhile;
get_footer();

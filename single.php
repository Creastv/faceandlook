<?php
get_header();
while ( have_posts() ) : the_post();
if(is_singular('mw_person')) :
	get_template_part( 'templates-parts/content/content', 'post-single-two' );
elseif(is_singular('mw_project')) :
    get_template_part( 'templates-parts/content/content', 'post-single-two' );
elseif(is_singular('mw_class')) :
	get_template_part( 'templates-parts/content/content', 'post-single-two' );
elseif(is_singular('mw_event')) :
	get_template_part( 'templates-parts/content/content', 'post-single-two' );
elseif(is_singular('mw_room')) :
	get_template_part( 'templates-parts/content/content', 'post-single-two' );
elseif(is_singular('bip')) :
	get_template_part( 'templates-parts/content/content', 'post-bip' );
elseif(is_singular('post')) :
    get_template_part( 'templates-parts/content/content', 'post-single' );
    get_template_part( 'templates-parts/parts/recomended-posts' );
else :
	get_template_part( 'templates-parts/content/content', 'post-single' );
endif;
endwhile; 

if(is_singular('mw_person')) :
	get_template_part( 'templates-parts/parts/recomended-persons' );
endif;

if(is_singular('mw_project')) :
	get_template_part( 'templates-parts/parts/recomended-project' );
endif;

if(is_singular('mw_room')) :
	get_template_part( 'templates-parts/parts/recomended-wynajem' );
endif;

if(is_singular('mw_class')) :
	get_template_part( 'templates-parts/parts/recomended-zajecia' );
endif;

if(is_singular('mw_event')) :
	get_template_part( 'templates-parts/parts/recomended-wydarzenia' );
endif;

get_footer();

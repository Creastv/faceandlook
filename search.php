<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post(); 
    if(get_post_type( get_the_ID() ) == 'mw_event') :
    get_template_part( 'templates-parts/content/content', 'mw_event' ); 
    elseif (get_post_type( get_the_ID() ) == 'mw_class') :
        get_template_part( 'templates-parts/content/content', 'mw_class' ); 
    elseif (get_post_type( get_the_ID() ) == 'mw_person') :
        get_template_part( 'templates-parts/content/content', 'mw_person' ); 
    elseif (get_post_type( get_the_ID() ) == 'mw_room') :
        get_template_part( 'templates-parts/content/content', 'mw_room' ); 
    elseif (get_post_type( get_the_ID() ) == 'page') :
        get_template_part( 'templates-parts/content/content', 'page' );
    else: 
    get_template_part( 'templates-parts/content/content', 'post' ); 
    endif;
    endwhile; ?>
</div>
<?php if(paginate_links()) { ?>
<div class="go-pagination">
    <?php pagination_bars(); ?>
</div>
<?php } ?>

<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;
?>

<?php get_footer();

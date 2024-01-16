<?php 
$tax = get_field('kat');
$postsPerPage = get_field('post_per_page');
$postType = 'mw_class';

$post = new WP_Query( array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => $postsPerPage,
    'order' => 'DESC',
    'tax_query' => array( array(
        'taxonomy'	=> 'class_cat',
        'field'		=> 'id',
        'terms'		=> $tax,
      ) ),
));
?>

<div class="event-list">
<?php while ( $post->have_posts() ) : $post->the_post(); ?>
<?php get_template_part('templates-parts/content/content', 'mw_class'); ?> 
<?php endwhile; wp_reset_query();?>
</div>
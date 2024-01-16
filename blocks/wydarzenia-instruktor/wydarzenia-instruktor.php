<?php 
$tax = get_field('ins');
$postsPerPage = get_field('post_per_page');
$postType = get_field('typ_postu');

$post = new WP_Query( array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => $postsPerPage,
    'order' => 'DESC',
    'tax_query' => array( array(
        'taxonomy'	=> 'class_instructor',
        'field'		=> 'id',
        'terms'		=> $tax,
      ) ),
));
?>

<div class="event-list">
<?php while ( $post->have_posts() ) : $post->the_post(); ?>
<?php if($postType ) : ?>
<?php get_template_part('templates-parts/content/content', 'mw_event'); ?> 
<?php else : ?>
  <?php get_template_part('templates-parts/content/content', 'mw_class'); ?>
<?php endif; ?>
<?php endwhile; wp_reset_query();?>
</div>
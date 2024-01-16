<?php 
$tax = get_field('kat');
$postsPerPage = get_field('post_per_page');
$postType = 'mw_person';

$articles = new WP_Query( array(
    'post_type' => $postType,
    'posts_per_page' => $postsPerPage,
    'post_status' => 'publish',
    // 'cat'         => $tax,
    'order' => 'DESC',
    'tax_query' => array( array(
      'taxonomy'	=> 'person_group',
      'field'		=> 'id',
      'terms'		=> $tax,
    ) ),
));
?>

<div class="person-list">
<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
<?php   get_template_part( 'templates-parts/content/content', 'mw_person' );  ?>
<?php endwhile; wp_reset_query();?>
</div>
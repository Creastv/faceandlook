<?php 
$tax = get_field('kat');
$postsPerPage = get_field('post_per_page');
$postType = 'post';
$year = get_field('rok');

$articles = new WP_Query( array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => $postsPerPage,
    'cat'         => $tax,
    'order' => 'DESC',
    'year'                   => $year,
));
?>

<div class="posts-list">
<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
    <article class="card-list">
        <div class="img-list">
            <?php if (has_post_thumbnail( $articles->ID ) ): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png">
            <?php endif; ?>
        </div>
        <div class="content-list">
            
            <div class="meta-group">
                <div class="meta meta-pub">
                    <span><?php _e('Opublikowano: ', 'go' ); ?> </span>
                    <time class="meta meta-data-pub published" datetime="<?php the_time('Y-m-d m:s'); ?>"> <span> <?php the_time('d/m/Y');?></span></time>
                </div>
            </div>
            <h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </h2>
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php endwhile; wp_reset_query();?>
</div>
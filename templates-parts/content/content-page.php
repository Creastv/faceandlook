<article class="card-post <?php echo $post->ID; ?>">
    <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php the_post_thumbnail('post-futured', array( 'alt' => get_the_title(), 'title' => get_the_title() )); ?>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png">
    <?php endif; ?>
    </a>
    <h2 class="entry-title ">
        <a href="<?php the_permalink(); ?>">
        <?php //the_title(); ?>
        <?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?>
        </a>
    </h2>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>

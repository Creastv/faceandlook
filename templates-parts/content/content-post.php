<article>
    <header class="entry-header text-center">
        <h1 class="entry-title ">
            <?php the_title(); ?>
        </h1>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <?php // the_post_thumbnail('large', array( 'alt' => get_the_title(), 'title' => get_the_title() )); 
        ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <div class="kk-ata">
            <div class="kk-ata__wraper">
                <span><?php _e('Udostępnij: ', 'go'); ?></span>
                <?php echo do_shortcode("[addtoany]"); ?>
            </div>
        </div>
    </div>
</article>
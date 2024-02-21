<article>
    <header class="entry-header text-center">
        <h1 class="entry-title ">
            <?php the_title(); ?>
        </h1>
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <span class="entry-date">Opublikowano:<b> <?php the_date(); ?></b></span>
        <?php the_post_thumbnail('large', array('alt' => get_the_title(), 'title' => get_the_title()));
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
        <div id="author-bio">
            <div id="author-avatar"><?php echo get_avatar(get_the_author_meta('ID'), 60); ?></div>

            <div id="author-details">
                <div class="author-head">
                    <div class="title">
                        <p class="h3"><?php the_author_posts_link(); ?></p>
                        <i><?php $author_id = get_the_author_meta('ID');
                            the_field('pozycja', 'user_' . $author_id); ?></i>
                    </div>
                    <div class="links">
                        <?php if (get_the_author_meta('user_url')) { ?>
                            <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                                <i class="fas fa-link"></i>
                            </a>
                        <?php } ?>
                        <?php if (get_the_author_meta('linkedin')) { ?>
                            <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        <?php } ?>
                        <?php if (get_the_author_meta('facebook')) { ?>
                            <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php } ?>
                        <?php if (get_the_author_meta('twitter')) { ?>
                            <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php } ?>
                        <?php if (get_the_author_meta('instagram')) { ?>
                            <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="author-footer">
                    <p> <?php the_author_description(); ?></p>
                </div>
            </div><!-- #author-details -->
        </div><!-- #author-bio -->
    </div>
</article>
<?php get_header(); ?>
 <div id="error" class="title-page-wraper">
        <div class="container">
            <div class="row">
                <h1 class="text-center">
                    404
                </h1>
                <div class="text-center">
                    <h2><?php _e( 'Upss. Chyba się zgubiłeś?', 'go' ); ?></h2>
                    <a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span><?php _e( 'Wróć do strony głównej ', 'go' ); ?></span></a>
                </div>
            </div>
        </div>
</div>

<?php get_footer();
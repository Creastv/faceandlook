<?php
$customeposts = get_field('wybrane_wydarzenia', 'options');
// if($customeposts){
$postsColLeft = get_field('wydarzenia_lewa_kolumna', 'options');
$postsColRight = get_field('wydarzenia_prawa_kolumna', 'options');
// }
$titleOne = get_field('naglowek_kalendarza');
$titleTwo = get_field('naglowek_pod_kalendarzem');
$link = get_field('link');

if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
$event= new WP_Query( array(
    'post_type' => 'mw_event',
    'posts_per_page' => 6,
    'order' => 'DESC',
    // 'year'                   => '2022',
));
$i= 1;
$ii = 1;
?>
<?php if($customeposts){ ?>
    <div class="events-recommended-2">
    <div class="events-recommended__wrap">
        <div class="col col-1 ">
            <div class="grid">
            <?php foreach( $postsColLeft as $post ):  ?>
            <?php if ($i == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>
            <?php $i++; endforeach;    wp_reset_postdata();?> 

            <?php foreach( $postsColRight as $post ):  ?>
             <?php if($ii == 1) { ?>
                <div class="four"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 2) { ?>
                <div class="five"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 3) { ?>
                <div class="six"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>
            <?php $ii++; endforeach;    wp_reset_postdata();?> 
            </div>
        </div>
        <div class="col col-2">
        <?php echo  $titleOne ? '<p class="title text-center">' . $titleOne . '</p>' : false; ?>
        <?php echo do_shortcode('[fullcalendar]'); ?>
        <?php echo  $titleTwo ? '<p class="title text-center">' . $titleTwo . '</p>' : false; ?>
        <?php if($link) { ?>
        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="events-recommended-2">
    <div class="events-recommended__wrap">
        <div class="col col-1 ">
            <div class="grid">
            <?php while ( $event->have_posts() ) : $event->the_post(); ?>
            <?php if ($i == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
             <?php } elseif($i == 4) { ?>
                <div class="four"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 5) { ?>
                <div class="five"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 6) { ?>
                <div class="six"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>
                <?php $i++; endwhile; wp_reset_query();?>
            </div>
        </div>
        <div class="col col-2">
        <p class="title text-center">KALENDARZ WYDARZEŃ</p>
        <?php echo do_shortcode('[fullcalendar]'); ?>
        <p class="title text-center">ZNAJDŹ WYDARZENIE</p>
        <a class="btn" href="#">Przejdź do pełnej wyszukiwarki</a>
        
        </div>
    </div>
</div>
<?php } ?>
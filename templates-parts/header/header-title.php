<?php 
$displayHeader = get_field('naglowek');
$titleDisc = get_field('opis_pod_tytulem');

$titleDescAktualnosci = get_field('opis_pod_naglowkiem_aktualnosci', 'options');
$titleDescRepertuar = get_field('opis_pod_naglowkiem_repertuar', 'options');
$titleDescZajecia = get_field('opis_pod_naglowkiem_zajecia', 'options');
$titleDescProjekty = get_field('opis_pod_naglowkiem_projekty', 'options');
$titleDescInstruktorzy = get_field('opis_pod_naglowkiem_instruktorzy', 'options');
$titleDescWynajem = get_field('opis_pod_naglowkiem_wynajem', 'options');
$titleDescWydarzenia = get_field('opis_pod_naglowkiem_wydarezenia', 'options');
?>
 <?php if(($displayHeader === NULL || $displayHeader == true) ) : ?>
<header class="entry-header  ">
    <h1 class="entry-title">
        <?php if ( is_category() ) :
					single_cat_title();	
					elseif (is_search()) :
						_e( 'Wyniki wyszukiwania', 'go');
					elseif ( is_tax() ) :
							single_tag_title();
					elseif (get_post_type( get_the_ID() ) == 'mw_class') :
						_e( 'Zajęcia', 'go');
					elseif (get_post_type( get_the_ID() ) == 'mw_event') :
						_e( 'Wydarzenia', 'go');	
					elseif (get_post_type( get_the_ID() ) == 'mw_project') :
						_e( 'Projekty', 'go');	
					elseif (get_post_type( get_the_ID() ) == 'mw_person') :
						_e( 'Instruktorzy', 'go');
					elseif (get_post_type( get_the_ID() ) == 'mw_room') :
						_e( 'Wynajem', 'go');			
					elseif (is_404()) :
						_e( '404', 'go');
					elseif (is_search()) :
						_e( 'Wyniki wyszukiwania', 'go');
					elseif (is_page() ) :
						the_title();
					elseif ( is_tag() ) :
						single_tag_title();
					
					elseif ( is_author() ) :
						the_post();
						printf( __( '%s', 'go' ), get_the_author() );
						rewind_posts();
					elseif ( is_day() ) :
						printf( __( 'Dzień: %s', 'go' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Miesiąc: %s', 'go' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Rok: %s', 'go' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'go');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'go' );
					else :
						_e( 'Aktualności', 'go' );
				endif; ?>
    </h1>
	<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
	<div class="page-description">
	<?php if($titleDisc) : ?>
		<p><?php echo $titleDisc; ?></p>
	<?php endif; ?>

	<?php  if($titleDescAktualnosci && get_post_type( get_the_ID() ) == 'post' ) : ?>
		<p><?php echo $titleDescAktualnosci; ?></p>
	<?php  endif; ?>

	<?php  if($titleDescWydarzenia && get_post_type( get_the_ID() ) == 'mw_event') : ?>
		<p><?php echo $titleDescWydarzenia; ?></p>
	<?php  endif; ?>

	<?php  if($titleDescZajecia && get_post_type( get_the_ID() ) == 'mw_class') : ?>
		<p><?php echo $titleDescZajecia; ?></p>
	<?php  endif; ?>

	<?php  if($titleDescProjekty && get_post_type( get_the_ID() ) == 'mw_project') : ?>
		<p><?php echo $titleDescProjekty; ?></p>
	<?php  endif; ?>

	<?php  if($titleDescInstruktorzy && get_post_type( get_the_ID() ) == 'mw_person') : ?>
		<p><?php echo $titleDescInstruktorzy; ?></p>
	<?php  endif; ?>
	<?php  if($titleDescWynajem && get_post_type( get_the_ID() ) == 'mw_room') : ?>
		<p><?php echo $titleDescWynajem; ?></p>
	<?php  endif; ?>
	
	

	</div>

</header>
<?php endif; ?>
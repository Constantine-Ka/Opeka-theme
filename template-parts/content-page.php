<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opeka-theme
 */

?>

<?php 
		$style_arr = CFS()->get( 'stylePage' );
		$script_arr = CFS()->get( 'jsPage' );
		foreach ( $style_arr as $cssFile ){?>

			<link rel="stylesheet" href="<? echo($cssFile['cssFile']) ?>">
<?}
?>
<section id="titlePage">
	<div class='container'>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>
<section>
<div class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<? the_content(); ?>
		

</div>
</section>
<?
	foreach ( $script_arr as $jsFile ){?>
			
			<script src="<? echo($jsFile['jsFile']) ?>"></script>
		
		<?}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style='display:none'>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	gfghf</header><!-- .entry-header -->
1111
	<?php opeka_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();?>

		//wp_link_pages(
			//array(
				//'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'opeka-theme' ),
				//'after'  => '</div>',
			//)
		//);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Изменить <span class="screen-reader-text">%s</span>', 'opeka-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

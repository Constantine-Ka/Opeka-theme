<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opeka-theme
 */

?>

<div class = "row singleNews"><?php the_content() ?></div>
<div class = "row singleNews"><?php opeka_theme_posted_on(); ?>
<div class = "row singleNews" style="display:none"><?php 
	wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'opeka-theme' ),
				'after'  => '</div>',
			)
		);	
	?>
</div>





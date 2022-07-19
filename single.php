<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package opeka-theme
 */

get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/newsPage.css">
<!-- <section id="titlePage">
	<div class='container'>
		<?php //the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section> -->
<section id="newsPageTitle">
	<div class='container'>
		<div class="row">
			<div class="main">
				<? if ( get_the_post_thumbnail() ) {
					opeka_theme_post_thumbnail();
				} else { ?>
				<div class="post-thumbnail">
					<img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>">			
				</div>
					
				<? } ?>
				
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<p><? //the_excerpt();?></p>
			</div>
			<?
				$photos = CFS()->get( 'photos' );
				foreach( $photos as $key=>$item){
			?>
			<div class="addition">
				<img src="<? echo($item['photoLink']) ?>" alt="<? echo($item['text']) ?>">
				<p><? echo($item['text']) ?></p>
			</div>

			<?}?>
		</div>
	</div>
</section>
	

<section>
	<div class='container'>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );?>
			<div class = "row singleNews" style="display:none"><?php 
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( '', 'opeka-theme' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( '', 'opeka-theme' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				?>
		</div>
		
		</div>
			
			<?

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
	
</section>

<?php
get_sidebar('feedback');
get_footer();
?>

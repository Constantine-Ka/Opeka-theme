<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @description: Description

 *
 * @package opeka-theme
 */
/*
Template Name: staff
*/
?>
<?php
	get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/personal.css">
<section id="titlePage" style="margin-bottom:0">
	<div class='container'>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>

<section>
	<div class='container'>
		<?php
			    $staffs = CFS()->get( 'staff' );
				foreach( $staffs as $key=>$item){
		?>
					<div class="row staff" id = "<? echo($item['id']) ?>">
						<div class="photoblock">
							<img src="<? echo($item['photo']) ?>" alt="<? echo($item['name']) ?>">
<!-- 							<h3><? //echo($item['name']) ?></h3> -->
							<h4><? echo($item['position']) ?></h4>
						</div>
						<div class="textblock">
							<h3><? echo($item['name']) ?></h3>
							<p class="employmentDate">В АНО «ОПЕКА» работает с <? echo($item['employmentDate']) ?> года.</p>
							<p class="educations">Образование:<? echo($item['education']) ?></p>
							<p class="decriptions"><? echo($item['description']) ?></p>
						</div>
					</div>
		<?
				}
		?>
		
	</div>
		

</section>
<section>
	
</section>

<?php
get_sidebar('feedback');
get_footer();
?>

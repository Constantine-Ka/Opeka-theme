<?php
/*
Template Name: Материально-техническое обеспечение
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/kiwimi.min.css">
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/mto.css">
<section id="titlePage">
	<div class='container'>
		<h2 class="entry-title">Материально-техническое обеспечение</h2>
		<?php //e_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>
<section>
	<div class='container'>
		<div class="row mto">
			<?php the_title( '<p class="greenPoint">', '</p>' ); ?>
		</div>
		<div class="row mto">
			<img src="<? echo(CFS()->get( 'mto-main-img' )) ?>" alt="Общее фото здания" srcset=""  k_modal="1">

		</div>
		<?php
				$cat = CFS()->get( 'mto-cat' );
				foreach( $cat as $key=>$item){
		?>          
				<div class="row string">
					<h4><? echo($item['title']) ?></h4>
					<img src="<? echo($item['image1']) ?>" alt="фото <? echo($item['title']) ?> " k_modal="1" >
					<img src="<? echo($item['image2']) ?>" alt="фото <? echo($item['title']) ?> " k_modal="1">
					<img src="<? echo($item['image3']) ?>" alt="фото <? echo($item['title']) ?> " k_modal="1">
				</div>			
		<?
				}
		?>
    
	</div>
</section>
<script src="/wp-content/themes/opeka-theme/js/kiwimi.min.js" id="kiwimi"></script>
<script>
	window.onload = function() {
  kiwimi.modal();
  kiwimi.slider('k_slider', 1, 3);
}
</script>
<?php
get_sidebar('feedback');
get_footer();
?>
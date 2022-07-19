<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package opeka-theme
 */

if ( ! is_active_sidebar( 'sidebar-feedback' ) ) {
	return;
}
?>
     <script>
        const hideform = ()=>{
            (this.checked)?document.querySelector('.feedback').style.right='-240px':document.querySelector('.feedback').style.right='0px';
        }
    
    
    </script>
    <div class="feedback" style="z-index:99999">
        <input type="checkbox" name="visible" id="visible" onchange="(!this.checked)?document.querySelector('.feedback').style.right='0px':document.querySelector('.feedback').style.right='-250px';">
		<label class = 'visible' for="visible"><img src="<? echo(get_template_directory_uri())?>/img/icons8-96 2.svg" alt="" srcset=""></label>
        <div class="formBlock">
            <?php dynamic_sidebar( 'sidebar-feedback' ); ?>
        </div>
    </div><!-- #secondary -->

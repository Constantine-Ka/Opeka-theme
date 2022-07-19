<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package opeka-theme
 */

?>

	<footer id="footer" class="site-footer" style="margin-top:170px">
		<div class='socialBlock'>
            <a href="https://vk.com/opeka365" target="_blank" rel="noopener noreferrer">VK</a>
        </div>
        <h5>© 2013-<?php echo date('Y')  ?> | <? bloginfo('name')?> | Все права защищены.</h5>
	</footer><!-- #colophon -->
    <a href="#header" class = 'scrollUp'><i class="fas fa-angle-up"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

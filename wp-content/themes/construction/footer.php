<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Construction
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="row">
	<img src="<?php bloginfo('template_directory'); ?>/images/coatingsWhite.png" alt="logo"/>

	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
	</div>
	<div class="row"></div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

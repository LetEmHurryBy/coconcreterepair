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
			<div class"row">
				
				<nav class="footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>	
				</nav>
				<div class="coppyright">				
					<p> Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo ('name'); ?> All Rights Reserved.</p>
				</div>
				<nav class="social-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
					test
				</nav>
				
			</div>
		</footer><!-- #colophon -->
	
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

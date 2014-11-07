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
			<div class="footer-container">
				
				<div class="copyright">				
					<p> Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo ('name'); ?> All Rights Reserved.</p>
				</div>

				
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>	
				
				<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
				
			</div>
		</footer><!-- #colophon -->
	
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

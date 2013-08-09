<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 */
?>

	</div> <!-- #main -->

</div><!-- #page -->

<div class="footer-bg clearfix">
	<footer id="site-footer">
		<div id="supplementary" class="row-fluid">
			<?php get_template_part( 'footer-part', 'widget-area' ); ?>
		</div>
		<div id="boilerplate" class="row-fluid clearfix">
			<p><?php largo_copyright_message(); ?></p>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-bottom', 'container' => false, 'depth' => 1  ) ); ?>
			<div class="footer-bottom clearfix">
				<!-- If you enjoy this theme and use it on a production site we would appreciate it if you would leave the credit in place. Thanks :) -->
				<p class="footer-credit"><?php _e('This site built with <a href="http://largoproject.org">Project Largo</a> from the <a href="http://investigativenewsnetwork.org">Investigative News Network</a> and proudly powered by <a href="http://wordpress.org" rel="nofollow">WordPress</a>.', 'largo'); ?></p>
				<p class="back-to-top"><a href="#top"><?php _e('Back to top &uarr;', 'largo'); ?></a></p>
			</div>
		</div><!-- /#boilerplate -->
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
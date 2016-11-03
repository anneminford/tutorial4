<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootstrapwp
 */
?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer footer-columns" role="contentinfo">

		<div class="container footer-section">
			<div class="row">
			<h1 class="centered">THANKS FOR VISITING</h1>
			<hr>
			<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-lg-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>

		</div><!-- .row -->
	</div><!-- .containr -->
	<div class="footerwrap">
			<div class="container">
				<h4>Created by <a href="http://braginteractive.com">Brad Williams</a> - &copy; <?php _e('Copyright', 'bootstrapwp'); ?> <?php echo date('Y'); ?></h4>
			</div>
		</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

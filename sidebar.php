<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bootstrapwp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->

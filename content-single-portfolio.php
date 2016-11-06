<?php
/**
 * @package bootstrapwp
 */
?>
		<p>TEST</p>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

	<?php $bg_img = rwmb_meta('dwp_sliders_image', 'type=image'); ?>
	<?php if(count($bg_img) > '0'){
		$number = 0;
	foreach ($bg_img as $img) {
    echo '<li data-target="#carousel-example-generic" data-slide-to="'.$number.'"></li>';
    $number++;
	}
	}?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
	 		<?php $bg_img = rwmb_meta('dwp_sliders_image', 'type=image'); ?>
			<?php if(count($bg_img) > '0'){
				foreach ($bg_img as $img) {
					$slider_img = "{$img['full_url']}";
					echo '<div class="item">';
					echo '<img src="'. $slider_img .'">';
					echo '</div>';
				}
			}?>
	</div><!-- .carousel-inner -->
</div><!--/carousel -->





		<div class="row">
			<div class="col-lg-8">
				<?php the_content(); ?>
			</div><!-- .col-lg-8-->
			<div class="col-lg-4">
				<?php if (rwmb_meta('dwp_side_details') != '') {
				    echo rwmb_meta('dwp_side_details');
				} ?>
			</div><!-- .col-lg-8-->
		</div><!-- .row -->

		<?php
		// Display author bio if post isn't password protected
		if ( ! post_password_required() ) : ?>
		
		<?php if ( get_the_author_meta('description') != '' ) : ?>       
			<div class="author-meta well well-lg">
				<div class="media">
					<div class="media-object pull-left">
						<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta( 'ID' ), 80 ); }?>
					</div>
					<div class="media-body">
						<h5 class="media-heading"><?php the_author_posts_link(); ?></h5>
						<p><?php the_author_meta('description') ?></p>
						<?php
						// Retrieve a custom field value
						$twitterHandle = get_the_author_meta('twitter'); 
						$fbHandle = get_the_author_meta('facebook');
						$gHandle = get_the_author_meta('gplus');
						?>
						<p> 
							<?php if ( get_the_author_meta('twitter') != '' ) : ?>
							<a href="http://twitter.com/<?php echo $twitterHandle; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
						<?php endif; // no twitter handle ?>

							<?php if ( get_the_author_meta('facebook') != '' ) : ?>
							<a href="<?php echo $fbHandle; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; // no facebook url ?>

							<?php if ( get_the_author_meta('gplus') != '' ) : ?>
							<a href="/<?php echo $gHandle; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; // no google+ url ?>
						</p>
					</div>
				</div>
			</div><!-- end of #author-meta -->
        <?php endif; // no description, no author's meta ?>
			
		<?php
		//end password protection check 
		endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bootstrapwp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'bootstrapwp' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

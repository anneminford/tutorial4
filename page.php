<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bootstrapwp
 */

get_header(); ?>

<?php $bg_img = rwmb_meta('dwp_banner_image', 'type=image');

	$bg_url ='';

	if(count($bg_img) > '0'){

		foreach ($bg_img as $img) {
			$bg = "{$img['full_url']}";
			$bg_url = "background-image: url('" . $bg . "');";
		}
	}

?>

    <div class="pagewrap" style="<?php echo $bg_url; ?>">
  		<header>
			<?php if (rwmb_meta('dwp_banner_text') != '') {
			    echo '<h1>';
			    echo rwmb_meta('dwp_banner_text');
			    echo '</h1>';
			} else { ?>
			   <?php the_title( '<h1 class="entry-title">', '</h1>' );
			}?>
  		</header>	    
    </div><!-- /headerwrap -->

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

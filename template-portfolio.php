<?php
/**
 * Template Name: Portfolio
 *
 */

get_header(); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main portfolio" role="main">

			<?php
			    $terms = get_terms("portfolio_tags");
			    $count = count($terms);
			    echo '<div id="filters" class="btn-group">';
			    echo '<button type="button" class="btn btn-default" data-filter="*">'. __('All', 'bootstrapwp') .'</button>';
			        if ( $count > 0 )
			        {   
			            foreach ( $terms as $term ) {
			                $termname = strtolower($term->name);
			                $termname = str_replace(' ', '-', $termname);
			                echo '<button type="button" class="btn btn-default" data-filter=".'.$termname.'">'.$term->name.'</button>';
			            }
			        }
			    echo "</div>";
			?>

			<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'portfolio') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<div class="row">
					<div id="portfolio-items">

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					  <?php
		                $terms = get_the_terms( $post->ID, 'portfolio_tags' );
		                                     
		                if ( $terms && ! is_wp_error( $terms ) ) : 
		                    $links = array();
		 
		                    foreach ( $terms as $term ) 
		                    {
		                        $links[] = $term->name;
		                    }
		                    $links = str_replace(' ', '-', $links); 
		                    $tax = join( " ", $links );     
		                else :  
		                    $tax = '';  
		                endif;
		                ?>

					<div class="col-sm-6 col-md-4 item <?php echo strtolower($tax); ?>">
						<div class="portfolio-item">
							<a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
							</a>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">View Project</a>
						</div>
					</div>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</div> <!-- #portfolio-items -->

				</div> <!-- .row -->
				

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>
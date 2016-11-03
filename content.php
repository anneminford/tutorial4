<?php
/**
 * @package bootstrapwp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bootstrapwp_posted_on(); ?>

				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'bootstrapwp' ) );
				if ( $categories_list && bootstrapwp_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<i class="fa fa-folder-o"></i> %1$s', 'bootstrapwp' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><i class="fa fa-comment-o"></i> <?php comments_popup_link( __( 'Leave a comment', 'bootstrapwp' ), __( '1 Comment', 'bootstrapwp' ), __( '% Comments', 'bootstrapwp' ) ); ?></span>
		<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bootstrapwp' ) ); ?>
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
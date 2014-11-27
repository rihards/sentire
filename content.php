<?php
/**
 * @package sentire
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			// Let's do the featured image first
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'post-photo' );
			} 

			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sentire' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sentire' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer entry-meta">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php sentire_posted_on(); ?>
		<?php endif; ?>
		<?php sentire_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

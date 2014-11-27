<?php
/**
 * @package sentire
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sentire' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer entry-meta">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php sentire_posted_on(); ?>
		<?php sentire_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

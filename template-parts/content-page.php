<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package tatami-code
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="blog-post">
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title blog-post-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tatami-code' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'tatami-code' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


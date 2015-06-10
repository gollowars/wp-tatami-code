<?php
/**
 * Template part for displaying single posts.
 *
 * @package tatami-code
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="blog-post">
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title blog-post-title">', '</h2>' ); ?>

		<div class="blog-post-meta">
			<?php tatami_code_posted_on(); ?>
		</div><!-- .blog-post-meta -->
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

</article><!-- #post-## -->


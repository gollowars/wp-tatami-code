<?php
/**
 * Template part for displaying posts.
 *
 * @package tatami-code
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="blog-post">
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title blog-post-title">', '</h2>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="blog-post-meta">
			<?php tatami_code_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tatami-code' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tatami-code' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

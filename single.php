<?php
/**
 * The template for displaying all single posts.
 *
 * @package tatami-code
 */

get_header(); ?>

	<div class="row">
        <main class="col-sm-10 tc-blog-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				the_post_navigation(array(
				    'prev_text' => '< %title',
				    'next_text' => '%title >',
				    'screen_reader_text'=>' '
				));
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- .main -->
		<?php get_sidebar(); ?>
	</div><!-- .row -->
	</div><!-- /.container -->
<?php get_footer(); ?>

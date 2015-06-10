<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tatami-code
 */

get_header(); ?>

	<div class="row">
        <main class="col-sm-10 tc-blog-main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- .main -->
		<?php get_sidebar(); ?>
	</div><!-- .row -->
	</div><!-- /.container -->
<?php get_footer(); ?>

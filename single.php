<?php
/**
 * The template for displaying all single posts.
 *
 * @package neckbeard
 */

get_header(); ?>

<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					do_action( 'neckbeard_single_post_before' );

					get_template_part( 'content', 'single' );

					/**
			 		* @hooked neckbeard_post_nav - 10
			 		* @hooked neckbeard_display_comments - 20
			 		*/
					do_action( 'neckbeard_single_post_after' );
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .col-full -->
</div><!-- #content -->

<?php get_footer(); ?>

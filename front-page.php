<?php
/**
 * Front page template.
 *
 * @package neckbeard
 */

get_header(); ?>

<div class="slide slide-front" style="background-image:url(<?php if ( has_post_thumbnail($id)) : ?><?php echo wp_get_attachment_url( get_post_thumbnail_id($id) ); ?><?php else: ?><?php echo get_template_directory_uri(); ?>/images/slide-default.jpg<?php endif; ?>);">
<div class="shade"></div>

	<div class="container">

		<!-- This is for testing only, please remove or edit these when starting a project -->
		<h2>Excepteur sint occaecat cupidatat non proident.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus amet mollitia delectus ut, quis laboriosam totam, dolores, magni dicta consectetur incidunt officia pariatur officiis facilis nam, nobis veniam vitae odio.</p>

		<p><a href="#" class="button button--bordered">Ghost button</a></p>

	</div>

</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				do_action( 'neckbeard_page_before' );
				?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				/**
				 * @hooked neckbeard_display_comments - 10
				 */
				do_action( 'neckbeard_page_after' );
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

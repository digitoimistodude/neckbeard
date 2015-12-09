<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself.
 *
 * Template name: Homepage
 *
 * @package neckbeard
 */

get_header(); ?>

<div class="slide slide-front" style="background-image:url(<?php if ( has_post_thumbnail($id)) : ?><?php echo wp_get_attachment_url( get_post_thumbnail_id($id) ); ?><?php else: ?><?php echo get_template_directory_uri(); ?>/images/coffee.jpg<?php endif; ?>);">
<div class="shade"></div>

	<div class="container">

		<!-- This is for testing only, please remove or edit these when starting a project -->
		<h2>Excepteur sint occaecat cupidatat non proident.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus amet mollitia delectus ut, quis laboriosam totam, dolores, magni dicta consectetur incidunt officia pariatur officiis facilis nam, nobis veniam vitae odio.</p>

		<p><a href="#" class="button button--bordered">Sample button</a></p>

	</div>

</div>

<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				// See hooks.php
				do_action( 'homepage' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .col-full -->
</div><!-- #content -->

<?php get_footer(); ?>

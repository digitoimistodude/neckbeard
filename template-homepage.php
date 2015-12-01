<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package neckbeard
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * @hooked neckbeard_homepage_content - 10
			 * @hooked neckbeard_product_categories - 20
			 * @hooked neckbeard_recent_products - 30
			 * @hooked neckbeard_featured_products - 40
			 * @hooked neckbeard_popular_products - 50
			 * @hooked neckbeard_on_sale_products - 60
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

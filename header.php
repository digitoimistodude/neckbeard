<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package neckbeard
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php neckbeard_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'neckbeard_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
		<div class="col-full">

			<?php
			/**
			 * @hooked neckbeard_skip_links - 0
			 * @hooked neckbeard_site_branding - 20
			 * @hooked neckbeard_secondary_navigation - 30
			 * @hooked neckbeard_product_search - 40
			 * @hooked neckbeard_primary_navigation - 50
			 * @hooked neckbeard_header_cart - 60
			 */
			do_action( 'neckbeard_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked neckbeard_header_widget_region - 10
	 */
	do_action( 'neckbeard_before_content' ); ?>

	<?php if(!is_front_page() ) : ?>
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
	<?php endif; ?>

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'neckbeard_content_top' ); ?>

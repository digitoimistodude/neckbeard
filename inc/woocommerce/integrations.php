<?php
/**
 * Integration logic for WooCommerce extensions
 *
 * @package neckbeard
 */

/**
 * Styles & Scripts
 * @return void
 */
function neckbeard_woocommerce_integrations_scripts() {
	/**
	 * Bookings
	 */
	if ( is_woocommerce_extension_activated( 'WC_Bookings' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-bookings-style', get_template_directory_uri() . '/inc/woocommerce/css/bookings.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-bookings-style', 'rtl', 'replace' );
	}

	/**
	 * Brands
	 */
	if ( is_woocommerce_extension_activated( 'WC_Brands' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-brands-style', get_template_directory_uri() . '/inc/woocommerce/css/brands.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-brands-style', 'rtl', 'replace' );
	}

	/**
	 * Wishlists
	 */
	if ( is_woocommerce_extension_activated( 'WC_Wishlists_Wishlist' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-wishlists-style', get_template_directory_uri() . '/inc/woocommerce/css/wishlists.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-wishlists-style', 'rtl', 'replace' );
	}

	/**
	 * AJAX Layered Nav
	 */
	if ( is_woocommerce_extension_activated( 'SOD_Widget_Ajax_Layered_Nav' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-ajax-layered-nav-style', get_template_directory_uri() . '/inc/woocommerce/css/ajax-layered-nav.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-ajax-layered-nav-style', 'rtl', 'replace' );
	}

	/**
	 * Variation Swatches
	 */
	if ( is_woocommerce_extension_activated( 'WC_SwatchesPlugin' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-variation-swatches-style', get_template_directory_uri() . '/inc/woocommerce/css/variation-swatches.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-variation-swatches-style', 'rtl', 'replace' );
	}

	/**
	 * Composite Products
	 */
	if ( is_woocommerce_extension_activated( 'WC_Composite_Products' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-composite-products-style', get_template_directory_uri() . '/inc/woocommerce/css/composite-products.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-composite-products-style', 'rtl', 'replace' );
	}

	/**
	 * WooCommerce Photography
	 */
	if ( is_woocommerce_extension_activated( 'WC_Photography' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-photography-style', get_template_directory_uri() . '/inc/woocommerce/css/photography.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-photography-style', 'rtl', 'replace' );
	}

	/**
	 * Product Reviews Pro
	 */
	if ( is_woocommerce_extension_activated( 'WC_Product_Reviews_Pro' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-product-reviews-pro-style', get_template_directory_uri() . '/inc/woocommerce/css/product-reviews-pro.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-product-reviews-pro-style', 'rtl', 'replace' );
	}

	/**
	 * WooCommerce Smart Coupons
	 */
	if ( is_woocommerce_extension_activated( 'WC_Smart_Coupons' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-smart-coupons-style', get_template_directory_uri() . '/inc/woocommerce/css/smart-coupons.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-smart-coupons-style', 'rtl', 'replace' );
	}

	/**
	 * WooCommerce Deposits
	 */
	if ( is_woocommerce_extension_activated( 'WC_Deposits' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-deposits-style', get_template_directory_uri() . '/inc/woocommerce/css/deposits.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-deposits-style', 'rtl', 'replace' );
	}

	/**
	 * WooCommerce Product Bundles
	 */
	if ( is_woocommerce_extension_activated( 'WC_Bundles' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-bundles-style', get_template_directory_uri() . '/inc/woocommerce/css/bundles.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-bundles-style', 'rtl', 'replace' );
	}

	/**
	 * WooCommerce Multiple Shipping Addresses
	 */
	if ( is_woocommerce_extension_activated( 'WC_Ship_Multiple' ) ) {
		wp_enqueue_style( 'neckbeard-woocommerce-sma-style', get_template_directory_uri() . '/inc/woocommerce/css/ship-multiple-addresses.css', 'neckbeard-woocommerce-style' );
		wp_style_add_data( 'neckbeard-woocommerce-sma-style', 'rtl', 'replace' );
	}
}

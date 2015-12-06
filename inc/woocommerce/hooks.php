<?php
/**
 * neckbeard WooCommerce hooks
 *
 * @package neckbeard
 */

/**
 * Styles
 * @see  neckbeard_woocommerce_scripts()
 */
add_action( 'wp_enqueue_scripts', 			'neckbeard_woocommerce_scripts',		20 );
add_filter( 'woocommerce_enqueue_styles', 	'__return_empty_array' );

if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.5', '<' ) ) {
	add_action( 'wp_footer', 'neckbeard_star_rating_script' );
}

/**
 * Layout
 * @see  neckbeard_before_content()
 * @see  neckbeard_after_content()
 * @see  woocommerce_breadcrumb()
 * @see  neckbeard_shop_messages()
 */
remove_action( 'woocommerce_before_main_content', 	'woocommerce_breadcrumb', 					20, 0 );
remove_action( 'woocommerce_before_main_content', 	'woocommerce_output_content_wrapper', 		10 );
remove_action( 'woocommerce_after_main_content', 	'woocommerce_output_content_wrapper_end', 	10 );
remove_action( 'woocommerce_sidebar', 				'woocommerce_get_sidebar', 					10 );
remove_action( 'woocommerce_after_shop_loop', 		'woocommerce_pagination', 					10 );
remove_action( 'woocommerce_before_shop_loop', 		'woocommerce_result_count', 				20 );
remove_action( 'woocommerce_before_shop_loop', 		'woocommerce_catalog_ordering', 			30 );
add_action( 'woocommerce_before_main_content', 		'neckbeard_before_content', 				10 );
add_action( 'woocommerce_after_main_content', 		'neckbeard_after_content', 				10 );
add_action( 'neckbeard_content_top', 				'neckbeard_shop_messages', 				1 );
add_action( 'neckbeard_content_top', 				'woocommerce_breadcrumb', 					10 );

add_action( 'woocommerce_after_shop_loop',			'neckbeard_sorting_wrapper',				9 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_catalog_ordering', 			10 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_result_count', 				20 );
add_action( 'woocommerce_after_shop_loop', 			'woocommerce_pagination', 					30 );
add_action( 'woocommerce_after_shop_loop',			'neckbeard_sorting_wrapper_close',			31 );

add_action( 'woocommerce_before_shop_loop',			'neckbeard_sorting_wrapper',				9 );
add_action( 'woocommerce_before_shop_loop', 		'woocommerce_catalog_ordering', 			10 );
add_action( 'woocommerce_before_shop_loop', 		'woocommerce_result_count', 				20 );
add_action( 'woocommerce_before_shop_loop', 		'neckbeard_woocommerce_pagination', 		30 );
add_action( 'woocommerce_before_shop_loop',			'neckbeard_sorting_wrapper_close',			31 );

/**
 * Products
 * @see  neckbeard_upsell_display()
 */
remove_action( 'woocommerce_after_single_product_summary', 	'woocommerce_upsell_display', 				15 );
add_action( 'woocommerce_after_single_product_summary', 	'neckbeard_upsell_display', 				15 );
remove_action( 'woocommerce_before_shop_loop_item_title', 	'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 		'woocommerce_show_product_loop_sale_flash', 6 );

/**
 * Header
 * @see  neckbeard_product_search()
 * @see  neckbeard_header_cart()
 */
add_action( 'neckbeard_header', 'neckbeard_product_search', 	40 );
add_action( 'neckbeard_header', 'neckbeard_header_cart', 		60 );

/**
 * Filters
 * @see  neckbeard_woocommerce_body_class()
 * @see  neckbeard_cart_link_fragment()
 * @see  neckbeard_thumbnail_columns()
 * @see  neckbeard_related_products_args()
 * @see  neckbeard_products_per_page()
 * @see  neckbeard_loop_columns()
 */
add_filter( 'body_class', 								'neckbeard_woocommerce_body_class' );
add_filter( 'woocommerce_product_thumbnails_columns', 	'neckbeard_thumbnail_columns' );
add_filter( 'woocommerce_output_related_products_args', 'neckbeard_related_products_args' );
add_filter( 'loop_shop_per_page', 						'neckbeard_products_per_page' );
add_filter( 'loop_shop_columns', 						'neckbeard_loop_columns' );

if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'neckbeard_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'neckbeard_cart_link_fragment' );
}

/**
 * Integrations
 * @see  neckbeard_woocommerce_integrations_scripts()
 * @see  neckbeard_add_bookings_customizer_css()
 */
add_action( 'wp_enqueue_scripts', 						'neckbeard_woocommerce_integrations_scripts' );

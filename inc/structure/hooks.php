<?php
/**
 * neckbeard hooks
 *
 * @package neckbeard
 */

/**
 * General
 * @see  neckbeard_setup()
 * @see  neckbeard_widgets_init()
 * @see  neckbeard_scripts()
 * @see  neckbeard_header_widget_region()
 */
add_action( 'after_setup_theme',			'neckbeard_setup' );
add_action( 'widgets_init',					'neckbeard_widgets_init' );
add_action( 'wp_enqueue_scripts',			'neckbeard_scripts',				10 );
add_action( 'neckbeard_before_content',	'neckbeard_header_widget_region',	10 );

/**
 * Header
 * @see  neckbeard_skip_links()
 * @see  neckbeard_secondary_navigation()
 * @see  neckbeard_site_branding()
 * @see  neckbeard_primary_navigation()
 */
add_action( 'neckbeard_header', 'neckbeard_skip_links', 				0 );
add_action( 'neckbeard_header', 'neckbeard_site_branding',			20 );
add_action( 'neckbeard_header', 'neckbeard_secondary_navigation',		30 );
add_action( 'neckbeard_header', 'neckbeard_primary_navigation',		50 );

/**
 * Footer
 * @see  neckbeard_footer_widgets()
 * @see  neckbeard_credit()
 */
add_action( 'neckbeard_footer', 'neckbeard_footer_widgets',	10 );
add_action( 'neckbeard_footer', 'neckbeard_credit',			20 );

/**
 * Homepage
 * @see  neckbeard_homepage_content()
 * @see  neckbeard_product_categories()
 * @see  neckbeard_recent_products()
 * @see  neckbeard_featured_products()
 * @see  neckbeard_popular_products()
 * @see  neckbeard_on_sale_products()
 */
add_action( 'homepage', 'neckbeard_homepage_content',		10 );
add_action( 'homepage', 'neckbeard_product_categories',	20 );
add_action( 'homepage', 'neckbeard_recent_products',		30 );
add_action( 'homepage', 'neckbeard_featured_products',		40 );
add_action( 'homepage', 'neckbeard_popular_products',		50 );
add_action( 'homepage', 'neckbeard_on_sale_products',		60 );

/**
 * Posts
 * @see  neckbeard_post_header()
 * @see  neckbeard_post_meta()
 * @see  neckbeard_post_content()
 * @see  neckbeard_paging_nav()
 * @see  neckbeard_single_post_header()
 * @see  neckbeard_post_nav()
 * @see  neckbeard_display_comments()
 */
add_action( 'neckbeard_loop_post',			'neckbeard_post_header',		10 );
add_action( 'neckbeard_loop_post',			'neckbeard_post_meta',			20 );
add_action( 'neckbeard_loop_post',			'neckbeard_post_content',		30 );
add_action( 'neckbeard_loop_after',		'neckbeard_paging_nav',		10 );
add_action( 'neckbeard_single_post',		'neckbeard_post_header',		10 );
add_action( 'neckbeard_single_post',		'neckbeard_post_meta',			20 );
add_action( 'neckbeard_single_post',		'neckbeard_post_content',		30 );
add_action( 'neckbeard_single_post_after',	'neckbeard_post_nav',			10 );
add_action( 'neckbeard_single_post_after',	'neckbeard_display_comments',	20 );

/**
 * Pages
 * @see  neckbeard_page_header()
 * @see  neckbeard_page_content()
 * @see  neckbeard_display_comments()
 */
add_action( 'neckbeard_page', 			'neckbeard_page_header',		10 );
add_action( 'neckbeard_page', 			'neckbeard_page_content',		20 );
add_action( 'neckbeard_page_after', 	'neckbeard_display_comments',	10 );

/**
 * Extras
 * @see  neckbeard_setup_author()
 * @see  neckbeard_body_classes()
 * @see  neckbeard_page_menu_args()
 */
add_filter( 'body_class',			'neckbeard_body_classes' );
add_filter( 'wp_page_menu_args',	'neckbeard_page_menu_args' );

<?php
/**
 * neckbeard setup functions
 *
 * @package neckbeard
 */

/**
 * Assign the neckbeard version to a var
 */
$theme 					= wp_get_theme( 'neckbeard' );
$neckbeard_version 	= $theme['Version'];

if ( ! function_exists( 'neckbeard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function neckbeard_setup() {

		/*
		 * Load Localisation files.
		 *
		 * Note: the first-loaded translation file overrides any following ones if the same translation is present.
		 */

		// wp-content/languages/themes/neckbeard-it_IT.mo
		load_theme_textdomain( 'neckbeard', trailingslashit( WP_LANG_DIR ) . 'themes/' );

		// wp-content/themes/child-theme-name/languages/it_IT.mo
		load_theme_textdomain( 'neckbeard', get_stylesheet_directory() . '/languages' );

		// wp-content/themes/neckbeard/languages/it_IT.mo
		load_theme_textdomain( 'neckbeard', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'		=> __( 'Primary Menu', 'neckbeard' ),
			'secondary'		=> __( 'Secondary Menu', 'neckbeard' ),
			'handheld'		=> __( 'Handheld Menu', 'neckbeard' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, comments, galleries, captions and widgets
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'widgets',
		) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );

		// Declare support for title theme feature
		add_theme_support( 'title-tag' );
	}
endif; // neckbeard_setup

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function neckbeard_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'neckbeard' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Header', 'neckbeard' ),
		'id'            => 'header-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	$footer_widget_regions = apply_filters( 'neckbeard_footer_widget_regions', 4 );

	for ( $i = 1; $i <= intval( $footer_widget_regions ); $i++ ) {
		register_sidebar( array(
			'name' 				=> sprintf( __( 'Footer %d', 'neckbeard' ), $i ),
			'id' 				=> sprintf( 'footer-%d', $i ),
			'description' 		=> sprintf( __( 'Widgetized Footer Region %d.', 'neckbeard' ), $i ),
			'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
			'after_widget' 		=> '</aside>',
			'before_title' 		=> '<h3>',
			'after_title' 		=> '</h3>',
			)
		);
	}
}

/**
 * Enqueue scripts and styles.
 * @since  1.0.0
 */
function neckbeard_scripts() {
	global $neckbeard_version;

	wp_enqueue_style( 'neckbeard-style', get_template_directory_uri() . '/css/layout.css', '', $neckbeard_version );

	wp_enqueue_script( 'neckbeard-navigation', get_template_directory_uri() . '/js/navigation.min.js', array( 'jquery' ), '20120206', true );

	wp_enqueue_script( 'neckbeard-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

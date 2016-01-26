<?php
/**
 * neckbeard engine room
 *
 * @package neckbeard
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

// NECKBEARD theme specific functions below
// Let's try and keep this minimal...

/*
* Hide WP updates nag
*/
add_action('admin_menu','wphidenag');
function wphidenag() {
   remove_action( 'admin_notices', 'update_nag', 3 );
}

/**
 * Remove query strings from static resources for optimization
 *
 * @link https://wordpress.org/support/topic/how-to-remove-query-strings-from-static-resources
 */

function _remove_script_version( $src ){
  $parts = explode( '?', $src );
  return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

/*
 * All times and local units in Finnish.
 */
 date_default_timezone_set('Europe/Helsinki');
 setlocale(LC_ALL, array('fi_FI.UTF-8','fi_FI@euro','fi_FI','finnish'));

/*
 * Custom icons for admin menus
 */
function FontAwesome_icons() {
    echo '<link href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
          <style type="text/css">
          #adminmenu #menu-posts-custom-post-type .wp-menu-image:before {
            content: "\f135";
            font-family: "FontAwesome" !important;
            font-size: 18px !important;
          }
          </style>
    ';
}
add_action('admin_head', 'FontAwesome_icons');
add_action('wp_head', 'FontAwesome_icons');

/*
 * Custom wp-admin CSS
 * Hide useless notifications in admin
 */
function custom_admin_css() {
   echo '<style type="text/css" media="screen">
   #wpseo-dismiss-about, #wcml_translations_message, #ga_analyticator_global_notification { display: none !important; }
   </style>';
}
add_action('admin_head', 'custom_admin_css');

/*
 * More accurate time in WP Last Login.
 */
function my_last_login( ) {
return 'j.m.Y, H:i';
}
add_filter('wpll_date_format', 'my_last_login');

/*
 * Custom uploads folder instead of default content/uploads.
 * Comment these out if you want to set up media library folder in wp-admin.
 */
update_option( 'upload_path', untrailingslashit( str_replace( 'wp', 'media', ABSPATH ) ) );
update_option( 'upload_url_path', untrailingslashit( str_replace( 'wp', 'media', get_site_url() ) ) );
define( 'uploads', ''.'media' );
add_filter( 'option_uploads_use_yearmonth_folders', '__return_false', 100 );

/*
 * Hidden blog menu items by default.
 * Comment these out if you want to use blog or comments.
 */
function menuitems_remove() {
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'menuitems_remove');

/*
 * Hiding things customers won't usually need.
 * Hides Tools, Themes, Customize, Widgets, Plugins, Custom Fields, Feedback.
 */
function remove_admin_menu_links() {
    $user = wp_get_current_user();
    if( $user && isset($user->user_email) && 'roni@dude.fi' == $user->user_email || 'juha@dude.fi' == $user->user_email ) {

      // For testing:
      // if( $user && isset($user->user_email) && 'roni@dude.fi' == $user->user_email) {

    } else {

        remove_menu_page('tools.php');
        remove_menu_page('themes.php?page=editcss');
        remove_menu_page('customize.php');
        remove_menu_page('widgets.php');
        remove_menu_page('plugins.php');
        remove_menu_page('edit.php?post_type=acf');
        remove_menu_page('edit.php?post_type=feedback');

  }

}
add_action('admin_menu', 'remove_admin_menu_links', 999);

/**
 * Remove WordPress Admin Bar
 *
 * @link http://davidwalsh.name/remove-wordpress-admin-bar-css
 */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
}
show_admin_bar(false);

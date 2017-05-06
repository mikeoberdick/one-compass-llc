<?php
/**
 * WP Understrrap Functions and Definitions
 *
 * @package understrap
 */

/**
 * Advanced Custom Fields
 */
require get_stylesheet_directory() . '/inc/acf.php';

/**
 * Setup Custom Dashboard
 */
require get_stylesheet_directory() . '/inc/dashboard.php';

/**
 * Register theme scripts
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
require get_stylesheet_directory() . '/inc/scripts.php';

/**
 * Theme setup
 */
require get_stylesheet_directory() . '/inc/setup.php';

/**
 * Register theme styles
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
require get_stylesheet_directory() . '/inc/styles.php';

/**
 * Configure users
 *
 * @link https://codex.wordpress.org/Function_Reference/register_new_user
 */
require get_stylesheet_directory() . '/inc/users.php';

/**
 * Customize widget areas
 *
 * @link https://codex.wordpress.org/Function_Reference/unregister_sidebar
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_stylesheet_directory() . '/inc/widgets.php';

/**
 * Advanced Custom Fields
 */
require get_stylesheet_directory() . '/inc/woocommerce.php';
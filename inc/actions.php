<?php
/**
 * Various actions to add assets and features to the site
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

/**
 * The wp_enqueue_scripts hook
 */
require get_template_directory() . '/inc/actions/wp-enqueue-scripts.php';

/**
 * Widgets areas
 */
require get_template_directory() . '/inc/actions/widget-areas.php';

/**
 * WP Customizer settings
 */
require get_template_directory() . '/inc/actions/customizer.php';

/**
 * WP Head
 */
require get_template_directory() . '/inc/actions/wp-head.php';

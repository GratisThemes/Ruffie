<?php
/**
 * Filters for body_class().
 *
 * @package ruffie
 * @since   ruffie 2.0
 */

/**
 * Add classes to the body depending on customize settings.
 *
 * @param  array $classes Body class names.
 *
 * @return array $classes Body class names.
 */
function ruffie_body_class( $classes ) {

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'right-sidebar-widget-area' ) ) {
    $classes[] = 'has-right-sidebar';
  }

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'left-sidebar-widget-area' ) ) {
    $classes[] = 'has-left-sidebar';
  }

  return $classes;

}
add_filter( 'body_class', 'ruffie_body_class' );

<?php
/**
 * The wp_head hook
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

/**
 * The wp_head hook
 */
function ruffie_wp_head() {
  // Pingback.
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}
add_action( 'wp_head', 'ruffie_wp_head' );

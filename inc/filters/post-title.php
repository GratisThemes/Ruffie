<?php
/**
 * Adds a title to posts and pages that are missing one.
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

/**
 * Add title for untitled posts
 *
 * @param string $title The title of the post or page.
 *
 * @return string
 **/
function ruffie_the_title( $title ) {
  return '' === $title ? esc_html_x( 'Untitled post', 'Added to posts and pages that have missing titles', 'ruffie' ) : $title;
}
add_filter( 'the_title', 'ruffie_the_title' );

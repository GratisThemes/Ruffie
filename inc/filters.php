<?php
/**
 * Various changes to wordpress functions
 *
 * @package Ruffie
 */


/**
 * Custom excerpt more
 *
 * @since 1.0.0
 */
function ruffie_excerpt_more( $more ) {
  if ( is_admin() ) return $more;

  if ( !get_theme_mod( 'read_more' , true) ) return '...';

  return sprintf(
    '...<a class="read-more-link" href="%1$s">%2$s<span class="screen-reader-text">%2$s</span></a>',
    esc_url( get_permalink( get_the_ID() ) ),
    __( 'Read more', 'ruffie' )
  );
}
add_filter('excerpt_more', 'ruffie_excerpt_more');

/**
 * Add classes to the body depending on customize settings
 *
 * @since 1.0.0
 * @version 1.5.0
 * @param Array $classes [Body class names]
 */
function ruffie_body_class( $classes ) {

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'right-sidebar-widget-area' ) ) {
    $classes[]  = 'has-right-sidebar';
  }

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'left-sidebar-widget-area' ) ) {
    $classes[]  = 'has-left-sidebar';
  }

  return $classes;

}
add_filter( 'body_class', 'ruffie_body_class' );

/**
 * Remove prefix from archive titles
 *
 * @since 1.5.0
 * @param  String $title [Archive title with prefix]
 * @return String [Archive title without prefix]
 */
function ruffie_get_the_archive_title( $title ) {
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif ( is_year() ) {
    $title = get_the_date( _x( 'Y', 'yearly archives date format', 'ruffie' ) );
  } elseif ( is_month() ) {
    $title = get_the_date( _x( 'F Y', 'monthly archives date format', 'ruffie' ) );
  } elseif ( is_day() ) {
    $title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'ruffie' ) );
  } elseif ( is_post_type_archive() ) {
    $title = post_type_archive_title( '', false );
  }

  return $title;
}
add_filter( 'get_the_archive_title', 'ruffie_get_the_archive_title' );
?>
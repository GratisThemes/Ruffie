<?php
/**
 * Widget areas
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

/**
 * The widgets_init action
 */
function ruffie_widgets_init() {

  /* Above content widget areas */
  register_sidebar(
    array(
      'name'          => __( 'Above Content Widget Area (column one)', 'ruffie' ),
      'id'            => 'above-content-widget-area',
      'description'   => __( 'Widget area above the content, left column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Above Content Widget Area (column two)', 'ruffie' ),
      'id'            => 'above-content-widget-area-two',
      'description'   => __( 'Widget area above the content, center column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Above Content Widget Area (column three)', 'ruffie' ),
      'id'            => 'above-content-widget-area-three',
      'description'   => __( 'Widget area above the content, right column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  /* Sidebars */
  register_sidebar(
    array(
      'name'          => __( 'Left Sidebar Widget Area', 'ruffie' ),
      'id'            => 'left-sidebar-widget-area',
      'description'   => __( 'Widget area at the left side of the content', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Right Sidebar Widget Area', 'ruffie' ),
      'id'            => 'right-sidebar-widget-area',
      'description'   => __( 'Widget area at the right side of the content', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  /* Footer widget areas, four columns */
  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (column one)', 'ruffie' ),
      'id'            => 'footer-widget-area-one',
      'description'   => __( 'Widget area in the footer, far left column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (column two)', 'ruffie' ),
      'id'            => 'footer-widget-area-two',
      'description'   => __( 'Widget area in the footer, center left column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (column three)', 'ruffie' ),
      'id'            => 'footer-widget-area-three',
      'description'   => __( 'Widget area in the footer, center right column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer Widget Area (column four)', 'ruffie' ),
      'id'            => 'footer-widget-area-four',
      'description'   => __( 'Widget area in the footer, far right column', 'ruffie' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

}
add_action( 'widgets_init', 'ruffie_widgets_init' );

<?php
/**
 * Widget areas
 *
 * @package Ruffie
 * @since  1.0.0
 */

function ruffie_widgets_init() {

  register_sidebar( array(
    'name'          => __('Above Content Widget Area', 'ruffie'),
    'id'            => 'above-content-widget-area',
    'description'   => __('Widget area above the content', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Left Sidebar Widget Area', 'ruffie'),
    'id'            => 'left-sidebar-widget-area',
    'description'   => __('Widget area at the left side of the content', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Right Sidebar Widget Area', 'ruffie'),
    'id'            => 'right-sidebar-widget-area',
    'description'   => __('Widget area at the right side of the content', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Area One', 'ruffie'),
    'id'            => 'footer-widget-area-one',
    'description'   => __('Widget area in the footer', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Area Two', 'ruffie'),
    'id'            => 'footer-widget-area-two',
    'description'   => __('Widget area in the footer', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Area Three', 'ruffie'),
    'id'            => 'footer-widget-area-three',
    'description'   => __('Widget area in the footer', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __('Footer Widget Area Four', 'ruffie'),
    'id'            => 'footer-widget-area-four',
    'description'   => __('Widget area in the footer', 'ruffie'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'ruffie_widgets_init' );
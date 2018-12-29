<?php
/**
 * Scripts, styles and fonts
 *
 * @package Ruffie
 * @since 1.0.0
 */
function ruffie_scripts() {
  
  // Fonts from google
  wp_enqueue_style( 'ruffie-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), null);

  // Enqueue Font Awesome (example icon set)
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/icons/font-awesome/css/font-awesome.min.css', array(), '4.6.3');

  // Theme stylesheet
  wp_enqueue_style( 'ruffie-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

  // Theme JavaScript
  wp_enqueue_script( 'ruffie-script', get_template_directory_uri() . '/assets/js/functions.js', false, wp_get_theme()->get('Version'), true );

  // Comment-reply script
  if ( !is_admin() && is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles
  $options = [
    '#' . get_background_color(),
    get_theme_mod( 'text_color',       '#191919' ),
    get_theme_mod( 'link_color',       '#191919' ),
    get_theme_mod( 'border_color',     '#191919' ),
    get_theme_mod( 'site_title_color', '#191919' ),
    get_theme_mod( 'tagline_color',    '#191919' )
  ];

  $css = '
    :root {
      --color-bg: %1$s; 
      --color-text: %2$s;
      --color-anchor: %3$s;
      --color-border: %4$s;
      --color-title: %5$s;
      --color-tagline: %6$s;
    }
  ';

  
  wp_add_inline_style( 'ruffie-style', vsprintf( $css, $options ) );

}
add_action( 'wp_enqueue_scripts', 'ruffie_scripts' );
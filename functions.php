<?php
/**
 * Theme functions and definitions
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

if ( ! function_exists( 'ruffie_setup' ) ) {
  /**
   * Set up theme defaults and registers support for various WordPress features
   */
  function ruffie_setup() {
    /**
     * Support for translation files
     * https://codex.wordpress.org/Function_Reference/load_theme_textdomain
     */
    load_theme_textdomain( 'ruffie', get_template_directory() . '/languages' );

    /**
     * Main content width
     * https://codex.wordpress.org/Content_Width
     */
    if ( ! isset( $content_width ) ) {
      $content_width = 960;
    }

    /**
     * Register support for various WordPress features
     */

    /* https://codex.wordpress.org/Automatic_Feed_Links */
    add_theme_support( 'automatic-feed-links' );

    /* https://codex.wordpress.org/Title_Tag */
    add_theme_support( 'title-tag' );

    /* https://codex.wordpress.org/Theme_Logo */
    add_theme_support( 'custom-logo' );

    /* https://codex.wordpress.org/Post_Thumbnails */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'align-wide' );

    /* https://codex.wordpress.org/Custom_Backgrounds */
    add_theme_support(
      'custom-background',
      array(
        'default-color' => 'CA2F2A',
      )
    );

    /* https://codex.wordpress.org/Theme_Markup */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    /* https://codex.wordpress.org/Post_Formats */
    add_theme_support(
      'post-formats',
      array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
      )
    );

    /* https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content */
    add_theme_support( 'responsive-embeds' );

    /* Navigation */
    register_nav_menus(
      array(
        'header' => __( 'Header', 'ruffie' ),
        'footer' => __( 'Footer', 'ruffie' ),
      )
    );

  }
  add_action( 'after_setup_theme', 'ruffie_setup' );

}

// Actions.
require_once get_template_directory() . '/inc/actions.php';

// Filters.
require_once get_template_directory() . '/inc/filters.php';

// Theme specific functions.
require_once get_template_directory() . '/inc/theme-functions.php';

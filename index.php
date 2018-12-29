<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Ruffie
 * @since 1.0.0
 * @version 1.5.0
 */
?>

<?php get_header(); ?>

<div id="main-content-container">

  <?php get_sidebar( 'left' ); ?>
  
  <main id="site-main" role="main">

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {

      the_post();
      
      $ruffie_post_format = get_post_format();

      if ( $ruffie_post_format || get_theme_mod( 'display_content', false ) ) {

        get_template_part( 'template-parts/content', $ruffie_post_format );

      } else {

        get_template_part( 'template-parts/content', 'excerpt' );

      }
    
    }

      the_posts_navigation( array(
        'prev_text' => __( 'Older', 'ruffie' ),
        'next_text' => __( 'Newer', 'ruffie' ),
      ) );
    
    } else {
      
      get_template_part( 'template-parts/content', 'none' );

    }
    ?>

  </main><!-- #site-main -->

  <?php get_sidebar(); ?>

</div><!-- #main-content-continer -->

<?php get_footer(); ?>
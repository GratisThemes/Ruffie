<?php
/**
 * Template for displaying search results
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
    
    <header class="page-header">
      <?php
      if ( have_posts() ) {
        printf(
          '<h1>' . __( 'Search results for: %s', 'ruffie' ) . '</h1>',
          '<span>' . esc_html( get_search_query() ) . '</span>'
        );
      } else {
        printf(
          '<h1>' . __( 'Nothing found', 'ruffie' ) . '</h1>'
        );
      }
      ?>
    </header>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content', 'excerpt');
      }

      the_posts_navigation( array(
        'prev_text' => __( 'Older', 'ruffie' ),
        'next_text' => __( 'Newer', 'ruffie' ),
      ) );
    
    } else {
      
      get_template_part( 'template-parts/content', 'none');
    
    }
    ?>
  </main><!-- #site-main -->

  <?php get_sidebar(); ?>

</div><!-- #main-content-continer -->

<?php get_footer(); ?>
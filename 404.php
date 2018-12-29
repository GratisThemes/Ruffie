<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Ruffie
 * @since 1.0.0
 * @version 1.5.0
 */
?>

<?php get_header(); ?>

<div id="main-content-container">

  <main id="site-main" role="main">

    <section class="error-404 not-found">

      <header class="page-header">
        <h1><?php _e( '404 Not Found', 'ruffie' ); ?></h1>
      </header>

      <div class="entry-content">
        
        <p>
          <?php _e( 'Oops! That page can&rsquo;t be found.', 'ruffie' ); ?>
          
          <br />
          
          <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ruffie' ); ?>
        </p>

        <?php get_search_form(); ?>
      
      </div><!-- .entry-content -->

    </section><!-- .error-404 -->

  </main><!-- #site-main -->

</div><!-- #main-content-continer -->

<?php get_footer(); ?>
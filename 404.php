<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <section class="content-container">

    <article class="error-404 not-found">
      <header class="page-header">
        <h1><?php esc_html_e( '404 Not Found', 'ruffie' ); ?></h1>
      </header>
      
      <section class="entry-content">
        <p>
          <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ruffie' ); ?>
          <br />
          <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'ruffie' ); ?>
        </p>

        <?php get_search_form(); ?>

      </section><!-- .entry-content -->

    </article><!-- .error-404 -->

  </section><!-- .content-container -->

</main><!-- .site-main -->

<?php get_footer(); ?>

<?php
/**
 * Template for displaying no content
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

?>
<article class="no-results not-found">

  <section class="entry-content">
    <p>
      <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ruffie' ); ?>
    </p>

    <?php get_search_form(); ?>
  </section><!-- .entry-content -->

</article><!-- .no-results.not-found -->

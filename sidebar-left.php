<?php
/**
 * Template for displaying the left sidebar widget area
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

?>

<?php if ( is_active_sidebar( 'left-sidebar-widget-area' ) ) : ?>

  <aside class="widget-area widget-area-left-sidebar" role="complementary">
    <?php dynamic_sidebar( 'left-sidebar-widget-area' ); ?>
  </aside>

<?php endif; ?>

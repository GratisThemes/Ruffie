<?php
/**
 * Template for displaying the right sidebar widget area
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

?>

<?php if ( is_active_sidebar( 'right-sidebar-widget-area' ) ) : ?>

  <aside class="widget-area widget-area-right-sidebar" role="complementary">
    <?php dynamic_sidebar( 'right-sidebar-widget-area' ); ?>
  </aside>

<?php endif; ?>

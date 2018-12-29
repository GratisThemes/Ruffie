<?php
/**
 * Template for displaying the sidebar widget area
 *
 * @package Ruffie
 * @since 1.0.0
 * @version 1.5.0
 */
?>

<?php if ( is_active_sidebar( 'right-sidebar-widget-area' ) ): ?>

  <aside id="widget-area-right-sidebar" class="widget-area">

    <?php dynamic_sidebar( 'right-sidebar-widget-area' ); ?>

  </aside>

<?php endif; ?>
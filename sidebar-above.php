<?php
/**
 * Template for displaying a widget area and additional content
 *
 * @package Ruffie
 * @since Ruffie 1.0.0
 * @version 1.5.0
 */

if ( is_active_sidebar( 'above-content-widget-area' )  ) : ?>
  
  <div id="widget-area-above-content" class="widget-area" role="complementary">
    
    <?php dynamic_sidebar( 'above-content-widget-area' ); ?>
  
  </div><!-- #widget-area-above-content -->

<?php endif; ?>
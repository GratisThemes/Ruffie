<?php
/**
 * Template for displaying the above content widget area
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

if ( ! is_home() && ! is_front_page() ) {
  return;
}

if (
  ! is_active_sidebar( 'above-content-widget-area' ) &&
  ! is_active_sidebar( 'above-content-widget-area-two' ) &&
  ! is_active_sidebar( 'above-content-widget-area-three' )
) {
  return false;
}
?>
<div class="widget-areas-above-content widget-areas">

  <?php if ( is_active_sidebar( 'above-content-widget-area' ) ) : ?>
    <div class="widget-area widget-area-above-content-one" role="complementary">
      <?php dynamic_sidebar( 'above-content-widget-area' ); ?>
    </div>
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-widget-area-two' ) ) : ?>
    <div class="widget-area widget-area-above-content-two" role="complementary">
      <?php dynamic_sidebar( 'above-content-widget-area-two' ); ?>
    </div>
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-widget-area-three' ) ) : ?>
    <div class="widget-area widget-area-above-content-three" role="complementary">
      <?php dynamic_sidebar( 'above-content-widget-area-three' ); ?>
    </div>
  <?php endif; ?>

</div><!-- .above-content-widget-areas -->

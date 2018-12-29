<?php
/**
 * Template for displaying a widget area and additional content in the footer
 *
 * @package Ruffie
 * @since Ruffie 1.0
 * @version 1.5.0
 */
?>

<?php // Quit early if there are no widget areas to display
if( !is_active_sidebar( 'footer-widget-area-one' )  &&
    !is_active_sidebar( 'footer-widget-area-two' )  &&
    !is_active_sidebar( 'footer-widget-area-three' )  &&
    !is_active_sidebar( 'footer-widget-area-four' ) 
){
  return false;
}
?>

<div id="footer-widget-areas-container">

  <?php if ( is_active_sidebar( 'footer-widget-area-one' ) ) : ?>
    <div id="widget-area-footer-one" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
    </div><!-- #widget-area-footer-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-two' ) ) : ?>
    <div id="widget-area-footer-two" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
    </div><!-- #widget-area-footer-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-three' ) ) : ?>
    <div id="widget-area-footer-three" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
    </div><!-- #widget-area-footer-three -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-widget-area-four' ) ) : ?>
    <div id="widget-area-footer-four" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
    </div><!-- #widget-area-footer-four -->
  <?php endif; ?>

</div>
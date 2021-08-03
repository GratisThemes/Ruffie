<?php
/**
 * Template for displaying the header navigation
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

?>

<?php if ( has_nav_menu( 'header' ) ) : ?>
  <nav class="header-nav-container">
    <input type="checkbox" id="header-nav-toggle" />

    <label for="header-nav-toggle" class="header-nav-toggle-label">
      <span class="header-nav-toggle-label__open"><?php esc_html_e( 'Menu', 'ruffie' ); ?><i class="fas fa-bars"></i></span>
      <span class="header-nav-toggle-label__close"><?php esc_html_e( 'Close menu', 'ruffie' ); ?><i class="fas fa-times"></i></span>
      <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'ruffie' ); ?></span>
    </label><!-- .header-nav-toggle-label -->

    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'header',
        'menu_class'     => 'header-nav',
        'container'      => false,
      )
    );
    ?>
  </nav>
<?php endif; ?>

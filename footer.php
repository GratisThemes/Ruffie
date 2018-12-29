 <?php
/**
 * Template for displaying the site footer
 *
 * @package Ruffie
 * @since 1.0.0
 * @version 1.5.0
 */
?>
    <?php get_sidebar( 'footer' ); ?>

    <footer id="site-footer">
      <?php
      if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-nav',
          'container'      => false,
          'depth'          => 1,
        ) );
      }
      ?>

      <div id="site-footer-information">
        <span>
        <?php
          echo get_theme_mod( 'footer_text', get_bloginfo( 'name' ) );
          if ( get_theme_mod( 'footer_copyright', true ) ) echo ' &copy;';
          if ( get_theme_mod( 'footer_year', true ) ) echo ' ' . date( 'Y' );
        ?>
        </span>

        <?php
        if ( get_theme_mod( 'footer_advert', true ) ) {
          $ruffie_theme_data = wp_get_theme();

          printf(
            '<span>' . __( 'Theme: %s', 'ruffie' ) . '</span>',
            '<a href="' . esc_url( $ruffie_theme_data->get( 'ThemeURI' ) ) . '">' . $ruffie_theme_data[ 'Name' ] . '</a>'
          );
        }
        ?>

        <?php
        if ( function_exists( 'the_privacy_policy_link' ) ) {
          the_privacy_policy_link();
        }
        ?>

      </div><!-- #site-footer-information -->

      <?php if ( get_theme_mod( 'scrolltotop', true ) ): ?>
        <a href="#" id="scroll-to-top">
          <span class="screen-reader-text"><?php _e( 'Scroll to the top', 'ruffie' ); ?></span>
        </a>
      <?php endif; ?>

    </footer><!-- #site-footer -->
  </div><!-- #site-wrapper -->

  <?php wp_footer(); ?>
  
</body>
</html>
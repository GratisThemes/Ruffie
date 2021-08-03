<?php
/**
 * Template for displaying the Site's header
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

?>
<header class="site-header">

  <div class="site-branding">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    }
    ?>

    <?php if ( get_theme_mod( 'display_site_title', true ) ) : ?>
      <?php if ( is_front_page() && ! is_paged() ) : ?>
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1><!-- .site-title -->
      <?php elseif ( is_front_page() || is_home() ) : ?>
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1><!-- .site-title -->
      <?php else : ?>
        <p class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </p><!-- .site-title -->
      <?php endif; ?>
    <?php endif; ?>

  </div><!-- .site-branding -->

  <?php ruffie_social_links(); ?>

</header>

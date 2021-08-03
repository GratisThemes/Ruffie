<?php
/**
 * Template for displaying the hero section
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

if ( ! is_home() && ! is_front_page() ) {
  return;
}

if ( max( 1, get_query_var( 'paged' ) ) > 1 ) {
  return;
}

?>

<?php if ( get_theme_mod( 'display_tagline', true ) ) : ?>
  <section class="hero">
    <p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
  </section>
<?php endif; ?>

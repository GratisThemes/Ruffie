<?php
/**
 * Template for displaying landing and archive pages
 *
 * @package Ruffie
 * @since   Ruffie 1.0
 */

$ruffie_archive_title       = '';
$ruffie_archive_description = '';

if ( is_search() ) {
  $ruffie_archive_title = sprintf(
    /* translators: %s: search term */
    __( 'Search results for: "%s"', 'ruffie' ),
    '<span>' . get_search_query() . '</span>'
  );

} elseif ( is_archive() && ! have_posts() ) {
  $ruffie_archive_title = __( 'Nothing Found', 'ruffie' );

} elseif ( ! is_home() ) {
  $ruffie_archive_title       = get_the_archive_title();
  $ruffie_archive_description = get_the_archive_description();
}
?>

<?php get_header(); ?>

<main class="site-main" role="main">

<?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php if ( $ruffie_archive_title || $ruffie_archive_description ) : ?>
      <header class="archive-header">
        <?php if ( $ruffie_archive_title ) : ?>
          <h1><?php echo wp_kses_post( $ruffie_archive_title ); ?></h1>
        <?php endif; ?>

        <?php if ( $ruffie_archive_description ) : ?>
          <?php echo wp_kses_post( wpautop( $ruffie_archive_description ) ); ?>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content/content', get_post_format() );
      }

      the_posts_navigation(
        array(
          'prev_text' => '<i class="fa fa-long-arrow-alt-left"></i>' . __( 'Older', 'ruffie' ),
          'next_text' => __( 'Newer', 'ruffie' ) . '<i class="fa fa-long-arrow-alt-right"></i>',
        )
      );
    } else {
      get_template_part( 'template-parts/content/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

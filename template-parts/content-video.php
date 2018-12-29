<?php
/**
 * Template for displaying video content
 *
 * @package Ruffie
 * @since 1.5.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part( 'template-parts/header', 'entry' ); ?>

  <?php if ( 
    get_the_post_thumbnail() !== '' &&
    (
      (  is_singular() && get_theme_mod( 'thumbnail_content', true ) ) ||
      ( !is_singular() && get_theme_mod( 'thumbnail_index',   true ) )
    )
  ): ?>
    
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      
      <?php the_post_thumbnail( 'ruffie-featured-image' ); ?>
    
    </a><!-- .post-thumbnail -->
  
  <?php endif; ?>

  <article class="entry-content">
    
    <?php 
    $ruffie_video_content = apply_filters( 'the_content', get_the_content() );
    $ruffie_video = false;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $ruffie_video_content, 'wp-playlist-script' ) ) {
      $ruffie_video = get_media_embedded_in_content( $ruffie_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }
    
    if ( !is_single() && !empty( $ruffie_video ) ) {
      
      foreach ( $ruffie_video as $ruffie_video_html ) {
        echo $ruffie_video_html;
      }

    } else {
      
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'ruffie' ),
        'after' => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after' => '</span>',
      ) );
    }
    ?>
  
  </article><!-- .entry-content -->

  <?php if ( is_single() ) get_template_part('template-parts/footer', 'entry'); ?>
  
</section>
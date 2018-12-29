<?php
/**
 * Template for displaying Attachments
 *
 * @package Ruffie
 * @since 1.0.0
 * @version 1.5.0
 */
?>

<?php get_header(); ?>

<div id="main-content-container">

  <main id="site-main" role="main">

    <?php while ( have_posts() ): the_post(); ?>

      <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part( 'template-parts/header', 'entry' ); ?>
        
        <article class="entry-content">

          <figure class="entry-attachment wp-block-image">
            
            <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

            <figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>

          </figure><!-- .entry-attackment -->

          <?php the_content(); ?>

          <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'ruffie' ),
            'after' => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after' => '</span>',
          ) );
          ?>
        
        </article><!-- .entry-content -->

      </section>

      <footer class="entry-footer">
        
        <div class="nav-links image-navigation">
          
          <div class="nav-previous">
            <?php previous_image_link( false, __( 'Previous Image', 'ruffie' ) ); ?>
          </div>
          
          <div class="nav-next">
            <?php next_image_link( false, __( 'Next Image', 'ruffie' ) ); ?>
          </div>
        
        </div><!-- .nav-links -->
      
      </footer><!-- .entry-footer -->

      <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
      
    <?php endwhile; ?>

  </main><!-- #site-main -->

</div><!-- #main-content-continer -->

<?php get_footer(); ?>
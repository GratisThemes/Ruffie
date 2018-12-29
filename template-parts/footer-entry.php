<?php
/**
 * Template for displaying entry footers
 *
 * @package Ruffie
 * @since 1.5.0
 */
?>
<footer class="entry-footer">
  
  <?php if ( has_tag() && get_theme_mod( 'entry_meta_tags', true) ) : ?>
    <span class="post-tags"><?php the_tags( '', '' ); ?></span>
  <?php endif; ?>

  <?php if ( get_theme_mod( 'author_bio', true ) ): ?>
    <div class="author-bio">
      <?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?>

      <div>
        <?php
        printf(
          '<h5>' . __( 'Author: %s', 'ruffie' ) . '</h5>',
          sprintf(
            '<a href="%1$s">%2$s</a>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            get_the_author()
          )
        );
        ?>

        <p><?php the_author_meta( 'description' ); ?></p>
      </div>
    </div><!-- .author-bio -->
  <?php endif; ?>
    
  <?php
  the_post_navigation( array(
    'prev_text' => 
      '<span class="screen-reader-text">' . __( 'Previous post', 'ruffie' ) . '</span>
       <span>' . __( 'Previous', 'ruffie' ) . '</span>
       <span>%title</span>',
    'next_text' => 
      '<span class="screen-reader-text">' . __( 'Next post', 'ruffie' ) . '</span>
       <span>' . __( 'Next', 'ruffie' ) . '</span>
       <span>%title</span>',
  ) );
  ?>
</footer><!-- .entry-footer -->
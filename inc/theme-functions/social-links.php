<?php
/**
 * Social media links
 *
 * @package Ruffie
 * @since   Ruffie 2.0
 */

/**
 * Social media icons
 */
$ruffie_social_icons = array(
  'Twitter'    => 'fa-twitter',
  'Facebook'   => 'fa-facebook-f',
  'Instagram'  => 'fa-instagram',
  'Vine'       => 'fa-vine',
  'LinkedIn'   => 'fa-linkedin-in',
  'Google+'    => 'fa-google-plus-g',
  'YouTube'    => 'fa-youtube',
  'Twitch'     => 'fa-twitch',
  'Vimeo'      => 'fa-vimeo-v',
  'Pinterest'  => 'fa-pinterest-p',
  'Reddit'     => 'fa-reddit-alien',
  'Steam'      => 'fa-steam-symbol',
  'Flickr'     => 'fa-flickr',
  'Tumblr'     => 'fa-tumblr',
  'Spotify'    => 'fa-spotify',
  'Soundcloud' => 'fa-soundcloud',
  'MixCloud'   => 'fa-mixcloud',
  'GitHub'     => 'fa-github',
  'BitBucket'  => 'fa-bitbucket',
  'Behance'    => 'fa-behance',
  'LastFM'     => 'fa-lastfm',
);

/**
 * Formated social media elements
 */
function ruffie_social_links() {
  global $ruffie_social_icons;

  ?>
  <div class="social-links">
    <?php if ( get_theme_mod( 'social_media_rss' ) ) : ?>
      <a class="social-links__rss" title="<?php esc_attr( bloginfo( 'rss2_url' ) ); ?>" aria-label="<?php esc_attr_e( 'RSS feed', 'ruffie' ); ?>" href="<?php esc_url( bloginfo( 'rss2_url' ) ); ?>" target="_blank">
        <i class="fa fa-rss"></i>
      </a>
    <?php endif; ?>

    <?php
    foreach ( $ruffie_social_icons as $service => $icon ) :
      $service_slug = strtolower( $service );
      ?>
      <?php if ( get_theme_mod( 'social_media_' . $service_slug ) ) : ?>
        <a class="<?php echo esc_attr( 'social-links__' . $service_slug ); ?>"
          title="<?php echo esc_attr( $service ); ?>"
          aria-label="<?php echo esc_attr( $service ); ?>"
          href="<?php echo esc_url( get_theme_mod( 'social_media_' . $service_slug ) ); ?>"
          target="_blank"
        >
          <i class="fab <?php echo esc_attr( $icon ); ?>"></i>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div><!-- .social-links -->
  <?php
}

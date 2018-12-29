<?php
/**
 * Custom theme functions
 *
 * @package Ruffie
 * @since 1.1.0
 */

/**
  * Social media icons
  *
  * @since 1.1.0
  */
$ruffie_social_icons = array(
  'Twitter'       =>  'fa-twitter',
  'Facebook'      =>  'fa-facebook',
  'Instagram'     =>  'fa-instagram',
  'Vine'          =>  'fa-vine',
  'LinkedIn'      =>  'fa-linkedin',
  'Google+'       =>  'fa-google-plus',
  'YouTube'       =>  'fa-youtube',
  'Twitch'        =>  'fa-twitch',
  'Vimeo'         =>  'fa-vimeo',
  'Pinterest'     =>  'fa-pinterest',
  'Reddit'        =>  'fa-reddit-alien',
  'Steam'         =>  'fa-steam',
  'Flickr'        =>  'fa-flickr',
  'Tumblr'        =>  'fa-tumblr',
  'Spotify'       =>  'fa-spotify',
  'Soundcloud'    =>  'fa-soundcloud',
  'MixCloud'      =>  'fa-mixcloud',
  'GitHub'        =>  'fa-github',
  'BitBucket'     =>  'fa-bitbucket',
  'Behance'       =>  'fa-behance',
  'LastFM'        =>  'fa-lastfm',
);

/**
 * Formated social media elements
 * 
 * @since 1.1.0
 * @return Element [div#social-links]
 */
function ruffie_social_links() {
  global $ruffie_social_icons;

  ?>
  <div id="social-links">
    <?php if ( get_theme_mod( 'social_media_rss' ) ): ?>
      <a title="<?php esc_attr( bloginfo( 'rss2_url' ) ); ?>" href="<?php esc_url( bloginfo('rss2_url') ); ?>" target="_blank">
        <i class="fa fa-rss"></i>
      </a>
    <?php endif; ?>

    <?php foreach( $ruffie_social_icons as $service => $icon ): ?>
      <?php if ( get_theme_mod( 'social_media_'.strtolower( $service ) ) ): ?>
        <a title="<?php echo esc_attr( $service ); ?>" href="<?php echo esc_url( get_theme_mod( 'social_media_'.strtolower( $service ) ) ); ?>" target="_blank">
          <i class="fa <?php echo esc_attr( $icon ); ?>"></i>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div><!-- #social-links -->
<?php
}
?>
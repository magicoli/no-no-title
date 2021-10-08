<?php
/**
 * Plugin Name:     No '(no title)'
 * Plugin URI:      https://github.com/magicoli/no-no-title
 * Description:     Show an excerpt instead of '(no title)' in admin lists for posts without title.
 * Author:          Magiiic
 * Author URI:      https://magiiic.com/
 * Text Domain:     no-no-title
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         No_No_Title
 *
 * Icon1x: https://git.magiiic.com/wordpress/no-no-title/-/raw/master/assets/icon-128x128.jpg
 * Icon2x: https://git.magiiic.com/wordpress/no-no-title/-/raw/master/assets/icon-256x256.jpg
 * BannerHigh: https://git.magiiic.com/wordpress/no-no-title/-/raw/master/assets/banner-1544x500.jpg
 * BannerLow: https://git.magiiic.com/wordpress/no-no-title/-/raw/master/assets/banner-772x250.jpg
 *
 * Slight adjustments from the solution posted on Solution found on https://wordpress.stackexchange.com/questions/189671/show-excerpt-if-no-title-in-admin-view
 */

/**
 *  Modify post titles in the edit.php screen.
 *  If the post title is empty, then show max 10 words from the post content instead.
 *  Solution found on https://wordpress.stackexchange.com/questions/189671/show-excerpt-if-no-title-in-admin-view
 */

add_action( 'load-edit.php', function()
{
  add_filter( 'the_title', function( $title )
  {
    $post = get_post();
    if( is_a( $post, '\WP_Post' ) && ! $post->post_title && $post->post_content )
    $title = wp_trim_words( strip_shortcodes( strip_tags( wpautop ( preg_replace('/\n|<br>|<p>/i', ' ', $post->post_content ), false ) ) ), 10 );
    return $title;
  } );
} );

if(file_exists(plugin_dir_path( __FILE__ ) . 'updates.php'))
include_once plugin_dir_path( __FILE__ ) . 'updates.php';

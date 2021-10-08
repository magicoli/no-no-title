<?php
/**
 * Plugin Name:     No '(no title)'
 * Plugin URI:      https://magiiic.com/
 * Description:     Replace '(no title)' in admin lists by an excerpt of the excerpt for posts with empty titles
 * Author:          Magiiic
 * Author URI:      https://magiiic.com/
 * Text Domain:     no-no-title
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         No_No_Title
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
    $title = wp_trim_words( strip_shortcodes( strip_tags( $post->post_content ) ), 10 );
    return $title;
  } );
} );

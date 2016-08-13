<?php
/**
 * @package WordPress
 * @subpackage NOME DO SITE
 */

automatic_feed_links();

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	));

add_theme_support( 'post-thumbnails' );

function custom_excerpt_length( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>
<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package lift_off_social
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function lift_off_social_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'lift_off_social_jetpack_setup' );

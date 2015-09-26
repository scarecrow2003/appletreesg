<?php
/**
 * Created by PhpStorm.
 * User: hougang
 * Date: 9/24/15
 * Time: 10:29 PM
 */

add_theme_support( 'menus' );

function register_menus() {
	register_nav_menus(
		array( 'header-menu' => __( 'Header Menu' ), 'extra-menu' => __( 'Extra Menu' ))
	);
}
add_action( 'init', 'register_menus' );


function appletree_load_theme_textdomain() {
	load_theme_textdomain('appletreesg.com', get_template_directory() . '/languages/');
}
add_action('after_setup_theme', 'appletree_load_theme_textdomain');

function appletree_set_locale($lang) {
	if(isset($_GET['lang']))
	{
		$language = $_GET['lang'];
		if($language =='zh')
			return 'zh_CN';
		else
			return 'en_US';
	}
	else
	{
		return $lang;
	}
}
add_filter('locale', 'appletree_set_locale');

?>

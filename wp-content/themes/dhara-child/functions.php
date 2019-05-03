<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->
        get('Version')
    );
}
add_action('init','checkIp');
function checkIp(){
	$ips = ['198.0.0.1', '198.1.1.1'];
	$currentIp = $_SERVER['REMOTE_ADDR'];
	if (!in_array($currentIp, $ips)) {
		my_theme_enqueue_styles();
	} else{
		die('Coming soon');
	}
	
	
}
add_action('dhara_before_entry_title','iraso_atnaujinimas');
function iraso_atnaujinimas(){
	
	echo get_field('video'); 
	$img = get_field('image');
	echo '<img src="' .$img. '">';
	
}

	

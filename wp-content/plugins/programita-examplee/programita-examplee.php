<?php
/**
* Plugin Name: Programita Examplee
* Plugin URI: https://www.yourwebsiteurl.com/
* Descriotion: Example plugin for to stuff.
* Version: 1.0
* Author: Artur
* Author URI: http://yourwebsiteurl.com/

**/
add_filter('manage_post_posts_columns','set_custom_edit_posts_columns');

function set_custom_edit_posts_columns($columns){
	$columns['subtitle'] = 'Sub title';
	return $columns;
}

add_action( 'manage_posts_custom_column' , 'custom_post_column', 10, 2 );
function custom_post_column( $column, $post_id ) {
    switch ( $column ) {

        case 'subtitle' : //columns pavadinimas masyve
        	echo get_field('parodomasis _tekstas', $post_id); //pirmas FIeld name
        	break;

    }
}
add_filter( 'manage_product_posts_columns', 'custom_product_column',11);
function custom_product_column($columns)
{
   //add columns
   $columns['komentaras'] = 'Komentaras'; // title
   return $columns;
}
add_action( 'manage_product_posts_custom_column' , 'custom_product_list_column_content', 10, 2 );
function custom_product_list_column_content( $columnss, $product_id )
{
    
    switch ( $columnss )
    {
        case 'komentaras' :
            echo get_field('comment', $product_id); // display the data
            break;
    }
}
//* GENESIS -- Add email subscription popup section
add_action( 'genesis_after_footer', 'wd_email_popup' );
function wd_email_popup() {
	get_template_part( 'sections/email-popup' );
}

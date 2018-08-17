<?php

	// Enqueue parent theme stylesheet 
	function my_theme_enqueue_styles() {

		$parent_style = 'parent-style'; // This is 'twentyseveteen-style' for the Twenty Seventeen theme.

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
		);
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

	/*
 * A simple function to control the number of Twenty Seventeen Theme Front Page Sections
 * Source: wpcolt.com
 */
if ( ! function_exists( 'wpc_custom_front_sections' ) ) {
	function wpc_custom_front_sections( $num_sections )
	{
		return 6; //Change this number to change the number of the sections.
	}
	add_filter( 'twentyseventeen_front_page_sections', 'wpc_custom_front_sections' );
}



// automatically update plugins
add_filter( 'auto_update_plugin', '__return_true' );

add_filter( 'auto_update_theme', '__return_true' );

 ?>


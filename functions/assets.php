<?php

add_action('wp_enqueue_scripts', 'wpmixstartertheme_enqueue_script');
function wpmixstartertheme_enqueue_script(){

    // registers scripts and stylesheets
	wp_register_style('app', get_stylesheet_directory_uri().'/dist/app.css', [], '1.0' );
    wp_register_style('app-hotfix', get_stylesheet_uri(), [], '1.0' );
	wp_register_script('app', get_stylesheet_directory_uri().'/dist/app.js?v=20220131', [], '1.0', true );

	// enqueue global assets
	wp_enqueue_style('app');
    wp_enqueue_style('app-hotfix');
    wp_enqueue_script('jquery');
	wp_enqueue_script('app');

	wp_localize_script('app', 'themeajax', array( 
		'ajaxurl'    => admin_url('admin-ajax.php'),
		'data_var_1' => 'value 1',
		'data_var_2' => 'value 2',
	));

}
<?php

add_action('acf/init', 'wpmixstartertheme_acf_init');
function wpmixstartertheme_acf_init() {
    if( function_exists('acf_add_options_page') ) {
	
        $parent = acf_add_options_page(array(
            'page_title' => __('Theme options'),
            'menu_title' => __('Theme options'),
            'menu_slug'  => 'options',
            'position'   => '66',
            'icon_url'   => 'dashicons-admin-tools',
            'redirect'   => true
        ));
    
        $child1 = acf_add_options_page(array(
            'page_title'  => __('Social networks'),
            'menu_title'  => __('Social networks'),
            'menu_slug'   => 'options-social',
            'parent_slug' => $parent['menu_slug'],
        ));

        $child2 = acf_add_options_page(array(
            'page_title'  => __('Contact infos'),
            'menu_title'  => __('Contact infos'),
            'menu_slug'   => 'options-phone',
            'parent_slug' => $parent['menu_slug'],
        ));

    }
}
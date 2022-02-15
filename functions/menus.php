<?php

add_action('after_setup_theme', function () {

    register_nav_menus([
        'primary_navigation' => 'Main menu'
    ]);

});

// add_filter('nav_menu_css_class', 'wpmixstartertheme_page_template_nav_class', 10, 2);
// function wpmixstartertheme_page_template_nav_class($classes, $item){
//     if('page'==$item->object){
//         if( $slug=get_page_template_slug($item->object_id) ){
//             $classes[] = basename($slug, '.php');
//         }
//     }
//     return $classes;
// }



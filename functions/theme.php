<?php

add_action('after_setup_theme', function () {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('menus');

    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    //add_editor_style(asset_path('styles/main.css'));

    load_theme_textdomain('wpmixstartertheme', get_stylesheet_directory() . '/languages');

});
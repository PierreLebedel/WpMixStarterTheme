<?php

/*
Template Name: Redirect to first child
*/

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
        if(count($pagekids)>=1){
            $firstchild = $pagekids[0];
            wp_redirect(get_permalink($firstchild->ID));
        }else{
            wp_redirect(get_bloginfo('url'));
        }
    }
}
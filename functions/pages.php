<?php


function wpmixstartertheme_page_id_by_template($template){
    $query = new WP_Query(array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'lang' => '',
        'meta_query' => array(
            array(
                'key'     => '_wp_page_template',
                'value'   => $template.'.php',
                'compare' => '=',
            ),
        ),
    ));

    $return_post = false;

    while( $query->have_posts() ){
        $query->the_post();
        global $post;

        $return_post = $post;
    }

    wp_reset_query();
    wp_reset_postdata();

    return ($return_post) ? $return_post->ID : false;
}

function wpmixstartertheme_page_link_by_template($template){
    $post_id = wpmixstartertheme_page_id_by_template($template);
    return ($post_id) ? get_permalink($post_id) : false;
}

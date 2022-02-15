<?php

while(have_posts()):
    the_post();

    get_header(); ?>

    ici la home

    <?php get_footer();

endwhile;
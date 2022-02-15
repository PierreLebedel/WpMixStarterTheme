<?php

while(have_posts()):
    the_post();

    get_header(); ?>

    ici single (#<?php the_ID(); ?>)

    <?php get_footer();

endwhile;
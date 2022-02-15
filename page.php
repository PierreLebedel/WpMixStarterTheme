<?php

while(have_posts()):
    the_post();

    get_header(); ?>

    ici page (#<?php the_ID(); ?>)

    <?php get_footer();

endwhile;
<?php

while(have_posts()):
    the_post();

    get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <pre>front-page</pre>

    <?php the_content(); ?>

    <?php get_footer();

endwhile;
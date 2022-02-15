<?php

while(have_posts()):
    the_post();

    get_header(); ?>

    <h1><?php the_title(); ?></h1>

    <pre>page (#<?php the_ID(); ?>)</pre>

    <?php the_content(); ?>

    <?php get_footer();

endwhile;
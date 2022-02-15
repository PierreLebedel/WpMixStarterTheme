<?php get_template_part('template-parts/header', 'head'); ?>

<header class="site-header">
    
    <a class="header-logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

    <?php echo wp_nav_menu([
        'theme_location'  => 'primary_navigation',
        'container'       => 'nav',
        'container_class' => 'header-nav',
        'container_id'    => '',
        'menu_class'      => '',
        'fallback_cb'     => '',
        'menu_id'         => '',
    ]); ?>

</header>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo wp_get_document_title(); ?></title>
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

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
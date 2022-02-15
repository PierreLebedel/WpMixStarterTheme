<?php

add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 4 );
function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context ) {

    //debug($plugin_file);
    //debug($actions);

     if( in_array($plugin_file, array(
        'advanced-custom-fields-pro/acf.php',
        'classic-editor/classic-editor.php',
        'better-admin-bar/better-admin-bar.php',
    ))){
        if(isset($actions['deactivate'])) unset( $actions['deactivate'] );
        if(isset($actions['delete'])) unset( $actions['delete'] );
    }
    return $actions;
}

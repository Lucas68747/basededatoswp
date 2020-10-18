<?php

/**
* Plugin Name: Base de datos
* Plugin URI: https://bootstrat.site
* Description: Base de datos offline
* Version: 1.0.0
* Author: Pablo Lezca
* Author URI: https://bootstrat.site
* License: GPL2
*/

add_action('admin_menu', 'db_admin_menu');

function db_admin_menu(){
    
    add_menu_page ( 'BD Custom', 'BD Custom', 'manage_options', 'db_admin_menu_plugin', 'db_admin_menu_function', 'dashicons-database', 10 );
    add_submenu_page ( 'db_admin_menu_plugin', 'BD Options', 'Options', 'manage_options', 'bd_options_submenu1' ,'bd_options_function' );
    add_submenu_page ( 'db_admin_menu_plugin', 'BD Settings', 'Settings', 'manage_options', 'bd_options_submenu2', 'bd_settings_function');
    add_submenu_page ( 'db_admin_menu_plugin', 'BD Help', 'Help', 'manage_options', 'bd_options_submenu3', 'bd_help_function');

}

function db_admin_menu_function() {

    include('include/table/bd-table.php');
    ;

}

function bd_options_function() {

    include('include/options/bd-options.php');
    ;

}

function bd_settings_function() {

    include('include/settings/bd-settings.php');
    ;

}
function bd_help_function() {

    include('include/help/bd-help.php');
    ;
    
}

?>
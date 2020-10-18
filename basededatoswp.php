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
        echo ' 
        <iframe width="900" height="800" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSpIS_pCd6rXJgN_yTMjwF1g_-v_lW8hW6WkIg-zueVmG_m4mLumY01bg7pSmjvV3Xc0C9eYqsG2GrS/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe> 
        '
        ;
}

function bd_options_function() {
    echo ' 
    <p> Sección para setear el plugin. </p>
    '
    ;
}

function bd_settings_function() {
    echo ' 
    <p> Configuración del plugin.</p>    
    '
    ;
}
function bd_help_function() {
    echo ' 
    <p> Sección de ayuda.</p>    
    '
    ;
}

?>
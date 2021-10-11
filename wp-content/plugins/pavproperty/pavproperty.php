
<?php
/*
Plugin Name: pavproperty
Plugin URI: https://silberinvest.capital/
Description: My second plugin
Version: 1.0
Author: Pavel Silber
Author URI: https://silberinvest.capital/
License: GPLv2 or later
Text Domain: pavproperty
*/

// Если константа ABSPATH не определена, тогда закрываем соединение
if( !defined('ABSPATH') ) {
    die;
}


// define('PAVPROPERTY_PATH', );

if(!class_exists('pavPropertyCpt')) {
    require plugin_dir_path(__FILE__) . 'inc/cpt.php';
}


class pavProperty {

    static function activation() {
        flush_rewrite_rules();
    }
    static function deactivation() {
        flush_rewrite_rules();
    }
}

if(class_exists('pavProperty')) {
    $pavProperty = new pavProperty();  
}


register_activation_hook(__FILE__, array($pavProperty), 'activation' );
register_deactivation_hook(__FILE__, array($pavProperty, 'deactivation') );


?>
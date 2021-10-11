
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

class pavproperty {

    // здесь будем складывать все хуки
    public function register() {
        // когда происходит хук init, нужно подцепить 'custom_post_type'
        add_action('init', [$this, 'custom_post_type']); //$this ссылка класс в котором находимся
    }

    public function custom_post_type() {
        register_post_type('property',
        array(
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'properties'),
            'label' => 'Property',
            'support' => array('title', 'editor', 'thumbnail')
        ));
            register_post_type('agent',
            array(
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'agents'),
                'label' => 'Agents',
                'support' => array('title', 'editor', 'thumbnail'),
                'show_in_rest' => true
            ));
    }



    static function activation() {

        flush_rewrite_rules();
    }
    static function deactivation() {

        flush_rewrite_rules();
    }
}

if(class_exists('pavProperty')) {
    $pavProperty = new pavProperty();    
    $pavProperty->register(); 
}


register_activation_hook(__FILE__, array($pavProperty), 'activation' );
register_deactivation_hook(__FILE__, array($pavProperty, 'deactivation') );



 















/* Так в плагине может выглядеть функция, изменяющая заголовки Wordpress. В данном случае она заставляет выводить каждое слово заголовка с большой буквы. 
*/
 function my_own_function_for_title( $the_title ){

    $title = str_replace('Hello', 'Privet', $the_title);
    $title = ucwords($title);
      return $title;
}
add_filter( 'the_title', 'my_own_function_for_title' ); //Так выглядит регистрация в файле плагина новой функции my_own_function_for_title(); с дополнительным инструкциями для зацепки 'the_title'.


// function testplugin_filter_content($the_content) {
//     // return '<p>' . 'LLOL' . '</p>';
//     // return $the_content;
//     return str_replace('WordPress', 'USA', $the_content);
// }

// add_filter('the_content', 'testplugin_filter_content');







?>
<!-- Custom Property Type -->

<?php

if(!class_exists('pavPropertyCpt')) {

    class pavPropertyCpt {
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
     
             $labels = array(
                 'name'              => esc_html_x( 'Location', 'taxonomy general name', 'pavproperty' ),
                 'singular_name'     => esc_html_x( 'Location', 'taxonomy singular name', 'pavproperty' ),
                 'search_items'      => esc_html__( 'Search Location', 'pavproperty' ),
                 'all_items'         => esc_html__( 'All Location', 'pavproperty' ),
                 'parent_item'       => esc_html__( 'Parent Location', 'pavproperty' ),
                 'parent_item_colon' => esc_html__( 'Parent Location:', 'pavproperty' ),
                 'edit_item'         => esc_html__( 'Edit Location', 'pavproperty' ),
                 'update_item'       => esc_html__( 'Update Location', 'pavproperty' ),
                 'add_new_item'      => esc_html__( 'Add New Location', 'pavproperty' ),
                 'new_item_name'     => esc_html__( 'New Location Name', 'pavproperty' ),
                 'menu_name'         => esc_html__( 'Location', 'pavproperty' ),
             );
     
             // Args for Taxonomy Location
             $args = array(
                 'hierarchical' => true,
                 'show_ui' => true,
                 'show_admin_column' => true,
                 'query_var' => true,
                 'rewrite' => array('slug'=>'properties/location'),
                 'labels' => $labels,
             );
     
             register_taxonomy('location', 'property', $args);
     
             // unset to reuse $args
             unset($args);
             // unset to reuse $labels
             unset($labels);
     
             $labels = array(
                 'name'              => esc_html_x( 'Types', 'taxonomy general name', 'pavproperty' ),
                 'singular_name'     => esc_html_x( 'Types', 'taxonomy singular name', 'pavproperty' ),
                 'search_items'      => esc_html__( 'Search Types', 'pavproperty' ),
                 'all_items'         => esc_html__( 'All Types', 'pavproperty' ),
                 'parent_item'       => esc_html__( 'Parent Types', 'pavproperty' ),
                 'parent_item_colon' => esc_html__( 'Parent Types:', 'pavproperty' ),
                 'edit_item'         => esc_html__( 'Edit Types', 'pavproperty' ),
                 'update_item'       => esc_html__( 'Update Types', 'pavproperty' ),
                 'add_new_item'      => esc_html__( 'Add New Types', 'pavproperty' ),
                 'new_item_name'     => esc_html__( 'New Types Name', 'pavproperty' ),
                 'menu_name'         => esc_html__( 'Types', 'pavproperty' ),
             );
     
             // Args for Taxonomy Apt. Types
             $args = array(
                 'hierarchical' => true,
                 'show_ui' => true,
                 'show_admin_column' => true,
                 'query_var' => true,
                 'rewrite' => array('slug'=>'properties/type'),
                 'labels' => $labels,
             );
     
             register_taxonomy('property-type', 'property', $args);
             }   
     }    
}

if(class_exists('pavPropertyCpt')){
    $pavPropertyCpt = new pavPropertyCpt();
    $pavPropertyCpt->register();
}

?>
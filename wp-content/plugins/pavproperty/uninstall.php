<?php

// Удаляем все посты из плагина (при Uninstall Plugin)

$properties = get_posts(array('post_type'=>'property', 'numberposts'=>-1)); // Все посты
foreach($properties as $property) {
    wp_delete_post($property->ID,true);
}
<?php

add_action('init', 'init_custom_field_servicios');

function init_custom_field_servicios() {
    if (function_exists('acf_add_local_field_group')) {
        $key_campo = 'servicio';
        acf_add_local_field_group(array(
            'key' => 'acf_customfields_' . $key_campo, //Este identificador debe ser unico
            'title' => 'Información extra del Home',
            'fields' => array(
                /*
                 * Home
                 */
                array(
                    'key' => $key_campo . '_tab_1',
                    'type' => 'tab',
                    'label' => 'General',
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                 array(
                    'key' => $key_campo . '_field_1',
                    'label' => 'Color',
                    'name' => $key_campo . '_color_general',
                    'type' => 'color_picker',
                    'required' => 0,
                ),
                array(
                    'key' => $key_campo . '_field_0',
                    'label' => 'Icono',
                    'name' => $key_campo . '_icono_home',
                    'type' => 'image',
                    'required' => 0,
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                ),
               
                
                
                
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'servicio',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'hide_on_screen' => array(
                ),
            ),
            'menu_order' => 0,
        ));
    }
}

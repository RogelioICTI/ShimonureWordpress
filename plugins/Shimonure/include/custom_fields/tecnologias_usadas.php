<?php

add_action('init', 'init_custom_field_tecnologias_usadas');

function init_custom_field_tecnologias_usadas() {
    if (function_exists('acf_add_local_field_group')) {
        $key_campo = 'tecnologias_usadas';
        acf_add_local_field_group(array(
            'key' => 'acf_customfields_' . $key_campo, //Este identificador debe ser unico
            'title' => 'Información extra de las Tecnologías Usadas',
            'fields' => array(
                /*
                 * Home
                 */
                array(
                    'key' => $key_campo . '_field_1',
                    'label' => 'Icono',
                    'name' => $key_campo . '_icono',
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
                        'param' => 'taxonomy',
                        'operator' => '==',
                        'value' => 'tecnologia_usada',
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

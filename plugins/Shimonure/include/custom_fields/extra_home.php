<?php

add_action('init', 'init_custom_field_home');

function init_custom_field_home() {

    if (function_exists('acf_add_local_field_group')) {
        $key_campo = 'admin_home_page';
        acf_add_local_field_group(array(
            'key' => 'acf_customfields_' . $nombre_campo, //Este identificador debe ser unico
            'title' => 'Información extra del Home',
            'fields' => array(
                /*
                 * Banner Principal
                 */
                array(
                    'key' => $nombre_campo . '_tab_1',
                    'type' => 'tab',
                    'label' => 'Carrusel Principal',
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_0',
                    'label' => 'Banner Principal',
                    'name' => $key_campo . '_banner_principal',
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
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'admin-home',
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

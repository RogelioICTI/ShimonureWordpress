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
                array(
                    'key' => $nombre_campo . '_field_1',
                    'label' => 'Título',
                    'name' => $key_campo . '_banner_titulo',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_2',
                    'label' => 'Subtítulo',
                    'name' => $key_campo . '_banner_subtitulo',
                    'type' => 'text',
                    'required' => 0,
                ),
                /*
                 * AboutMe
                 */
                array(
                    'key' => $nombre_campo . '_tab_2',
                    'type' => 'tab',
                    'label' => 'About Me',
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_3',
                    'label' => 'Título',
                    'name' => $key_campo . '_aboutme_titulo',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_4',
                    'label' => 'Título',
                    'name' => $key_campo . '_aboutme_mensaje',
                    'type' => 'wysiwyg',
                    'required' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_5',
                    'label' => 'Imagen',
                    'name' => $key_campo . '_aboutme_imagen',
                    'type' => 'image',
                    'required' => 0,
                    'save_format' => 'object',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                ),
                array(
                    'key' => $nombre_campo . '_field_6',
                    'label' => 'URL Sobre mí',
                    'name' => $key_campo . '_aboutme_url_sobremi',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_7',
                    'label' => 'URL Currículum',
                    'name' => $key_campo . '_aboutme_url_curriculum',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => $nombre_campo . '_field_8',
                    'label' => 'Imagen de División',
                    'name' => $key_campo . '_aboutme_imagen_division',
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

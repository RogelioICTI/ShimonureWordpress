<?php

/*
 * HOME
 * Declaración para los menus del Home
 */
add_action('init', 'init_menus_home_acf');

function init_menus_home_acf() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Opciones para el Home',
            'menu_title' => 'Home',
            'menu_slug' => 'admin-home',
            'capability' => 'manage_options',
            'position' => 101,
            'parent_slug' => '',
            'icon_url' => 'dashicons-admin-home',
            'redirect' => false,
            'post_id' => 'options',
            'autoload' => false,
        ));
    }
/*
    if (function_exists('acf_add_options_sub_page')) {
        acf_add_options_sub_page(array(
            'page_title' => 'Información extra para Desarrollos',
            'menu_slug' => 'admin-informacion-home',
            'menu_title' => 'Página',
            'parent_slug' => 'admin-home',
        ));
    }
 * 
 */
}

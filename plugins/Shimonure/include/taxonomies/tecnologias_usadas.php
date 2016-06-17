<?php
/*
 * Registro de la Taxonomia para el Portafolio y la tecnología usada
 */
if ( !function_exists('tecnologias_usadas_taxonomy') ) {
    add_action( 'init', 'tecnologias_usadas_taxonomy', 0 );
    function tecnologias_usadas_taxonomy() {

            $labels = array(
                    'name'                       => _x( 'Tecnologías', 'Taxonomy General Name', 'shimonure-textdomain' ),
                    'singular_name'              => _x( 'Tecnología', 'Taxonomy Singular Name', 'shimonure-textdomain' ),
                    'menu_name'                  => __( 'Tecnologías', 'shimonure-textdomain' ),
                    'all_items'                  => __( 'Todas las tecnologías', 'shimonure-textdomain' ),
                    'parent_item'                => __( 'Superior', 'shimonure-textdomain' ),
                    'parent_item_colon'          => __( 'Superior:', 'shimonure-textdomain' ),
                    'new_item_name'              => __( 'Nueva Tecnología', 'shimonure-textdomain' ),
                    'add_new_item'               => __( 'Nueva Tecnología', 'shimonure-textdomain' ),
                    'edit_item'                  => __( 'Editar Tecnología', 'shimonure-textdomain' ),
                    'update_item'                => __( 'Actualizar Tecnología', 'shimonure-textdomain' ),
                    'view_item'                  => __( 'Ver Tecnología', 'shimonure-textdomain' ),
                    'separate_items_with_commas' => __( 'Separar con comas', 'shimonure-textdomain' ),
                    'add_or_remove_items'        => __( 'Agregar o Remover', 'shimonure-textdomain' ),
                    'choose_from_most_used'      => __( 'Tecnologías más utilizadas', 'shimonure-textdomain' ),
                    'popular_items'              => __( 'Tecnologías populares', 'shimonure-textdomain' ),
                    'search_items'               => __( 'Buscar', 'shimonure-textdomain' ),
                    'not_found'                  => __( 'No encontrada', 'shimonure-textdomain' ),
                    'items_list'                 => __( 'Lista de Tecnologías', 'shimonure-textdomain' ),
                    'items_list_navigation'      => __( 'Listar Tecnologías', 'shimonure-textdomain' ),
            );
            $rewrite = array(
                    'slug'                       => 'tecnologia_usada',
                    'with_front'                 => true,
                    'hierarchical'               => false,
            );
            $args = array(
                    'labels'                     => $labels,
                    'hierarchical'               => true,
                    'public'                     => true,
                    'show_ui'                    => true,
                    'show_admin_column'          => true,
                    'show_in_nav_menus'          => true,
                    'show_tagcloud'              => true,
                    'rewrite'                    => $rewrite,
            );
            register_taxonomy( 'tecnologia_usada', array( 'portafolio' ), $args );

    }
    
}

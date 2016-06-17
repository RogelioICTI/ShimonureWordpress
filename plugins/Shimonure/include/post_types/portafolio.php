<?php
add_action( 'init', 'register_portafolio_post_type' );
/**
 * Registro del Post Type para los Trabajos
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function register_portafolio_post_type() {
	$labels = array(
		'name'               => _x( 'Trabajos', 'post type general name', 'shimonure-textdomain' ),
		'singular_name'      => _x( 'Trabajo', 'post type singular name', 'shimonure-textdomain' ),
		'menu_name'          => _x( 'Trabajos', 'admin menu', 'shimonure-textdomain' ),
		'name_admin_bar'     => _x( 'Trabajo', 'add new on admin bar', 'shimonure-textdomain' ),
		'add_new'            => _x( 'Agregar Nuevo', 'book', 'shimonure-textdomain' ),
		'add_new_item'       => __( 'Agregar Nuevo Trabajo', 'shimonure-textdomain' ),
		'new_item'           => __( 'Nuevo Trabajo', 'shimonure-textdomain' ),
		'edit_item'          => __( 'Editar Trabajo', 'shimonure-textdomain' ),
		'view_item'          => __( 'Ver Trabajo', 'shimonure-textdomain' ),
		'all_items'          => __( 'Listar Trabajos', 'shimonure-textdomain' ),
		'search_items'       => __( 'Buscar Trabajos', 'shimonure-textdomain' ),
		'parent_item_colon'  => __( 'Padre:', 'shimonure-textdomain' ),
		'not_found'          => __( 'Trabajo no encontrado', 'shimonure-textdomain' ),
		'not_found_in_trash' => __( 'Trabajo no encontrado en la papelera.', 'shimonure-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Trabajo desarrollado', 'shimonure-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portafolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
                'menu_icon'          => 'dashicons-category',
		'menu_position'      => 111,
		'supports'           => array( 'title', 'editor', 'excerpt')
	);

	register_post_type( 'portafolio', $args );
}
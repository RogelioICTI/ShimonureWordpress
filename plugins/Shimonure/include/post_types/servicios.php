<?php
add_action( 'init', 'register_servicio_post_type' );
/**
 * Registro del Post Type para los Servicios
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function register_servicio_post_type() {
	$labels = array(
		'name'               => _x( 'Servicios', 'post type general name', 'shimonure-textdomain' ),
		'singular_name'      => _x( 'Servicio', 'post type singular name', 'shimonure-textdomain' ),
		'menu_name'          => _x( 'Servicios', 'admin menu', 'shimonure-textdomain' ),
		'name_admin_bar'     => _x( 'Servicio', 'add new on admin bar', 'shimonure-textdomain' ),
		'add_new'            => _x( 'Agregar Nuevo', 'book', 'shimonure-textdomain' ),
		'add_new_item'       => __( 'Agregar Nuevo Servicio', 'shimonure-textdomain' ),
		'new_item'           => __( 'Nuevo Servicio', 'shimonure-textdomain' ),
		'edit_item'          => __( 'Editar Servicio', 'shimonure-textdomain' ),
		'view_item'          => __( 'Ver Servicio', 'shimonure-textdomain' ),
		'all_items'          => __( 'Listar Servicios', 'shimonure-textdomain' ),
		'search_items'       => __( 'Buscar Servicios', 'shimonure-textdomain' ),
		'parent_item_colon'  => __( 'Padre:', 'shimonure-textdomain' ),
		'not_found'          => __( 'Servicio no encontrado', 'shimonure-textdomain' ),
		'not_found_in_trash' => __( 'Servicios no encontrado en la papelera.', 'shimonure-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Servicios ofrecidos', 'shimonure-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
                'menu_icon'          => 'dashicons-admin-generic',
		'menu_position'      => 110,
		'supports'           => array( 'title', 'editor', 'excerpt')
	);

	register_post_type( 'servicio', $args );
}
<?php

/*
 * Plugin Name: Shimonure Administración
 * Plugin URI: http://www.shimonure.com
 * Description: Plugin para BackEnd de mi sitio personal utilizando ACF PRO como apoyo
 * Version: 1.0
 * Author: Rogelio Vargas
 * Author URI: http://www.shimonure.com
 * License: GPLv2
 */

require_once('include/wp_bootstrap_navwalker.php');//Auto generación de los menus para Bootstrap
//Registro del menu para que el theme lo soporte
register_nav_menus(array(
    'primary' => __('Primary Menu', 'MENU_MUNDO'),
));


//MENUS
require_once('include/options_page.php'); //Menus de opciones extras

//Oculto el menu de las opciones para ACF
add_filter('acf/settings/show_admin', '__return_false');


//CUSTOM FIELDS
require_once('include/custom_fields/extra_home.php'); 
require_once('include/custom_fields/servicios.php'); 


//POST TYPE
require_once('include/post_types/servicios.php'); 

<?php

/*
 * Agrego los estilos y escripts del tema
 */
add_action('wp_enqueue_scripts', 'shimonure_enqueue_scripts');

function shimonure_enqueue_scripts() {
    //CSS 
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('bootstrap-custom', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style('owl-carrusel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('adapataciones-custom', get_template_directory_uri() . '/css/extras.css');
    wp_enqueue_style('googlefont-ptsans', 'https://fonts.googleapis.com/css?family=PT+Sans');
    wp_enqueue_style('googlefont-dosis', 'https://fonts.googleapis.com/css?family=Dosis');
    wp_enqueue_style('googlefont-walter', 'https://fonts.googleapis.com/css?family=Walter+Turncoat');
    wp_enqueue_style('googlefont-lakki', 'https://fonts.googleapis.com/css?family=Lakki+Reddy');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');


    //Screipts
    wp_deregister_script('jquery'); //Quito el jQuery base de Wordpress
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0', false);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '1.0', true);
    wp_enqueue_script('scroll-custom', get_template_directory_uri() . '/js/scroll_extra.js', array(), '1.0', true);
    wp_enqueue_script('equal-height', get_template_directory_uri() . '/js/equalHeight.js', array(), '1.0', true);
    wp_enqueue_script('wow-effects', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0', true);
    wp_enqueue_script('owl-carrusel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', true);
}

/*
 * Ajuste de estilo (se quita el top:0 ) para cuando tenemos sesión abierta de administración, evitando se encimen las barras de navegación
 */
add_filter('wp_head', 'mbe_wp_head');

function mbe_wp_head() {
    echo '<style>' . PHP_EOL;
    echo '.navbar-fixed-top { top: auto; }';
    echo '@media (max-width: 768px){.navbar-fixed-top { top: 0; }}';
    echo '</style>' . PHP_EOL;
}

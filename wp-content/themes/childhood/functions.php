<?php 
add_action('wp_enqueue_scripts', 'childhood_styles');

function childhood_styles() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri( ) );

    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
    wp_deregister_script('jquery'); // отключаем старую версию jQuery
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'); // подключаем новую версию jQuery
    wp_enqueue_script('jquery'); //включаем jQuery

};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


// Подключаем карты
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBUx_mfZF3n_oT4WMhc0MvmuojMPw0iXBc'; // Ваш ключ Google API
	
	return $api;
	
}

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}
?>
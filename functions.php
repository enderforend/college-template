<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'kollej_theme_styles' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
add_action( 'wp_footer', 'kollej_theme_styles_footer' );

function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}

function kollej_theme_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
}

function kollej_theme_styles_footer() {
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
}

add_theme_support( 'custom-logo' );

function special_nav_class($classes, $item){
	if( is_single() && $item->title == "children" ){
		$classes[] = "special-class";
	}
	return $classes;
}

?>
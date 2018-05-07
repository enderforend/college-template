<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'kollej_theme_styles' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
add_action( 'after_setup_theme', function() {
    add_theme_support( 'pageviews' );
});

function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}

function kollej_theme_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
}



add_theme_support( 'custom-logo' );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	  'after_widget' => '</li>',
	  'before_title' => '<span class="widgettitle">',
	  'after_title' => '</span>',
	));
  }

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 ); // размер миниатюры поста по умолчанию
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'persons_image_size', 150, 210, true ); // Кадрирование изображения
}


// Personal post type

require get_template_directory() . '/custom-types.php';
require get_template_directory() . '/views-counter.php';


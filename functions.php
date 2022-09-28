<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
register_nav_menus(array(
    'nav' => 'Menu principal (header)'
));
add_action('wp_enqueue_scripts', 'register_assets');
function register_assets(){
    
    wp_enqueue_style(
          'header-css',
          get_stylesheet_directory_uri().'/assets/css/header.css',
          array(),
          '1.0'
    );

}
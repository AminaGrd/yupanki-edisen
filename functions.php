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
		get_stylesheet_directory_uri().'/assets/css/childstorefront/header.css',
		array(),
		'1.0'
    );
	wp_enqueue_style(
		'main-css',
		get_stylesheet_directory_uri().'/assets/css/childstorefront/main.css',
		array(),
		'1.0'
    );
	wp_enqueue_style(
		'footer-css',
		get_stylesheet_directory_uri().'/assets/css/childstorefront/footer.css',
		array(),
		'1.0'
    );
	wp_enqueue_style(
		'content-homepage-css',
		get_stylesheet_directory_uri().'/assets/css/childstorefront/content-homepage.css',
		array(),
		'1.0'
    );
	wp_enqueue_style(
		'content-css',
		get_stylesheet_directory_uri().'/assets/css/childstorefront/content.css',
		array(),
		'1.0'
    );
	// wp_enqueue_script(
	// 	'header-js',
	// 	get_stylesheet_directory_uri().'/assets/js/header.js',
	// 	array(),
	// 	'1.0'
    // );

}
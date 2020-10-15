<?php
// Theme Support
function recipe_theme_setup(){
	// Logo Support
	add_theme_support('custom-logo');

	// Featured Image
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary'	=> __('Primary Menu')
	));

}

add_action('after_setup_theme', 'recipe_theme_setup');

function init_widgets($id){

	register_sidebar(array(
		'name'		=> 'Front Page List',
		'id'		=> 'front-page-list',
		'before_widget'	=> '<div class="front-page-list">',
		'after_widget'	=> '</div>'
	));

	register_sidebar(array(
		'name'		=> 'Categories on Index',
		'id'		=> 'cat-index',
		'before_widget'	=> '<div class="cat-index">',
		'after_widget'	=> '</div>'
	));

}

add_action('widgets_init', 'init_widgets');


// Customizer File
require get_template_directory() . '/inc/customizer.php';
?>
<?php
add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method() {
	//jQuery
	wp_enqueue_script('jquery');
	
	
	wp_deregister_script('modernizr');
		wp_register_script('modernizr', get_template_directory_uri() .'/js/modernizr.js', false, '', true);
	wp_enqueue_script('modernizr');

	wp_register_script('myjs',
		get_template_directory_uri() . '/js/script.js',false, '1.0', true );
	wp_enqueue_script('myjs');
}

register_nav_menus( array(
	'menu'   => 'menu'
) );

?>
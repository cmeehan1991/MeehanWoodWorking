<?php 
	
add_action('wp_enqueue_scripts', 'mww_jquery');
function mww_jquery(){
	wp_dequeue_script( 'jquery' );
	wp_register_script('jquery', MWW_URI . '/assets/js/global/jquery/jquery-3.3.1.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'mww_js');
function mww_js(){
	
}

add_action('wp_enqueue_scripts', 'mww_styles');
function mww_styles(){
	// Bootstrap
	wp_enqueue_style('Bootstrap', MWW_URI . '/assets/bootstrap/css/bootstrap.min.css', array(), '4.1.3');
	wp_enqueue_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
	wp_enqueue_script('Bootstrap-min', MWW_URI . '/assets/bootstrap/js/bootstrap.min.js', array('jquery', 'Popper'), '4.1.3', true);
}
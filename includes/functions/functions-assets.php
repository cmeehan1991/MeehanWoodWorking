<?php 
	
add_action('wp_enqueue_scripts', 'mww_jquery');
function mww_jquery(){
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
	wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'mww_js');
function mww_js(){
	wp_enqueue_script( 'Woocommerce', MWW_URI . '/assets/js/global/woocommerce.js', array('jquery'), MWW_VERSION, true );
	wp_enqueue_script( 'Shadowbox JS', MWW_URI . '/assets/shadowbox/src/shadowbox.js', array('jquery'), false);
	wp_enqueue_script( 'Shadowbox', MWW_URI . '/assets/js/global/shadowbox.js', array('jquery', 'Shadowbox JS'), MWW_VERSION, true);
	wp_enqueue_script( 'Scroll', MWW_URI . '/assets/js/global/scroll.js', array('jquery'), MWW_VERSION, false);
}

add_action('wp_enqueue_scripts', 'mww_styles');
function mww_styles(){
	// Bootstrap
	wp_enqueue_style('Bootstrap', MWW_URI . '/assets/bootstrap/css/bootstrap.min.css', array(), '4.1.3');
	wp_enqueue_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
	wp_enqueue_script('Bootstrap-min', MWW_URI . '/assets/bootstrap/js/bootstrap.min.js', array('jquery', 'Popper'), '4.1.3', true);
	
	// FontAwesome
	wp_enqueue_style('FontAwesome', MWW_URI . '/assets/fontawesome/css/all.min.css', array(), '5.4.1');
	
	// Theme styles
	wp_enqueue_style('Global Styles', MWW_URI . '/assets/styles/css/global.css', array(), MWW_VERSION);
	wp_enqueue_style('Header', MWW_URI . '/assets/styles/css/header.css', array(), MWW_VERSION);
	wp_enqueue_style('Homepage Template', MWW_URI . '/assets/styles/css/homepage.css', array(), MWW_VERSION);
	wp_enqueue_style('Woocommerce', MWW_URI . '/assets/styles/css/woocommerce.css', array(), MWW_VERSION);
	
	// Shadowbox
	wp_enqueue_style( 'Shadowbox CSS', MWW_URI . '/assets/shadowbox/src/shadowbox.css', array() );
}
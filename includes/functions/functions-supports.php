<?php	
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
 
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support(){
	add_theme_support( 'woocommerce' );	
	add_theme_support( 'wc-product-gallery-lightbox' );
}

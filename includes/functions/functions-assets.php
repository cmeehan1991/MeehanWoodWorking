<?php 
	
add_action('wp_enqueue_scripts', 'mww_js');
function mww_js(){
	if(get_field('use_minified_scripts_styles', 'options')){
		wp_enqueue_script( 'allscripts-min', MWW_URI . '/assets/js/global/dist/min.allscripts.js', array(), MWW_VERSION, false );
	}else{
		wp_enqueue_script( 'allscripts', MWW_URI . '/assets/js/global/dist/app.js', array(), MWW_VERSION, false );		
	}	
}

add_action('wp_enqueue_scripts', 'mww_styles');
function mww_styles(){
	
	if(get_field('use_minified_scripts_styles', 'options')){
		wp_enqueue_style( 'allstyes-min', MWW_URI . '/assets/styles/css/dist/min.allstyles.css', array(), MWW_VERSION, '' );
	}else{
		wp_enqueue_style( 'allstyles', MWW_URI . '/assets/styles/css/dist/app.css', array(), MWW_VERSION, '' );
	}	
	
}
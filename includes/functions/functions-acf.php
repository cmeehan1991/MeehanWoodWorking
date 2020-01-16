<?php 

if(function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title'	=> "General Theme Settings",
		'menu_title'	=> 'Theme Settings', 
		'menu_slug'		=> 'general-theme-settings', 
		'capability'	=> 'edit_posts', 
		'redirect'		=> false
	));
}
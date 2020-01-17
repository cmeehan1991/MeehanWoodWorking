<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c3dff8a819fc',
	'title' => 'Gallery',
	'fields' => array(
		array(
			'key' => 'field_5c3dffcfbc864',
			'label' => 'Gallery',
			'name' => 'gallery',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-gallery.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
		3 => 'revisions',
		4 => 'slug',
		5 => 'author',
		6 => 'format',
		7 => 'tags',
		8 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;
<?php 
DEFINE('MWW_TEXTDOMAIN', 'meehanwoodworking');
DEFINE('MWW_URI', get_template_directory_uri());
DEFINE('MWW_PATH', get_template_directory());
DEFINE('MWW_VERSION', '0.0.1');


// Image sizing
add_image_size( 'sml_size', 300 ); 
add_image_size( 'mid_size', 600 ); 
add_image_size( 'lrg_size', 1200 ); 
add_image_size( 'sup_size', 2400 );

// Required functions
include(MWW_PATH . '/includes/functions/functions-assets.php');
include(MWW_PATH . '/includes/functions/functions-supports.php');
include(MWW_PATH . '/includes/functions/functions-menus.php');
include(MWW_PATH . '/includes/functions/functions-sidebars.php');
include(MWW_PATH . '/includes/functions/functions-cpt.php');
include(MWW_PATH . '/includes/functions/functions-woocommerce.php'); // WC customizations

// Required Classes
include(MWW_PATH . '/includes/classes/MWW_Nav_Walker.php');

// Include ACF fields
foreach(glob(MWW_PATH . '/includes/acf/groups/*_active.php') as $file){
	include $file;
}

// Widgets

include(MWW_PATH . '/includes/widgets/SocialMediaWidget.php');


<?php 
DEFINE('MWW_TEXTDOMAIN', 'meehanwoodworking');
DEFINE('MWW_URI', get_template_directory_uri());
DEFINE('MWW_PATH', get_template_directory());
DEFINE('MWW_VERSION', '0.0.1');

function mww_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mww_add_woocommerce_support' );

// Required functions
include(MWW_PATH . '/includes/functions/functions-assets.php');
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
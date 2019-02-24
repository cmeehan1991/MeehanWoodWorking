<?php 
// Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'left_footer_sidebar',
		'class'         => 'footer--left-sidebar',
		'name'          => __( 'Left Footer Sidebar', MWW_TEXTDOMAIN ),
		'description'   => __( 'Displays on the left footer', MWW_TEXTDOMAIN ),
		'before_title'  => '<h3 class="footer--sidebar-title">',
		'after_title'   => '</h3>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'middle_footer_sidebar',
		'class'         => 'footer--middle-sidebar',
		'name'          => __( 'Middle Footer Sidebar', MWW_TEXTDOMAIN ),
		'description'   => __( 'Displays in the middle of the footer', MWW_TEXTDOMAIN ),
		'before_title'  => '<h3 class="footer--sidebar-title">',
		'after_title'   => '</h3>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'right_footer_sidebar',
		'class'         => 'footer--right-sidebar',
		'name'          => __( 'Right Footer Sidebar', MWW_TEXTDOMAIN ),
		'description'   => __( 'Displays on the Right Side of the footer.', MWW_TEXTDOMAIN ),
		'before_title'  => '<h3 class="footer--sidebar-title">',
		'after_title'   => '</h3>',
	);
	register_sidebar( $args );
	
	

	$args = array(
		'id'            => 'shop-sidebar--left',
		'class'         => 'shop-sidebar--left',
		'name'          => __( 'Shop Sidebar (Left)', MWW_TEXTDOMAIN ),
		'description'   => __( 'Displays on the left side of the shop page.', MWW_TEXTDOMAIN ),
		'before_title'  => '<h3 class="shop-sidebar--left__title">',
		'after_title'   => '</h3>',
	);
	register_sidebar( $args );


}
add_action( 'widgets_init', 'custom_sidebars' );
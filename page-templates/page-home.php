<?php
/* Template Name: Homepage Template */
get_header(); 
?>

<?php

if(get_field('enable_hero_section')){
	get_template_part('partials/home', 'hero');	
}

if(get_field('enable_features_section')){
	get_template_part('partials/home', 'features');
}

if(get_field('enable_shop_section')){
	get_template_part('partials/home', 'shop'); 
}

if(get_field('enable_blog_section')){
	get_template_part( 'partials/home', 'blog' );
}

if(get_field('enable_gallery_section')){
	get_template_part('partials/home', 'gallery'); 
}

?>
<?php get_footer();
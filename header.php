<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
		get_template_part('partials/head', 'meta'); 
		get_template_part('partials/head', 'tags');
		?>
		
		<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('title'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<a class="navbar-brand" href="<?php bloginfo('url');?>">
				<img class="site-logo" src="<?php echo MWW_URI; ?>/assets/img/primary-logo.png" alt="Meehan Wood Working">
			</a> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php 
			$nav_args = array(
				'theme_location'	=> 'primary',
				'menu_class'		=> 'navbar-nav ml-auto',
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse', 
				'container_id'		=> 'navbarSupportedContent',
				'walker'			=> new MWW_Nav_Walker()
			);
			wp_nav_menu($nav_args);
			?>
		</nav>
		<div class="container-fluid">
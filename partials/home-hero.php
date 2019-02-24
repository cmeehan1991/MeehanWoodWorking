<?php 
$hero_type = get_field('media_type'); 
$alignment = get_field('content_alignment'); 
?>
<div class="hero hero--<?php echo $hero_type; ?> <?php echo $alignment; ?>">
	<?php if($hero_type == 'video'): ?>
	<video>
		<source src="<?php the_field('hero_video')['src'];?>">
	</video>
	<?php elseif($hero_type == 'image'): ?>
	<img src="<?php echo  get_field('hero_image')['url']; ?>" alt="<?php echo get_field('hero_image')['alt']; ?>" class="hero-image">
	<?php endif; ?>
	<div class="hero-content hero-content__align-bottom">
		<?php if(get_field('hero_title')): ?>
		<h1 class="hero-title'"><?php the_field('hero_title'); ?></h1>
		<?php endif; ?>
		
		<?php if(get_field('hero_subtitle')): ?>
		<p class="hero-subtitle"><?php the_field('hero_subtitle'); ?></p>
		<?php endif; ?>	
		
		<?php if(get_field('jump_link')): ?>
		<a class="jumplink" href="<?php the_field('jump_link'); ?>"><i class="fas fa-chevron-down"></i></a>
		<?php endif; ?>
	</div>
</div>
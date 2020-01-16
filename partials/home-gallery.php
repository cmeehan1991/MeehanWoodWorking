<?php if(get_field('home_gallery')): ?>
	<?php if(get_field('gallery_heading')): ?>
	
	<h2 class="section-heading"><?php echo get_field('gallery_heading'); ?></h2>
	
	<?php endif; ?>

	<div class="d-flex flex-row flex-wrap justify-content-center home-gallery" id="gallery">
		
	
		<?php foreach(get_field('home_gallery') as $image): ?>
	
		<div class="col-md-2 mx-2">
	
			<img class="rounded img-thumbnail home-gallery--image" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
	
		</div>
	
		<?php endforeach; ?>
	
	</div>

<?php if(get_field('gallery_cta_text') && get_field('gallery_cta_link')): ?>
<div class="d-flex justify-content-center">
	<a href="<?php echo get_field('gallery_cta_link'); ?>" class="btn btn-secondary cta-action cta-action--align-center mx-auto"><?php the_field('gallery_cta_text'); ?></a>
</div>

<?php endif; ?>

<?php endif; ?>
<?php 
/* Template Name: Gallery */
get_header(); 
?>
<div class='jumbotron'>
	<h2 class="display-5"><?php the_title(); ?></h2>
</div> 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<?php if(have_posts()): while(have_posts()): the_post();?>
			
			<?php the_content(); ?>
			
			<?php $gallery_items = get_field('gallery'); ?>

			<?php if($gallery_items): ?>
			
				<ul class="gallery">
				<?php foreach($gallery_items as $item): ?>
					<li class="gallery-item">
						
						<a href="<?php echo $item['url'] ?>" rel="shadowbox['<?php the_title(); ?>']" title="<?php echo $item['title']; ?>">
							<img src="<?php echo $item['url']?>" alt="<?php echo $item['alt']; ?>" class="gallery-item--image" rel="shadowbox">
						</a>
					
						</li>

					<?php endforeach; ?>

				</ul>

			<?php endif; ?>

			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); 
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<h2><?php the_archive_title(); ?></h2>
		</div>
	</div>
</div>
<?php 	
if(have_posts()):

$i = 1; while(have_posts()): the_post(); if($i == 1): ?>

<div class="jumbotron p-3 p-md-5 text-white bg-dark">
	<div class="col-md-6 px-0">
		<h2 class="display-4 font-italic"><?php the_title(); ?></h2>
		<p class="lead"><?php the_excerpt(); ?></p>
		<p class="lead mb-0">
			<a href="<?php the_permalink(); ?>" class="text-white font-weight-bold">Continue Reading...</a>
		</p>
	</div>	
</div>
<?php else:  if($i % 2 == 0): ?> <div class="container-fluid"> <div class="row mb-2"> <?php endif; ?>
	<div class="col-md-6">
		<div class="card flex-md-row mb-4 shadow-sm h-md-250">
			<div class="card-body d-flex flex-column align-items-start">
				<h3 class="mb-0">
					<a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<div class="mb-1 text-muted"><?php echo get_the_date('M d');?></div>
					<p class="card-text mb-auto"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>">Continue reading</a>
				</div>
				<?php if(has_post_thumbnail()): ?>
				<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php the_post_thumbnail_url( 'thumbnail'); ?>" data-holder-rendered="true">
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php if($i % 2 != 0):?> </div><?php endif; ?>
<?php endif; $i++; endwhile;  ?>


<?php wp_reset_postdata(); endif; ?>

<?php get_footer();
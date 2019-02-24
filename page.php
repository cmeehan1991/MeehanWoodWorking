<?php get_header(); ?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class='jumbotron' style="background-image: url(<?php echo get_the_post_thumbnail_url( ); ?>); background-repeat: no-repeat; background-size: cover;">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<h2 class="display-5"><?php the_title(); ?></h2>
			<?php if(is_single()): ?>
			<p class="lead"><?php echo get_the_date( 'M d, Y' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div> 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php 
if(get_field('blog_section_articles')):

$blog_items = get_field('blog_section_articles');

$i = 1; foreach($blog_items as $item): if($i == 1): ?>

<div class="jumbotron p-3 p-md-5 text-white bg-dark" id="blog">
	<div class="col-md-6 px-0">
		<h2 class="display-4 font-italic"><?php echo $item->post_title; ?></h2>
		<p class="lead"><?php echo get_the_excerpt( $item->ID ); ?></p>
		<p class="lead mb-0">
			<a href="<?php echo get_permalink( $item->ID ); ?>" class="text-white font-weight-bold">Continue Reading...</a>
		</p>
	</div>	
</div>
<?php else:  if($i % 2 == 0): ?> <div class="row mb-2"> <?php endif; ?>
<div class="col-md-6">
	<div class="card flex-md-row mb-4 shadow-sm h-md-250">
		<div class="card-body d-flex flex-column align-items-start">
			<h3 class="mb-0">
				<a class="text-dark" href="<?php echo get_the_permalink($item->ID); ?>"><?php echo get_the_title($item->ID); ?></a>

			</h3>
			<div class="mb-1 text-muted"><?php echo get_the_date('M d', $item->ID);?></div>
				<p class="card-text mb-auto"><?php echo get_the_permalink($item->ID); ?></p>
				<a href="<?php echo get_the_permalink($item->ID); ?>">Continue reading</a>
			</div>
			<?php if(has_post_thumbnail()): ?>
			<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php the_post_thumbnail_url( 'thumbnail' , $item->ID); ?>" data-holder-rendered="true">
			<?php endif; ?>
		</div>
	</div>
</div>

<?php if($i % 2 != 0):?> </div> <?php endif; ?>
<?php  endif; $i++; endforeach;  ?>


<?php endif; ?>
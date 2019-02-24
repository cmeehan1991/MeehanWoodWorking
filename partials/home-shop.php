<?php $items = get_field('products'); ?>

<?php if($items && get_field('enable_shop_section')): ?>
<h2 class="section-heading"><?php the_field('shop_section_heading'); ?></h2>
<div class="d-flex flex-row justify-content-center flex-wrap home-shop" id="shop">
	<?php foreach($items as $item): ?>
	<div class="mx-2 home-shop--product">
		<a href="<?php echo get_the_permalink($item); ?>">
			<img src="<?php echo get_the_post_thumbnail_url( $item, 'post-thumbnail' ); ?>" alt="<?php echo get_the_title($item); ?>" class='home-shop--product-image'>
			<p class="home-shop--product-title"><?php echo get_the_title($item); ?></p>
		</a>
	</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
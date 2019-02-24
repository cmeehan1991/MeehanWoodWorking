<?php get_header(); ?>
<div class="container-fluid">
	<div id="main" class="row">
		<div id="content" class="col-lg-12 col-sm-6 col-md-6 col-sx-12 mx-auto">
			<div class="row">
				<?php if(is_shop() || is_product_category() || is_product()){ ?>
				<div class="col-lg-2 mx-auto">
					<?php dynamic_sidebar( 'shop-sidebar--left ' ); ?>
				</div>
				<?php }; ?>
				<div class="col order-first order-md-last mx-auto">
					<?php woocommerce_content(); ?>	
				</div>
			</div>	
		</div>	
	</div>
</div>

<?php get_footer();
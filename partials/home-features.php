<?php 
$features = get_field('homepage_features');

?>
<div class="d-flex flex-row justify-content-center home-features" id="features">
<?php if($features): ?>
<div class="row">
	<?php foreach($features as $feature):?>
	<div class="col">
		<div class="card mx-2 home-card">
			<img class="card-img-top" src="<?php echo $feature['feature_image']['url']; ?>" alt="<?php echo $feature['feature_image']['alt']; ?>">
			<div class="card-body">
				<h5 class="card-title"><?php echo $feature['feature_title']; ?></h5>
				<p class="card-text"><?php echo $feature['feature_description']; ?></p>
				<?php if($feature['feature_cta_text'] && $feature['feature_cta_link']): ?>
				<a href="<?php echo $feature['feature_cta_link']; ?>" class="btn btn-secondary"><?php echo $feature['feature_cta_text']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
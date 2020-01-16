<div class="footer bg-dark text-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<ul class="footer-sidebar">
					<?php dynamic_sidebar( 'left_footer_sidebar' ); ?>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="footer-sidebar">
					<?php dynamic_sidebar( 'middle_footer_sidebar' ); ?>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="footer-sidebar">
					<?php dynamic_sidebar( 'right_footer_sidebar' ); ?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="mx-auto">
				<div class="footer-bottom">
					<p class="footer-copyright"><?php bloginfo('title'); ?>&copy; <?php echo date('Y');?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
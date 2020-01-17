<?php
/* Template Name: Homepage Template */
get_header(); 
?>

<div class="container-fluid">
	<div class="row">
		<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();
				the_content();
			}
		}
		?>
	</div>
</div>



<?php get_footer();
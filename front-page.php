<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main>
	<!-- main-column -->
	<div class="main-column">
		<?php if(have_posts()):
	while (have_posts()) : the_post(); 
		
		
	the_content();
	endwhile;
	else: 
		echo '<p>No content found</p>';
		
	endif; ?> 
	</div>
	<!-- /main-column -->

</main>
<?php
get_footer();
?>
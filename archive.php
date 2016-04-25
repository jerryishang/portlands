<?php
	get_header();
	if (have_posts()):
?>

<main>
	<!-- left-sidebar -->
	
		<!--div class="left-sidebar">
		<p>This is left sidebar</p>
		<!?php if(is_active_sidebar('sidebar1')) : ?>
			<!?php dynamic_sidebar('sidebar1'); ?>
		<!?php endif; ?>
		</div>
	
	<!-- /left-sidebar --> 

	<!-- main-column -->
	
	<div class="main-column">
			<h2><?php

		if(is_category()){
			single_cat_title();
		} elseif ( is_tag()) {
			single_tag_title();
		} elseif ( is_author() ) {
			the_post();
			echo 'Author Archives: ' . get_the_author();
			rewind_posts();
		} elseif ( is_day() ) {
			echo 'Daily Archives: ' . get_the_date();
		} elseif ( is_month() ) {
			echo 'Monthly Archives: ' . get_the_date('F Y');
		} elseif ( is_year() ) {
			echo 'Yearly Archives: ' . get_the_date('Y');
		} else {
			echo 'Archives:';
		}
	
	?></h2>
		<?php if(have_posts()):
		while (have_posts()) : the_post(); 
			get_template_part('content', get_post_format());
		endwhile;
		else: 
			echo '<p>No content found</p>';
		
		endif; ?>
	</div>
	<!-- /main-column -->

	<!-- right-sidebar -->
	<!--div class="right-sidebar">
		<p>This right sidebar</p>
		
	</div>
	<!-- /right-sidebar -->
</main>
<?php 
endif;
get_footer();
?>
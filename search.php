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
		<div class="results">results for <?php the_search_query();?></div>
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

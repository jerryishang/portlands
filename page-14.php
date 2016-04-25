<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- main-column -->
	<div class="main-column">
		<?php 
		$jobPosts = new WP_QUERY('cat=24');
		if($jobPosts->have_posts()):
			echo get_the_content();?>
			<ul>
				<?php
				while ($jobPosts->have_posts()) : $jobPosts->the_post(); ?>
					<li><a href="<?php echo get_the_content() ?>"><?php the_title(); ?></a></li>
				<?php
				endwhile;?>
			</ul>
			<?php
			else: 
				echo '<p>No content found</p>';
				
			endif; 
			wp_reset_postdata();?>
	</div>
	<!-- /main-column -->

	<!-- right-sidebar -->
	<!--div class="right-sidebar">
		<p>This right sidebar</p>
		
	</div>
	<!-- /right-sidebar -->
</main>
<?php
get_footer();
?>
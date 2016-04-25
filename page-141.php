<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- main-column -->
	<div class="main-column">
		<?php 
		$directorPosts = new WP_QUERY('cat=19');
		if($directorPosts->have_posts()):
			while ($directorPosts->have_posts()) : $directorPosts->the_post(); ?>
			<article class="post <?php if (has_post_thumbnail()){?>has-thumbnail<?php } ?>">
				<!-- post-thumbnail -->
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
				</div><!-- /post_thumbnail -->
			
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-info">
					<?php ?>
						
							<?php //the_excerpt();?>
					
				</p>
				<?php the_content(); ?>
			</article>
			<?php
			endwhile;
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
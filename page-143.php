<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- main-column -->
	<div class="main-column">
		<h2 class="title"><?php the_title();?></h2>
		<?php 
		the_content();
		// have ordered by date
		$eventPosts = new WP_QUERY('cat=21');
		if($eventPosts->have_posts()):
			while ($eventPosts->have_posts()) : $eventPosts->the_post(); ?>
			<article class="post">
			
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-info">
					<?php ?>
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
</main>
<?php
get_footer();
?>
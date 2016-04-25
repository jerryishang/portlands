<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- left-sidebar -->
	<div class="left-sidebar">
		<?php 
		// have ordered by date
		$newsPosts = new WP_QUERY('cat=20&posts_per_page=1');
		if($newsPosts->have_posts()):
			while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
			<article class="post">
			
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
	<!-- /left-sidebar -->
	<?php
	$newsLinks = new WP_QUERY('cat=20');?>
	<div class="right-sidebar">
		<ul>
		<?php
		if($newsLinks->have_posts()):
			while ($newsLinks->have_posts()): $newsLinks->the_post();?>
			<li>
				<a href="<?php the_permalink();?>">
					<?php the_title();?>
				</a>
			</li>
			<?php
			endwhile;
			
		endif; ?>
		</ul>
	</div>
	<!-- /right-sidebar -->
</main>
<?php
get_footer();
?>
<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- main-column -->
	<div class="main-column">
		<h2 class="title"><?php the_title();?></h2>
		<?php 
		// have ordered by date
		$cecPosts = new WP_QUERY('cat=23');
		if($cecPosts->have_posts()):?>
			<ul>
				<?php
				while ($cecPosts->have_posts()) : $cecPosts->the_post(); ?>
					<li>
						<a href="<?php echo get_the_content(); ?>"><?php the_title(); ?></a>
					</li>
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
</main>
<?php
get_footer();
?>
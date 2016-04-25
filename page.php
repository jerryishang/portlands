<?php 
get_header(); ?>
<main>
	<div class="main-column">
		<?php if(have_posts()):
		while (have_posts()) : the_post();
			if( has_child() OR $post->post_parent > 0 ) { ?> 
				<nav class="child-link">
					<span class="parent-link">
						<a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
							<?php echo get_the_title(get_top_ancestor_id()); ?>
						</a>
					</span>
					<!--list items must live in unordered list-->
					<ul>
						<?php
						$args = array(
							// gather children based on certain id
							//'child_of'=>$post->ID,
							'child_of'=>get_top_ancestor_id(),
							// replace title list with nothing
							'title_li' => ''
						);
						wp_list_pages($args);
					?>
					</ul>
				</nav>
				<?php
			}
			?>
		<h2 class="title"><?php the_title();?></h2>
		<?php the_content();
		endwhile;
		else: 
			echo '<p>No content found</p>';
		endif; ?>
	</div>
</main>
<?php
get_footer();
?>
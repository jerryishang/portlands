<article class="post <?php if (has_post_thumbnail()){?>has-thumbnail<?php }?>">
	<!-- post-thumbnail -->
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
	</div><!-- /post_thumbnail -->
	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<p class="post-info">
		<?php the_time('F jS, Y g:i a'); ?> | by 
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
			<?php the_author();?> 
		</a>
	</p>
	
	<?php the_content(); ?>
				
</article>
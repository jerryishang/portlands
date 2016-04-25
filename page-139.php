<?php 
get_header(); ?>
<!--change main later to div since main is not supported by explorer-->
<main> 

	<!-- main-column -->
	<div class="main-column">
		<nav class="library-link">
			<ul>
			<?php
			$args = array(
				'child_of' =>$post->ID,
				'title_li'=> ''
			);
			wp_list_pages($args);
			?>
			</ul>
		</nav>
	</div>
	<!-- /main-column -->
</main>
<?php
get_footer();
?>
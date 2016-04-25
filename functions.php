<?php


function portlands_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','portlands_resources');

function has_child() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	//if post has a parent
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		// first value
		return $ancestors[0];
	}
	
	//otherwise, simply return parent's id
	return $post->ID;
}

function PortlandsWordPressSetUp() {
	// navigation menus
	register_nav_menus(array(
		'primary'=> __('Primary Menu'),
		'footer' => __('Footer Menu'),
	));
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','PortlandsWordPressSetUp');

function myWidgetsInit() {
	
	/*register_sidebar(array(
		'name' => 'Sidebar 1',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widgets_item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));*/
	
	/*register_sidebar(array(
		'name' => 'Right Sidebar',
		'id' => 'rightSidebar',
		'before_widget' => '<div class="widgets_item">',
		'after_widget' => '</div>'
	));*/
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id'=>'footer1'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id'=>'footer2'
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id'=>'footer3'
	));
}
add_action('widgets_init','myWidgetsInit');
?>
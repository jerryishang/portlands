<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
	<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://jquery.malsup.com/corner/"></script>
<![endif]-->
	<body <?php body_class(); ?>>
		<!-- container -->
		<div class="wrapper">
			<header class="site-header">
				<a href="<?php echo home_url();?>"><div class="header-image"></div></a>
				<div class="header-Bar">
					<nav class="site-nav">
						<?php
							$args = array(
							'theme_location' => 'primary'
							);
							wp_nav_menu($args);
						?>
					</nav>
					<div class="hd-search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</header>
			
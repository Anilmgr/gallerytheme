<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	
	<header>
		<div class="container text-center">
			<a class="brand-logo" href="<?php home_url('/');?>">Tashbir</a>			
		</div>
	</header>

	<nav class="navbar navbar-expand-sm  sticky-top">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
		</ul>
	</nav>	

<?php

function gallery_assets(){
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css');
	wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery.min.js', array(''), '3.3.1', false);
	wp_enqueue_script('bootstrap-script', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', false);
}	

add_action('wp_enqueue_scripts', 'gallery_assets');
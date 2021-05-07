<?php

	function cvcard_child_scripts()
	{
		wp_enqueue_style('cvcard-parent-style', get_template_directory_uri(). '/style.css');
	}
	
	add_action('wp_enqueue_scripts', 'cvcard_child_scripts');


/* Custom Functions */
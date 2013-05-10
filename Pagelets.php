<?php

# -----------------------------------------------------
# Pagelets - Pages for Dropplets - V1
# -----------------------------------------------------
# Adam Stanford <adam@adamstanford.net> (MIT License)
# https://github.com/adamjacob/
# -----------------------------------------------------

# Config
$page_directory	= './pages/';
$page_template	= $template_dir . 'page.php';
$page_file_exts = array('html','md');

	# This might be a page...
	if( isset($_GET['filename']) ){

		# Get the current route
		$current_route = $_GET['filename'];

		# Check if any of the files exist
		foreach ($page_file_exts as $ext) {

			if (file_exists($page_directory . $current_route . '.' . $ext)){

				# One does, lets get the contents...
		    	$content = file_get_contents($page_directory . $current_route . '.' . $ext);

			    	# Markdown?
			    	if($ext == 'md'){

			    		# This is markdown, proccess...
			    		$content = Markdown($content);

					}

			    		# Get the page template
			    		include_once $page_template;

			    			# Stop everything! This is so dropplets does not continue to a 404...
			    			die;

			}

		}

	}
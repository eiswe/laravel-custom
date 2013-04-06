<?php

	Autoloader::directories(array(
		Bundle::path('home').'models',
	));

	Autoloader::map(array(
    	'Admin'    => Bundle::path('admin').'models/admin.php',
	));
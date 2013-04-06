<?php

	Autoloader::directories(array(
		Bundle::path('home').'models',
	));

	Autoloader::map(array(
    	'Admin'    => path('admin').'models/admin.php',
	));
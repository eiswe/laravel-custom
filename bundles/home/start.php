<?php

	// Autoloader::map(array(
	//     'Home_Base_Controller' => Bundle::path('home').'controllers/base.php',
	// ));

	// Autoloader::namespaces(array(
	//     'Home\Models' => Bundle::path('home'),
	// ));

	Autoloader::directories(array(
		Bundle::path('home').'models',
	));
/*
	    'Home\Libraries' => Bundle::path('home').'libraries',

	Auth::extend('adminauth', function(){
		return new Admin\Libraries\AdminAuth;
	});
	*/
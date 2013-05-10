<?php

Route::controller(Controller::detect('admin'));			// Enable all Admin Bundle Controllers in one Time! 

// create route with filter auth? does i need filter?

Route::filter('auth', function(){						// filter: if guest(): before go to home redirect to login
	if (Auth::guest()) return Redirect::to(URL::to_action('admin::login'));
});

// Dont need to add CSRF Filter can use from Base Application! - Deactivated! ..:(
<?php

// Enable all Admin Bundle Controllers in one Time! 
Route::controller(Controller::detect('admin'));

/** 
								Except each alone.
Route::controller(array(
    'admin::home',
));
*/

Route::filter('auth', function(){
	// filter: if guest(): before go to home redirect to login
	if (Auth::guest()) return Redirect::to(URL::to_action('admin::login'));
});
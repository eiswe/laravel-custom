<?php

Route::get('admin/edit/(:num?)', array( 'as' => 'edit' , function( $id = 'index' ){
	//return Redirect::to(URL::to('admin/list/edit/1'));				// redirect server/admin/edit to server/admin/list/edit/1


	if ( isset($id) ) {									// if ID is given..
		if ( $id == 'index' ) {							// elseif ID is empty...
			return Redirect::to(URL::to_action('admin::search'));
			// return View::make( 'admin::dashboard.search' )->with( 'title', 'Search for a Card' );

			// return View::make( 'admin::dashboard.list' )	// return to list view.. tmp, will add a search site!
			// 		->with( 'title', 	'Edit Index' )
			// 		->with( 'card', 	'')
			// ;

		} else {
			return Redirect::to(URL::to('admin/list/edit/'.$id));	
		}
	} elseif ( !isset($id) ) {							// elseif ID is empty...
		return Response::error('404');
	}


}));

Route::controller(Controller::detect('admin'));			// Enable all Admin Bundle Controllers in one Time! 

// Wanna add an personal Page (private?) - with individual view for each User!

Route::filter('auth', function(){						// filter: if guest(): before go to home redirect to login
	if (Auth::guest()) return Redirect::to(URL::to_action('admin::login'));
});


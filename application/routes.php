<?php
use Admin\Models\Admin;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

//Route::controller('home');
Route::controller(Controller::detect('application'));	//Dont need using Controller...
/*
Route::get('/about', function(){
	return View::make('home.about')
		->with('title', 'LimeBlack - About us!')
		->with('site', 'home')
	;
});

Route::get('/home', function(){
	return View::make('home.index')
		->with('title', 'LimeBlack - Index')
		->with('site', 'home')
	;
});
*/
Route::get('/(:any)/news', function($any){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}
        $news = Page::where('admin_id', '=', $uid )->get();
		// $news = Admin::find( $uid )->page()->get();    //all();  // cant use eloquent.. :'(

		return View::make('show.news')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('site', $any)
			->with('news', $news)
		;
});

Route::get('/(:any)/about', function($any){ 						// if nothing match use any! - use for profile names!
	return View::make('show.about')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/(:any)/home', function($any){ 						// if nothing match use any! - use for profile names!
	return View::make('show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/(:any)/index', function($any){ 						// if nothing match use any! - use for profile names!
	return View::make('show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/(:any)', function($any){ 						// if nothing match use any! - use for profile names!
	return View::make('show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/', function(){

	return View::make('home.index')
		->with('title', 'LimeBlack - Index')
		->with('site', 'home')
	;
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});
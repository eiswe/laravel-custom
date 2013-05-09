<?php

Route::get('/about', function(){
	return View::make('admin::home.about')->with('title', 'LimeBlack - About us!')->with('site', 'home');
});
Route::get('/home', function(){
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index')->with('site', 'home');
});
Route::get('/index', function(){
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index')->with('site', 'home');
});

Route::get('/admin', function(){
	return Redirect::to(URL::to_action('admin::home@index'));
});

Route::get('/(:any)/projects', function($any){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}
        $news = Page::where('admin_id', '=', $uid )->get();
		//$news = Admin::find( $uid )->page()->get();    //all();  // cant use eloquent.. :'( - also cant autoload admin models...         ! cant reach admin class!

		return View::make('admin::show.news')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('site', $any)
			->with('news', $news)
		;
});

Route::get('/(:any)/news', function($any){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}
        $news = Page::where('admin_id', '=', $uid )->get();
		//$news = Admin::find( $uid )->page()->get();    //all();  // cant use eloquent.. :'( - also cant autoload admin models...         ! cant reach admin class!

		return View::make('admin::show.news')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('site', $any)
			->with('news', $news)
		;
});

Route::get('/(:any)/gallery', function($any){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}
        $pictures = Picture::where('admin_id', '=', $uid )->get();

		return View::make('admin::show.gallery')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('site', $any)
			->with('pictures', $pictures)
		;
});

Route::get('/(:any)/about', function($any){ 				// fetch ab out site for generated menu

	$pprofile = Profile::where('frontname', 'like', $any)->get();

	return View::make('admin::show.about')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
		->with('profile', $pprofile)
	;
});

Route::get('/(:any)/home', function($any){ 					// fetch index site for generated menu
	return View::make('admin::show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/(:any)/index', function($any){ 				// fetch index site for generated menu
	return View::make('admin::show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('site', $any)
	;
});

Route::get('/(:any)', function($any){ 						// fetch any else
	return View::make('admin::show.index')->with('title', 'LimeBlack - '.$any.' Index')->with('site', $any);
});

Route::get('/', function(){									// fetch /
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index')->with('site', 'home');
});

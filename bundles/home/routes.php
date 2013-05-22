<?php

Route::get('/about', function(){
	return View::make('admin::home.about')->with('title', 'LimeBlack - About us!');
});
Route::get('/home', function(){
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index');
});
Route::get('/index', function(){
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index');
});

Route::get('/admin', function(){
	return Redirect::to(URL::to_action('admin::home@index'));
});

Route::get('/(:any)/site/(:num)', function($any, $id){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}

		$ppages	= Page::where( 'admin_id', '=', $uid )->order_by('id', 'desc')->get();	
        $ppage 	= Page::where( 'id', 	   '=', $id  )->get();				// wanna use eloquent :'(

		return View::make('admin::show.site')
			->with( 'title', 'LimeBlack - '.$any.' Index')
			->with( 'site', 	$any)
			->with( 'id', 		$id)
			->with( 'page',		$ppage)
			->with( 'pages',	$ppages)
			->with( 'userid',	$uid)
		;
});

Route::get('/(:any)/projects/(:any)', function($any, $pro){ 				// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}
        
        // Would be much easier if i redirect eloquent to use from here!
        $pprojects 		= Projectgroup::where( 	'admin_id', '=', $uid)->order_by('id', 'desc')->get();
        $pprojectPage 	= Project::where( 		'admin_id', '=', $uid)->get();
        $ppage 			= Page::where( 			'admin_id', '=', $uid)->order_by('id', 'desc')->get();
        $ttext 			= Text::where( 			'admin_id', '=', $uid)->get();

        //$news = Page::where('admin_id', '=', $uid )->get();
		//$news = Admin::find( $uid )->page()->get();    //all();  // cant use eloquent.. :'( - also cant autoload admin models...         ! cant reach admin class!

		return View::make('admin::show.projects')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('project', 		$pro)
			->with('text',			$ttext)
			->with('page',			$ppage)
			->with('projects', 		$pprojects)
			->with('projectpage', 	$pprojectPage)
		;
});

Route::get('/(:any)/news', function($any){ 						// if nothing match use any! - use for profile names!

		$starredUsers = Profile::where('frontname', 'like', $any)->get();
		foreach ( $starredUsers as $key ) {
			$uid = $key->admin_id;
		}

        $news = Page::where('admin_id', '=', $uid )->order_by('id', 'desc')->get();  //$news = Admin::find( $uid )->page()->get();    //all();  // cant use eloquent.. :'( - also cant autoload admin models...         ! cant reach admin class!
        foreach ($news as $key => $value) {
        	if ( $value->texts == true) {
        		$ppagelist[] = $value->id;
        	}
        }
		
		foreach ($ppagelist as $key) {
			$ttext[] = Text::where( 'page_id', '=', $key)->where( 'admin_id', '=', $uid )->get();
		}

		return View::make('admin::show.news')
			->with('title', 'LimeBlack - '.$any.' Index')
			->with('news', $news)
			->with('tlist', $ttext)
			->with('plist', $ppagelist)
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
			->with('pictures', $pictures)
		;
});

Route::get('/(:any)/about', function($any){ 				// fetch ab out site for generated menu

	$pprofile = Profile::where('frontname', 'like', $any)->get();

	return View::make('admin::show.about')
		->with('title', 'LimeBlack - '.$any.' Index')
		->with('profile', $pprofile)
	;
});

Route::get('/(:any)/home', function($any){ 					// fetch index site for generated menu
	return View::make('admin::show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
	;
});

Route::get('/(:any)/index', function($any){ 				// fetch index site for generated menu
	return View::make('admin::show.index')
		->with('title', 'LimeBlack - '.$any.' Index')
	;
});

Route::get('/(:any)', function($any){ 						// fetch any else
	return View::make('admin::show.index')->with('title', 'LimeBlack - '.$any.' Index');
});

Route::get('/', function(){									// fetch /
	return View::make('admin::home.index')->with('title', 'LimeBlack - Index');
});

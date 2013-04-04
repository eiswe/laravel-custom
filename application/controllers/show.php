<?php

class Show_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index() {
		return View::make('show.index')
			->with('title', $title)
			->with('site', $site)
		;
	}
	
	public function action_home() {
		return View::make('show.index')
			->with('title', 'LimeBlack - Index')
			->with('site', $site)
		;
	}

	public function action_about() {
		return View::make('show.about')
			->with('title', 'LimeBlack - About me!')
			->with('site', $site)
		;
	}

	public function action_news() {

		$news = Page::where('userid', '=', 2 )->get();    //all();

		return View::make('show.news')
			->with('title', 'LimeBlack - About me!')
			->with('site', $site)
			->with('news', $news)
		;
	}
}
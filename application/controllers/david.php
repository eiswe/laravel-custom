<?php

class David_Controller extends Base_Controller {

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
		return View::make('david.index')
			->with('title', 'LimeBlack - Index');
	}
	
	public function action_home() {
		return View::make('david.index')
			->with('title', 'LimeBlack - Index');
	}

	public function action_about() {
		return View::make('david.about')
			->with('title', 'LimeBlack - About me!');
	}

	public function action_news() {

		$news = Page::where('userid', '=', 2 );    //all();

		return View::make('david.news')
			->with('title', 'LimeBlack - About me!')
			->with('news', $news)
		;
	}
}
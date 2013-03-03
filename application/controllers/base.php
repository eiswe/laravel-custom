<?php

class Base_Controller extends Controller {

    public function __construct(){

        parent::__construct();

        // Include bundle and css files from bootstrap/jquery
		Asset::container('bootstrapper')->styles();
		Asset::container('bootstrapper')->scripts();
    }

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}
<?php

class Admin_Base_Controller extends Controller {

    // Use Laravels restful controllers
    public $restful = true;

    public function __construct(){

        /** !Pink

        ##  i really wanna replace this admin bundle shit!
        ##  but now it works ... -.-  
        ##  i see problems with compatibility to other bundles like aware...
        ##  why he need to Redirect Admin Model (bundles/admin/models/admin.php Line:1,2)

        */

        parent::__construct();

        // enable config for login -> credentials
        // Imports the library and config: libraries/adminauth, cofig/auth
        Config::set('auth.driver', 'adminauth');
        
        // Include bundle and css files from bootstrap/jquery
        // Assets can be included in the view files!
        Asset::container('header')->bundle('admin');
        Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');

        Asset::container('footer')->bundle('admin');
        Asset::container('footer')->add('jquery', 'http://code.jquery.com/jquery-latest.min.js');
        Asset::container('footer')->add('bootstrapjs', 'js/bootstrap.min.js');

        // using auth filter globally for everything in admins
        $this->filter('before', 'auth');
    }

    /*
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
     */

    // catch anything that cant match
    // wanna modify this page with page not found view of crunchbang!
    public function __call($method, $parameters){
        return Response::error('404');
    }

}
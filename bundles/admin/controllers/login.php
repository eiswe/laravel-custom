<?php
// Import Model to use Admin class
use Admin\Models\Admin;
class Admin_Login_Controller extends Controller {

    public $restful = true;

    public function __construct(){
        parent::__construct();

        Config::set('auth.driver', 'adminauth');

        Asset::container('header')->bundle('admin');
        Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');
    }

    public function get_index(){
        return View::make('admin::login.index')->with('title', 'Login to Admin Section');
    }

    public function post_index(){

        $creds = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        );

        if(Auth::attempt($creds)){

            // get Username and search in DB for id
            $adminn = Admin::where( 'username', '=', $creds['username'] )->get();
            foreach ( $adminn as $value ) {
                // save user id in Session
                Session::put('id', $value->id);
            }
            
            return Redirect::to(URL::to_action('admin::home@index'));

        } else {
            return Redirect::back()->with('error', true);
        }
    }

    public function get_logout(){

        // Delete Data stored in Session
        Session::flush();
        
        // Logout!
        Auth::logout();

        // return to public home cause he isnt logged in!
        return View::make('home.index');
    }
}
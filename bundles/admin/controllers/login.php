<?php
// Import Model to use Admin class
use Admin\Models\Admin;
class Admin_Login_Controller extends Controller {

    public $restful = true;

    public function __construct(){
        parent::__construct();
        Config::set('auth.driver', 'adminauth');
    }

    public function get_index(){
        return View::make('admin::login.index')->with('title', 'LimeBlack - Login to Dashboard');
    }

    public function post_index(){

        $creds = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        );

        if(Auth::attempt($creds)){

            $adminn = Admin::where( 'username', '=', $creds['username'] )->get();   // get Username and search in DB for id
            foreach ( $adminn as $value ) {
                Session::put('id', $value->id);     // save user id in Session
            }
            return Redirect::to(URL::to_action('admin::home@index'))
                ->with( 'title', 'LimeBlack - Admin Dashboard');

        } else {
            return Redirect::back()->with('error', true);
        }
    }

    public function get_logout(){

        Session::flush();           // Delete Data stored in Session        
        Auth::logout();             // Logout!

        return Redirect::to(URL::to_action('home@index'))
            ->with( 'title', 'Welcome to LimeBlack')
            ->with( 'site',  'home' );
    }
}
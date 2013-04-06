<?php

class Admin_Home_Controller extends Admin_Base_Controller {

    public function get_index(){
    	return View::make('admin::dashboard.index')->with('title', 'Index of Admin Panel'); 		// return to Index Page!
    }
    
    public function get_home(){
    	return View::make('admin::dashboard.index')->with('title', 'Index of Admin Panel'); 		// return to Index Page!
    }    
}

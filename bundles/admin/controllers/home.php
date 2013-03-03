<?php

class Admin_Home_Controller extends Admin_Base_Controller {

    public function get_index(){
    	return View::make('admin::dashboard.index')->with('title', 'CUSTOM PAGE');
    	
    }
}








/** !Pink 

	Some very old code...
	
	   	try a new method to call page

    	$this->layout->title = 'Dashboard';
    	$this->layout->nest('content', 'admin::dashboard.index');
    */
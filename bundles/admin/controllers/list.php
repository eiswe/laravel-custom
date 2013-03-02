<?php

class Admin_List_Controller extends Admin_Base_Controller {

    public function get_index(){

    	// lets load all Pages exist in Database
    	$Pages = page::with('title')->all();

    	// or load only one Page you want!
    	//$Pages = page::where('admin_id', '=', '1')->get();

    	return View::make('admin::dashboard.list')
    		->with('title', 'List of Admin Panel')
    		->with('pages', $Pages);
    }





    /** ### ### ### Demonstration ### ### ### **/

    // 2nd function reach via /localhost/admin /list      /auto  /23
    //                        /server   /bundle/controller/method/argument
    public function get_auto($id){
    	return '<a href="index">Get Auto for a Price of '.$id.' 000 US Dollar</a>';
    }
}
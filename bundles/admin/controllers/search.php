<?php
use Admin\Models\Admin;
class Admin_Search_Controller extends Admin_Base_Controller {

    public function get_index(){

    	// $Cards = card::all();   // lets load all cards exist in Database

	   	// foreach ( $Cards as $key => $value ) {
     //        $cardlist[] = array(                            // get all users to fetch username from id
     //            $value->testdate,
     //        );	   		
     //    }

        return View::make( 'admin::dashboard.search' )->with( 'title', 'Search for a Card' )
        	//->with( 'card', $Cards )
        	//->with( 'date', $cardlist )
        ;
    }
}
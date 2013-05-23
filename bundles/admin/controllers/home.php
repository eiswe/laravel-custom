<?php

class Admin_Home_Controller extends Admin_Base_Controller {

    public function get_home(){							// redirect to index if search for home
    		return Redirect::to(URL::to_action('admin::home@index'));
    }    
    
    public function get_index(){						// return to Index Page!
    	return View::make('admin::dashboard.index')
    		->with( 'title', 	'LimeBlack - Admin Dashboard')
    	; 		
    }
}

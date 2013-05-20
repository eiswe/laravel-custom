<?php
use Admin\Models\Admin;
class Admin_Play_Controller extends Admin_Base_Controller {

    public function get_index(){
        return View::make( 'admin::dashboard.play' )
        	->with( 'title', 'LimeBlack - Playground' )
        	->with( 'bott',  'play')
        ;
    }
}



    // Only my Playground
<?php
use Admin\Models\Admin;
class Admin_Emacs_Controller extends Admin_Base_Controller {

    public function get_index(){


        return View::make( 'admin::dashboard.emacs' )->with( 'title', 'Emacs File' )
        ;
    }
}
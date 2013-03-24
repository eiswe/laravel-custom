<?php
use Admin\Models\Admin;
class Admin_Page_Controller extends Admin_Base_Controller {

    public function get_index(){

/** Generate a list of user related content */
        $uusers = Admin::all();
        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                            // get all users to fetch username from id
                $value->id,
                $value->username,             // save user, id in userlist for sending to list
            );
        }
/** End of beauty names list! */

        $pagelist = Page::all();   // lets load all pagelist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::pages.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'pages', $pagelist )
            ->with( 'user', $userlist )
        ;
    }
    
    public function get_list(){

/** Generate a list of user related content */
        $uusers = Admin::all();
        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                            // get all users to fetch username from id
                $value->id,
                $value->username,             // save user, id in userlist for sending to list
            );
        }
/** End of beauty names list! */

        $pagelist = Page::all();   // lets load all pagelist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::pages.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'pages', $pagelist )
            ->with( 'user', $userlist )
        ;
    }

    public function get_add(){

/** Generate a list of user related content */
        $uusers = Admin::all();
        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                            // get all users to fetch username from id
                $value->id,
                $value->username,             // save user, id in userlist for sending to list
            );
        }
/** End of beauty names list! */

        // need to fetch if list is empty!

        return View::make( 'admin::pages.add' )
            ->with( 'title', 'Add new Page' )
            ->with( 'user', $userlist )
        ;
    }
}
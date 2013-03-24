<?php
use Admin\Models\Admin;
class Admin_Text_Controller extends Admin_Base_Controller {

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

        $textlist = Text::all();   // lets load all textlist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::texts.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'texts', $textlist )
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

        $textlist = Text::all();   // lets load all textlist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::texts.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'texts', $textlist )
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

        return View::make( 'admin::texts.add' )
            ->with( 'title', 'Add new Text' )
            ->with( 'user', $userlist )
        ;
    }
}
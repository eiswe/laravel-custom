<?php
use Admin\Models\Admin;
class Admin_Movie_Controller extends Admin_Base_Controller {

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

        $movielist = Movie::all();   // lets load all movielist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::movies.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'movies', $movielist )
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

        $movielist = Movie::all();   // lets load all movielist exist in Database

        // need to fetch if list is empty!

        return View::make( 'admin::movies.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'movies', $movielist )
            ->with( 'user', $userlist )
        ;
    }
}
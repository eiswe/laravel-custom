<?php
use Admin\Models\Admin;
class Admin_Export_Controller extends Admin_Base_Controller {

    public function get_index(){

/** Getting name lists for beauty! */

        $uusers = Admin::all();

        $ausort = array(
            '0' => 'intern',
            '1' => 'extern',
        );
        
        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                            // get all users to fetch username from id
                $value->id,
                $value->username,             // save user, id in userlist for sending to list
            );
        }

        $Ctypes = Cardtype::all();                          // get all card types to fetch card from cardtype before print list!
        foreach ( $Ctypes as $value ) {                     // /:\ where('id', '>=', '0')->get();
            $ctypeslist[] = array(
                $value->id,
                $value->title,                
            );
        }

        $Etypes = Errortype::all();                         // get all error types to fetch card from cardtype before print list!
        foreach ( $Etypes as $value ) {                     // /:\ where('id', '>=', '0')->get();
            $etypeslist[] = array(
                $value->id,
                $value->name,                 
            );
        }   

        $stypes = Status::all();                            // get all status types to fetch card from cardtype before print list!
        foreach ( $stypes as $value ) {                     // /:\ where('id', '>=', '0')->get();
            $statuslist[] = array(
                $value->id,
                $value->name,                 
            );
        }   

        $ftypes = Failure::all();                           // get all failure types to fetch card from cardtype before print list!
        foreach ( $ftypes as $value ) {                     // /:\ where('id', '>=', '0')->get();
            $failurelist[] = array(
                $value->id,
                $value->name,                 
            );
        }  
/** End of beauty names list! */

        $Cards = card::all();   // lets load all cards exist in Database

        return View::make( 'admin::dashboard.export' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'cards', $Cards )
            ->with( 'user', $userlist )
            ->with( 'type', $ctypeslist )
            ->with( 'errr', $etypeslist )
            ->with( 'stat', $statuslist )
            ->with( 'fail', $failurelist )
            ->with( 'auso', $ausort )
        ;
    }
}


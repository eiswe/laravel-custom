<?php
use Admin\Models\Admin;
class Admin_List_Controller extends Admin_Base_Controller {

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

    	return View::make( 'admin::dashboard.list' )
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




/**
    Edit Card!!! 
        -> Route it and view to "edit Form"!
*/
    public function get_edit($id){  // for fetching errors need to use routes....^^ ok NOT!

        if ( $id <= 123456 ) {                                          // notice automaticlly if you search for sn instead of id... 
            $cardd = card::where('id', '=', $id)->get();                // fetch all data for an id!      // need to fetch id's witch are wrong!    
        } else {
            $cardd = card::where('serialnumber', '=', $id)->get();      // fetch all data for an id!      // need to fetch id's witch are wrong!       
        }

/** Getting name lists for beauty! */
        $uusers = Admin::all();                             // Fetch all users 

        $ausort[] = "";                                     // create empty array for Ausfall Ort

        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                            // get all users to fetch username from id
                $value->id => $value->username,             // save user, id in userlist for sending to list
            );
        }

        $Ctypes = Cardtype::all();                          // get all cardtypes to fetch card from cardtype before print list!
        foreach ( $Ctypes as $value ) {                     // /:\ where('id', '>=', '0')->get();
            $ctypeslist[] = array(
                $value->id => $value->title, 
            );
        }

        $Etypes = Errortype::all();                         // get all error types to fetch card from cardtype before print list!
        foreach ( $Etypes as $value ) {
            $etypeslist[] = array(
                $value->id => $value->name,
            );
        }   

        $stypes = Status::all();                            // get all status to fetch card from cardtype before print list!
        foreach ( $stypes as $value ) {
            $statuslist[] = array(
                $value->id => $value->name,
            );
        }   

        $ftypes = Failure::all();                           // get all failures to fetch card from cardtype before print list!
        foreach ( $ftypes as $value ) {
            $failurelist[] = array(
                $value->id => $value->name,
            );
        }    
/** End of beauty names list! */
        
        $DefaultGender = $cardd;

        foreach ( $DefaultGender as $uniqValue => $uniqKey ) {

            
            if ( $uniqKey->ausort == '0' ) {    // THIS LOOP CONTAINS DEFAULT DATA FOR INPUT FIELDS!!! and save in awesome Var: uniqValue!
                $ausort = array( '1' => 'extern' ) + $ausort;
                $ausort = array( $uniqKey->ausort => 'intern' ) + $ausort;
            } elseif ( $uniqKey->ausort == '1' ) {
                $ausort = array( '0' => 'intern' ) + $ausort;
                $ausort = array( $uniqKey->ausort => 'extern' ) + $ausort;
            }

            // try do:    foreach karttype   look if card cardtype    equal to any of cardtypes!
            foreach ($ctypeslist as $ckey) {           //=> $value check foreach card id for change to name

                foreach ( $ckey as $cid => $cvalue) {                // $messages = print $cvalue.' with ID: '.$cid;
                    
                    if ( $uniqKey->cardtype == $cid ) {
                        $ctypeslist = array( $cid => $cvalue ) + $ctypeslist;
                    }
                }
            }

            foreach ($etypeslist as $ekey) { //=> $value check foreach error id for change to name
                
                foreach ( $ekey as $eid => $evalue) {                // $messages = print $evalue.' with ID: '.$cid;
                    if ( $uniqKey->errortype == $eid ) {
                        $etypeslist = array( $eid => $evalue ) + $etypeslist;
                    }
                }
            }

            foreach ($statuslist as $skey) { //=> $value check foreach status id for change to name
                foreach ( $skey as $sid => $evalue) {
                    if ( $uniqKey->status == $sid ) {
                        $statuslist = array( $sid => $evalue ) + $statuslist;
                    }
                }
            }

            foreach ($failurelist as $fkey) { //=> $value check foreach failure id for change to name
                foreach ( $fkey as $fid => $fvalue) {
                    if ( $uniqKey->failure == $fid ) {
                        $failurelist = array( $fid => $fvalue ) + $failurelist;
                    }
                }
            }            

            foreach ($userlist as $ukey) { //=> $value check foreach user id for change to name
                foreach ( $ukey as $uid => $uvalue) {
                    if ( $uniqKey->userid == $uid ) {
                        $userlist = array( $uid => $uvalue ) + $userlist;
                    }
                }
            }

        }
 
        return View::make( 'admin::dashboard.edit' )
            ->with( 'title', 'Edit a Card!' )
            ->with( 'card', $cardd )
            ->with( 'user', $userlist )
            ->with( 'type', $ctypeslist )
            ->with( 'errr', $etypeslist )
            ->with( 'stat', $statuslist )
            ->with( 'fail', $failurelist )
            ->with( 'auso', $ausort )
//            ->with('error', $messages); // only for debugging
        ;
    }



/**
    Edit Card!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function post_edit($id){

        $creds = "";                                                          // clear creds and
        $creds = Input::all();                                                // fetch all input in one time

        $uid = Session::get('id');                                            // fetch Session:id

        $creds += array(                                                      // add admin_id
            'userid'  =>  $uid
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                             // Name                         // Example
            'sn' =>  'required|numeric|min:12345675|max:500000000', // Serial Number                - 31120123 min:12345675|max:500000000
            'rv'    =>  'max:20',                                   // Revision                     - 8.17.19.2
            'kt'    =>  'required|numeric',                         // Card Type                    - Atomix LT 2.0 4BNC
            'ao'    =>  'required|numeric',                         // Ausfall Ort                  - intern / extern
            'et'    =>  'required|numeric',                         // Error Type                   - leichter Fehler, max. 2h Reparatur Aufwand
            'st'    =>  'required|numeric',                         // Status                       - Nicht befundet!
            'fl'    =>  'required|numeric',                         // failure                      - Nicht befundet!
            'ex'    =>  'max:1024',                                 // external Failure Description - Card will not open
            'dv'    =>  'max:1024',                                 // DVS Failure Description      - PCIe Testboard: Q7 Keine Verbindung!
            'tt'    =>  'max:6',                                      // Test Duration                - 1:30
            //'td' =>  'match:\d{1,2}\.\d{1,2}\.\d{4}',             // Test Date                    - 02.05.2013
            //'dw' =>  'match:^\d{1,2}\.\d{1,2}\.\d{4}$',           // Arrival Date                 - 12.04.2013
            // 'dt'    =>  '',                                      // DVS OTRS Ticket              - [DVS#1234567]
            // 'pa'    =>  '',                                      // Produktions Austrag          - PA-29123
            // 'cu'    =>  '',                                      // Customer                     - RuS Inc.
            // 'rl'    =>  '',                                      // RLA                          - 5stellig?
            // 'cp'    =>  '',                                      // CPLD Version                 - 1.17.0
            // 'fw'    =>  '',                                      // Firmware                     - 1.1.16.11_1.10.3
            //'sd'    =>  '',                                       // SDK Version                  - 4.3.0.10 / 1.4.17.0
            //'hw'    =>  'match:^\d{1}\.\d{1}\.\d{1,2}\.\d{1}$',   // HW-Test Version              - 2.1.16.1
            'userid' =>  'required|numeric|max:100',                                // UserID                       - 1 // Stand for root
        );

        $v = Validator::make($creds, $rules);                                 // validate the input

        if ( $v->fails() ) {                                                  // if validator fails...print some messages
            $messages = $v->errors->all('<p>:message</p>'); // get all error with all attributes
            
            return Redirect::back()                         // if fails return back to form with errors and not input! :(
                ->with('error', $messages)
                ->with_input()                              // return new input back, but cant handle with bootstrap
            ;
        } 

        if ( $id <= 123456 ) {                                                // notice automaticlly if you search for sn instead of id... 
            $cardd = card::where('id', '=', $id)->get();                      // fetch all data for an id!      // need to fetch id's witch are wrong!    
        } else {
            $cardd = card::where('serialnumber', '=', $id)->get();            // fetch all data for an id!      // need to fetch id's witch are wrong!       
        }


        foreach ( $creds as $key => $value ) {                                // THIS LOOP resolve short input vars with Card fields of Database
            switch ( $key ) {                       // adding data to new Card ( !DataBase! ) - rename input field to database name
                case "id":                          // create a relation between input field and database value ( RENAME VARS )
                    $key = 'id';
                    break;
                case "sn":
                    $key = 'serialnumber';
                    break;
                case "rv":
                    $key = 'revision';
                    break;
                case "kt":
                    $key = 'cardtype';
                    break;
                case "ao":
                    $key = 'ausort';
                    break;
                case "et":
                    $key = 'errortype';
                    break;
                case "st":
                    $key = 'status';
                    break;
                case "fl":
                    $key = 'failure';
                    break;
                case "ex":
                    $key = 'excomment';
                    break;
                case "dv":
                    $key = 'comment';
                    break;
                case "td":
                    $key = 'testdate';
                    break;
                case "tt":
                    $key = 'time';
                    break;
                case "dw":
                    $key = 'datawe';
                    break;
                case "dt":
                    $key = 'otrs';
                    break;
                case "pa":
                    $key = 'pa';
                    break;
                case "cu":
                    $key = 'distributor';
                    break;
                case "rl":
                    $key = 'rla';
                    break;
                case "cp":
                    $key = 'cpld';
                    break;
                case "fw":
                    $key = 'firmware';
                    break;
                case "sd":
                    $key = 'sdk';
                    break;
                case "hw":
                    $key = 'hwtest';
                    break;
            }
            
            foreach ( $cardd as $ergeb ) {              // save each value in database
                $ergeb->$key = $value;                  // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
            }            
        }

        $ergeb->save();                                                       // finally save to database!
        
        $his = new history();                                                 // if card was saved, we need to create a history entry

        // try to compare $value with field content
        foreach ( $creds as $key => $svalue ) {      // adding data to new Card ( !DataBase! )
            if ( $value != $svalue ) {
                $fields[] = $key;
                $values[] = $svalue;                
            }
        }
        
        $fieldstr = implode(",", $fields);                                    // convert array to string, to save in DB
        $valuestr = implode(",", $values);                                    // convert array to string, to save in DB

        $his->cardid = $ergeb->id;                                             // get and save id of current item ( card! )
        $his->action = 'update';                                              // say what we are doing!
        $his->userid = $uid;                                                  // save userid!
        $his->fields = $fieldstr;                                             // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                                             // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();  
        
        $messages = array(                                                    // Generate a success message
            'event'  => 'UpdateCard',
            'state'  => 'Successfully'
        );

        return Redirect::to(URL::to_action('admin::home@index'))->with('alert', $messages);  // return back to home view - looking for error message or events!
    }
}
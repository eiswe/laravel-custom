<?php
use Admin\Models\Admin;
class Admin_Card_Controller extends Admin_Base_Controller {

    public function get_index(){ 

/** Getting name lists for beauty! */
        $uusers = Admin::all();

        $ausort = array(
            '0' => 'intern',
            '1' => 'extern',
        );
        
        foreach ( $uusers as $value ) {                 
            $userlist[] = array(                                    // get all users to fetch username from id
                $value->id => $value->username,                     // save user, id in userlist for sending to list
            );
        }

        $Ctypes = Cardtype::all();                                  // get all cardtypes to fetch card from cardtype before print list!
        foreach ( $Ctypes as $value ) {                             // /:\ where('id', '>=', '0')->get();
            $ctypeslist[] = array(
                $value->id => $value->title,                        // save user id in Session
            );
        }

        $Etypes = Errortype::all();                                 // get all cardtypes to fetch card from cardtype before print list!
        foreach ( $Etypes as $value ) {                             // /:\ where('id', '>=', '0')->get();
            $etypeslist[] = array(
                $value->id => $value->name,                         // save user id in Session
            );
        }   

        $stypes = Status::all();                                    // get all cardtypes to fetch card from cardtype before print list!
        foreach ( $stypes as $value ) {                             // /:\ where('id', '>=', '0')->get();
            $statuslist[] = array(
                $value->id => $value->name,                         // save user id in Session
            );
        }   

        $ftypes = Failure::all();                                   // get all cardtypes to fetch card from cardtype before print list!
        foreach ( $ftypes as $value ) {                             // /:\ where('id', '>=', '0')->get();
            $failurelist[] = array(
                $value->id => $value->name,                         // save user id in Session 
            );
        }   

/** End of beauty names list! */

        return View::make('admin::dashboard.card')                  // show Page Formular
            ->with('title', 'Create a new Card!')
            ->with( 'user', $userlist )
            ->with( 'type', $ctypeslist )
            ->with( 'errr', $etypeslist )
            ->with( 'stat', $statuslist )
            ->with( 'fail', $failurelist ) 
            ->with( 'auso', $ausort )           
        ;
    }

    public function post_index(){
        
        $creds = "";                                                // clear creds

        $creds = Input::all();                                      // fetch all input, 
        Input::clear();                                             // and clear after!

        $id = Session::get('id');                                   // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'userid'  =>  $id
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

        $v = Validator::make($creds, $rules);                       // validate the input

        if ( $v->fails() ) {                                        // if validator fails...

            // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show them
        } 

        $card = new card();                                         // get Model Card create a database insertion
        $his = new history();                                       // if card was saved, we need to create a history entry


        foreach ( $creds as $key => $value ) {                      // adding data to new Card ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
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

            $card->$key = $value;                   // save each key-value pair in card!
        }

        $card->save();                              // save the data to database

        foreach ( $creds as $key => $value ) {      // adding data to new Card ( !DataBase! )
            if ( isset( $value ) ) {
                $fields[] = $key;
                $values[] = $value;                
            }
        }

        $fieldstr = implode(",", $fields);          // convert array to string, to save in DB
        $valuestr = implode(",", $values);          // convert array to string, to save in DB

        $his->cardid = $card->id;                   // get and save id of current item ( card! )
        $his->action = 'insert';                    // say what we are doing!
        $his->userid = $id;                         // save userid!
        $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();                               // save all to database!

        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));  
          
    }
}
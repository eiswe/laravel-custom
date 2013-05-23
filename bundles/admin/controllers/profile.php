<?php
use Admin\Models\Admin;
class Admin_Profile_Controller extends Admin_Base_Controller {

    public function get_index()    {
        return View::make( 'admin::admin.index' )
            ->with( 'title', 'LimeBlack - Profile Index' )
        ;
    }
    
    public function get_home(){
            return Redirect::to(URL::to_action('admin::profile@index'));
    }      

    public function get_password(){ 

        $userid = Auth::user()->id;                                   // fetch Session:id and 
        
        return View::make( 'admin::admin.password' )               // show User Profile
            ->with( 'title', 'LimeBlack - Profile Password' )
            ->with( 'userid', $userid )
        ;
    }


    public function post_password(){
        
        $creds = "";                                                // clear creds

        $creds = Input::all();                                      // fetch all input, 
        Input::clear();                                             // and clear after!

        $id = Auth::user()->id;                                  // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'userid'  =>  $id
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                             // Name                         // Example
            // 'id' =>  'required'              // dont wanna update id!
            'name'      =>  'max:64',             // Name of User dont used only for Nice!
            'user'      =>  'required|alpha_dash',   // username is nessesary
            'password'  =>  'required',                         // Ausfall Ort                  - intern / extern
            // 'role'   => '', // will never used
            'userid'    =>  'required|numeric|max:100',                                // UserID                       - 1 // Stand for root
        );

        $v = Validator::make($creds, $rules);                       // validate the input

        if ( $v->fails() ) {                                        // if validator fails...

            // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show them
        } 

        if ( $id <= 123456 ) {                                                // notice automaticlly if you search for sn instead of id... 
            $aadmin = Admin::where('id', '=', $id)->get();                      // fetch all data for an id!      // need to fetch id's witch are wrong!    
        }

        foreach ( $creds as $key => $value ) {                      // adding data to new Admin ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "name":
                    $key = 'name';
                    break;
                case "user":
                    $key = 'username';
                    break;
                case "password":
                    $key = 'password';
                    $value = Hash::make($value);
                    break;
                case "userid":
                    $key = 'id';
                    break;
            }

            foreach ( $aadmin as $ergeb ) {              // save each value in database
                $ergeb->$key = $value;                  // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
            }            
        }

        $ergeb->save();                          // save the data to database

        $messages = array(                                                    // Generate a success message
            'event'  => 'Changed PW',
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::profile@index'))->with('alert', $messages);   
          
    }


    public function get_profile(){ 

        $id = Session::get('id');                                   // fetch Session:id and 

        $userid = $id;                                               // add to userid!
        
        return View::make( 'admin::admin.profile' )               // show User Profile
            ->with( 'title', 'LimeBlack - Profile Profile' )
            ->with( 'userid', $userid )
        ;
    }


    public function post_profile(){
        
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
            // 'id' =>  'required'              // dont wanna update id!
            'name'      =>  'max:64',             // Name of User dont used only for Nice!
            'user'      =>  'required|alpha_dash',   // username is nessesary
            'password'  =>  'required',                         // Ausfall Ort                  - intern / extern
            // 'role'   => '', // will never used
            'userid'    =>  'required|numeric|max:100',                                // UserID                       - 1 // Stand for root
        );

        $v = Validator::make($creds, $rules);                       // validate the input

        if ( $v->fails() ) {                                        // if validator fails...

            // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show them
        } 

        if ( $id <= 123456 ) {                                                // notice automaticlly if you search for sn instead of id... 
            $aadmin = Admin::where('id', '=', $id)->get();                      // fetch all data for an id!      // need to fetch id's witch are wrong!    
        }

        foreach ( $creds as $key => $value ) {                      // adding data to new Admin ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "name":
                    $key = 'name';
                    break;
                case "user":
                    $key = 'username';
                    break;
                case "password":
                    $key = 'password';
                    $value = Hash::make($value);
                    break;
                case "userid":
                    $key = 'id';
                    break;
            }

            foreach ( $aadmin as $ergeb ) {              // save each value in database
                $ergeb->$key = $value;                  // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
            }            
        }

        $ergeb->save();                          // save the data to database

        // foreach ( $creds as $key => $value ) {      // adding data to new Admin ( !DataBase! )
        //     if ( isset( $value ) ) {
        //         $fields[] = $key;
        //         $values[] = $value;                
        //     }
        // }

        // $fieldstr = implode(",", $fields);          // convert array to string, to save in DB
        // $valuestr = implode(",", $values);          // convert array to string, to save in DB

        // $his->Adminid = $Admin->id;                   // get and save id of current item ( Admin! )
        // $his->action = 'insert';                    // say what we are doing!
        // $his->userid = $id;                         // save userid!
        // $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        // $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        // $his->save();                               // save all to database!

        $messages = array(                                                    // Generate a success message
            'event'  => 'Changed Profile',
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::profile@index'))->with('alert', $messages);            
    }
}
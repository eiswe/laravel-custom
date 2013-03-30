<?php
use Admin\Models\Admin;
class Admin_Movie_Controller extends Admin_Base_Controller {

/**
    Index Movie!!! 
*/
    public function get_index(){
        return Redirect::to(URL::to_action('admin::movie@list'));
    }
  
/**
    List Movie!!! 
*/    
    public function get_list(){

        $movielist = Movie::all();   // lets load all movielist exist in Database

        return View::make( 'admin::movies.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'movies', $movielist )
        ;
    }

/**
    Add Movie!!! 
*/
    public function get_add(){

        return View::make( 'admin::movies.add' )
            ->with( 'title', 'Add new Movie' )
        ;
    }

/**
    POST Add Movie!!! 
*/
    public function post_add(){

        $creds = "";                                                // clear creds

        $creds = Input::all();                                      // fetch all input, 
        Input::clear();                                             // and clear after!

        $id = Session::get('id');                                   // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'userid'  =>  $id
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                                 // Name  
            'dc'        =>  'required|max:64',                                   // Description
            'pt'        =>  'required',                                 // path      
            'rt'        =>  'numeric',                                  // rate      
            'userid'    =>  'required|numeric|max:100',                 // UserID
        );

        $v = Validator::make($creds, $rules);                       // validate the input

        if ( $v->fails() ) {                                        // if validator fails...

            // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show them
        } 

        $page = new Page();                                         // get Model page create a database insertion
        //$his = new history();                                       // if page was saved, we need to create a history entry

        foreach ( $creds as $key => $value ) {                      // rename input filds to database names ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "dc":
                    $key = 'desc';
                    break;
                case "pt":
                    $key = 'path';
                    break;
                case "rt":
                    $key = 'rate';
                    break;
              
            }

            $page->$key = $value;                   // save each key-value pair in page!
        }

        $page->save();                              // save the data to database
/*
        foreach ( $creds as $key => $value ) {      // adding data to new page ( !DataBase! )
            if ( isset( $value ) ) {
                $fields[] = $key;
                $values[] = $value;                
            }
        }

        $fieldstr = implode(",", $fields);          // convert array to string, to save in DB
        $valuestr = implode(",", $values);          // convert array to string, to save in DB

        $his->pageid = $page->id;                   // get and save id of current item ( page! )
        $his->action = 'insert';                    // say what we are doing!
        $his->userid = $id;                         // save userid!
        $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();                               // save all to database!
*/
        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));  
          
    } 

/**
    Edit Movie!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function get_edit($id){  // for fetching errors need to use routes....^^ ok NOT!

        if ( $id <= 123456 ) {                                          // notice automaticlly if you search for sn instead of id... 
            $mmovie = Movie::where('id', '=', $id)->get();
        }
 
        return View::make( 'admin::movies.edit' )
            ->with( 'title', 'Edit a Card!' )
            ->with( 'movie', $mmovie )
//            ->with('error', $messages); // only for debugging
        ;
    }



/**
    POST Edit Card!!! 
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
        $rules = array(                                                 // Name  
            'dc'        =>  'required|max:64',                                   // Description
            'pt'        =>  'required',                                 // path      
            'rt'        =>  'numeric',                                  // rate      
            'userid'    =>  'required|numeric|max:100',                 // UserID
        );

        $v = Validator::make($creds, $rules);                                 // validate the input

        if ( $v->fails() ) {                                                  // if validator fails...print some messages
            $messages = $v->errors->all('<p>:message</p>'); // get all error with all attributes
            
            return Redirect::back()                         // if fails return back to form with errors and not input! :(
                ->with('error', $messages)
                ->with_input()                              // return new input back, but cant handle with bootstrap
            ;
        } 

        if ( $id <= 123456 ) {                                          // notice automaticlly if you search for sn instead of id... 
            $mmovie = Movie::where('id', '=', $id)->get();
        }


        foreach ( $creds as $key => $value ) {                      // rename input filds to database names ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "dc":
                    $key = 'desc';
                    break;
                case "pt":
                    $key = 'path';
                    break;
                case "rt":
                    $key = 'rate';
                    break;
              
            }

           // $page->$key = $value;                   // save each key-value pair in page!
  
            foreach ( $mmovie as $ergeb ) {              // save each value in database
                $ergeb->$key = $value;                  // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
            }            
        }

        $ergeb->save();                                                       // finally save to database!
        /*
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
        */
        $messages = array(                                                    // Generate a success message
            'event'  => 'UpdateCard',
            'state'  => 'Successfully'
        );

        return Redirect::to(URL::to_action('admin::home@index'))->with('alert', $messages);  // return back to home view - looking for error message or events!
    }  
}

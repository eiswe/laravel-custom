<?php
use Admin\Models\Admin;
//use Admin\Models\Text;
class Admin_Text_Controller extends Admin_Base_Controller {

    public function get_index(){

        return Redirect::to(URL::to_action('admin::text@list'));
    }
    
    public function get_list(){

        $uid = Session::get('id');                                   // fetch Session:id and 
        
        if ( $uid == 1 ) {
            $textlist = Text::all();
        } elseif ( $uid >= 1 ) {
            $textlist = Admin::find( $uid )->text()->get();   // lets load all textlist exist in Database   
        }
        // need to fetch if list is empty!

        return View::make( 'admin::texts.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'texts', $textlist )
        ;
    }


/**
    Add Text!!! 
*/
    public function get_add(){

        // need to fetch if list is empty!

        return View::make( 'admin::texts.add' )
            ->with( 'title', 'Add new Text' )
        ;
    }

/**
    POST Add Text!!! 
*/
    public function post_add(){

        $creds = "";                                                // clear creds

        $creds = Input::all();                                      // fetch all input, 
        Input::clear();                                             // and clear after!

        $id = Session::get('id');                                   // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'admin_id'  =>  $id
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                                 // Name  
            'tx'        =>  'max:2048',                                   // Description  
            'admin_id'    =>  'required|numeric|max:100',                 // admin_id
        );

        $v = Validator::make($creds, $rules);                       // validate the input

        if ( $v->fails() ) {                                        // if validator fails...

            // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show them
        } 

        $text = new Text();                                         // get Model text create a database insertion
        //$his = new history();                                       // if text was saved, we need to create a history entry

        foreach ( $creds as $key => $value ) {                      // rename input filds to database names ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "tx":
                    $key = 'text';
                    break;
            }

            $text->$key = $value;                   // save each key-value pair in text!
        }

        $text->save();                              // save the data to database
/*
        foreach ( $creds as $key => $value ) {      // adding data to new text ( !DataBase! )
            if ( isset( $value ) ) {
                $fields[] = $key;
                $values[] = $value;                
            }
        }

        $fieldstr = implode(",", $fields);          // convert array to string, to save in DB
        $valuestr = implode(",", $values);          // convert array to string, to save in DB

        $his->textid = $text->id;                   // get and save id of current item ( text! )
        $his->action = 'insert';                    // say what we are doing!
        $his->admin_id = $id;                         // save admin_id!
        $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();                               // save all to database!
*/
        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));  
          
    } 

/**
    Edit Text!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function get_edit($id){  // for fetching errors need to use routes....^^ ok NOT!

        $uid = Session::get('id');                                   // fetch Session:id and 
        
        if ( $uid == 1 ) {
            $ttext = Text::all();
        } elseif ( $uid >= 1 ) {
            $ttext = Admin::find( $uid )->text()->where('id', '=', $id)->get();   // lets load all ttext exist in Database   
        }
 
        return View::make( 'admin::texts.edit' )
            ->with( 'title', 'Edit a Text!' )
            ->with( 'text', $ttext )
//            ->with('error', $messages); // only for debugging
        ;
    }



/**
    POST Edit Text!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function post_edit($id){

        $creds = "";                                                          // clear creds and
        $creds = Input::all();                                                // fetch all input in one time

        $uid = Session::get('id');                                            // fetch Session:id

        $creds += array(                                                      // add admin_id
            'admin_id'  =>  $uid
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                                 // Name  
            'tx'        =>  'max:2048',                                   // Description  
            'admin_id'    =>  'required|numeric|max:100',                 // admin_id
        );

        $v = Validator::make($creds, $rules);                                 // validate the input

        if ( $v->fails() ) {                                                  // if validator fails...print some messages
            $messages = $v->errors->all('<p>:message</p>'); // get all error with all attributes
            
            return Redirect::back()                         // if fails return back to form with errors and not input! :(
                ->with('error', $messages)
                ->with_input()                              // return new input back, but cant handle with bootstrap
            ;
        } 

        if ( $uid == 1 ) {
            $ttext = Text::all();
        } elseif ( $uid >= 1 ) {
            $ttext = Admin::find( $uid )->text()->where('id', '=', $id)->get();   // lets load all ttext exist in Database   
        }


        foreach ( $creds as $key => $value ) {                      // rename input filds to database names ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "tx":
                    $key = 'text';
                    break;
            }

           // $page->$key = $value;                   // save each key-value pair in page!
  
            foreach ( $ttext as $ergeb ) {              // save each value in database
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
        $his->admin_id = $uid;                                                  // save admin_id!
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
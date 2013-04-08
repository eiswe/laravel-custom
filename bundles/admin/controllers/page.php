<?php
use Admin\Models\Admin;
//use Admin\Models\Page;
//use Home\Models\Page;

class Admin_Page_Controller extends Admin_Base_Controller {

    public function get_index(){                                     // Index Page of Page^^
        return Redirect::to(URL::to_action('admin::page@list'));     // return to list view of pages!
    }
    
    public function get_list(){                                      /**    List / Index Page!!! */

        $uid = Session::get('id');                                   // fetch Session:id and 
        if ( $uid == 1 ) {                                           // if root fetch all data
            $pagelist = Page::all();
        } elseif ( $uid >= 1 ) {                                     // else only your own!
            $pagelist = Admin::find( $uid )->page()->get();          // lets load all pagelist exist in Database of user
        }

        return View::make( 'admin::pages.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'pages', $pagelist )
        ;
    }

    public function get_add(){                                      /**    Add Title of Page!!! */
        return View::make( 'admin::pages.add' )                     // No additional Infos neccessary
            ->with( 'title', 'Add new Page Title' );
    }

    public function post_add(){                                     /**    Inserted new Title and redirect to Styles */
                                                                    // Need to fetch some Infos and available styles?
        $title = Input::get('title');
        return Redirect::to('admin::page.style')  
            ->with( 'title', 'Add new Page Style' )
            ->with( 'titel', $title )
        ;

    } 

    public function get_style(){                                    /**    Add Style of Page!!! */
        return View::make( 'admin::pages.style' )                   // Need to fetch some Infos and available styles?
            ->with( 'title', 'Add new Page Style' )
            ->with( 'titel', $titel )
        ;
    }    
/**
    POST Add Page!!! 
*/
    public function post_style(){
        $creds = "";                                                // clear creds

        $creds = Input::all();     Input::clear();                  // Fetch all Input and clear after!

        $id = Session::get('id');                                   // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'admin_id'  =>  $id
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                                 // Name  
            'tt'        =>  'required|max:32',                          // Title
            'dc'        =>  'max:64',                                   // Description
            'st'        =>  'required|numeric',                         // Style      
            //'ts'        =>  'required|numeric',                       // Texts      
            //'im'        =>  'required|numeric',                       // Images     
            //'mv'        =>  'required|numeric',                       // Movies     
            'admin_id'    =>  'required|numeric|max:100',                 // admin_id
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
                case "tt":
                    $key = 'title';
                    break;
                case "dc":
                    $key = 'desc';
                    break;
                case "st":
                    $key = 'style';
                    break;
                case "ts":
                    $key = 'texts';
                    break;
                case "im":
                    $key = 'images';
                    break;
                case "mv":
                    $key = 'movies';
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
        $his->admin_id = $id;                         // save admin_id!
        $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();                               // save all to database!
*/
        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));  
          
    } 

/**
    Edit Page!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function get_edit($id){  // for fetching errors need to use routes....^^ ok NOT!

        $uid = Session::get('id');                                   // fetch Session:id and 
        
        if ( $uid == 1 ) {
            $ppage = Page::where('id', '=', $id)->get();   // lets load all pagelist exist in Database        
        } elseif ( $uid >= 1 ) {
            $ppage = Admin::find( $uid )->page()->where('id', '=', $id)->get();  // ->where('id', '=', $id)
        }
 
        return View::make( 'admin::pages.edit' )
            ->with( 'title', 'Edit a Card!' )
            ->with( 'page', $ppage )
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
            'admin_id'  =>  $uid
        );

        // define rules for input    working ( with php ) regex datum: ^\d{1,2}\.\d{1,2}\.\d{4}$
        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules = array(                                                 // Name  
            'tt'        =>  'required|max:32',                          // Title
            'dc'        =>  'max:64',                                   // Description
            'st'        =>  'required|numeric',                         // Style      
            //'ts'        =>  'required|numeric',                       // Texts      
            //'im'        =>  'required|numeric',                       // Images     
            //'mv'        =>  'required|numeric',                       // Movies     
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

        if ( $id <= 123456 ) {                                          // notice automaticlly if you search for sn instead of id... 
            $ppage = Page::where('id', '=', $id)->get();
        }


        foreach ( $creds as $key => $value ) {                      // rename input filds to database names ( !DataBase! )

            // create a relation between input field and database value ( RENAME VARS )
            switch ($key) {
                case "tt":
                    $key = 'title';
                    break;
                case "dc":
                    $key = 'desc';
                    break;
                case "st":
                    $key = 'style';
                    break;
                case "ts":
                    $key = 'texts';
                    break;
                case "im":
                    $key = 'images';
                    break;
                case "mv":
                    $key = 'movies';
                    break;                
            }

           // $page->$key = $value;                   // save each key-value pair in page!
  
            foreach ( $ppage as $ergeb ) {              // save each value in database
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
        $his->admin_id = $uid;                                                  // save userid!
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
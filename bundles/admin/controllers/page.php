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

/** Generate a list of user related content - 

    DONT NEED USER BUT TEXTS, IMAGES, MOVIES AND STYLES

  */

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
            'tt'        =>  'required|max:32',                          // Title
            'dc'        =>  'max:64',                                   // Description
            'st'        =>  'required|numeric',                         // Style      
            //'ts'        =>  'required|numeric',                       // Texts      
            //'im'        =>  'required|numeric',                       // Images     
            //'mv'        =>  'required|numeric',                       // Movies     
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


        foreach ( $creds as $key => $value ) {                      // adding data to new page ( !DataBase! )

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
        $his->userid = $id;                         // save userid!
        $his->fields = $fieldstr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->values = $valuestr;                   // converted to string, looks like: {xy,cx,vc,bv,nb,mn}
        $his->save();                               // save all to database!
*/
        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));  
          
    }    
}
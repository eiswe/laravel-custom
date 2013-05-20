<?php
use Admin\Models\Admin;

class Admin_Bone_Controller extends Admin_Base_Controller {

    public function get_index(){                                     // Index Page of Page^^
        return Redirect::to(URL::to_action('admin::bone@list'));     // return to list view of pages!
    }
    
    public function get_list(){                                      /**    List / Index Page!!! */

        $uid = Auth::user()->id;                                   // fetch Session:id and 
        if ( $uid == 1 ) {                                           // if root fetch all data
            $bbonelist = Bonelist::all();
        } elseif ( $uid >= 1 ) {                                     // else only your own!
            $bbonelist = Admin::find( $uid )->bonelist()->get();          // lets load all ppicture exist in Database of user
        }

        return View::make( 'admin::bone.list' )
            ->with( 'title',    'List of Bones - Styles' )
            ->with( 'bott',     'bone')
            ->with( 'subbott',  'list')
            ->with( 'bonelist', $bbonelist)
        ;
    }

    public function post_list(){

        $creds = "";                                               // clear creds
        $rules = array();
        $uid = Auth::user()->id;                                   // fetch uid 

        $creds = Input::all();         Input::clear();             // Fetch all Input and clear after!

        $rules += array( 'id' => 'required|numeric' );

        $v = Validator::make($creds, $rules);                       // validate the input
        if ( $v->fails() ) {                                        // if validator fails...  // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                         // and return back to form and show
        } 

        $ppicture = Admin::find( $uid )->bonelist()->where( 'id', '=', $creds['id'] )->delete();          // lets load all ppicture exist in Database of user

        $messages = array(                                                    // Generate a success message
            'event'  => 'DeleteBonelist: '.$creds['id'],
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::picture@list'))->with('alert', $messages);
    } 



/* ////////////////////////


    Not funtional !!!

*/ ///////////////////////



/** !Pink
    Edit Page!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function get_edit($id){ 

        $uid = Auth::user()->id;                                   // fetch uid 

        $bbonelist = Admin::find( $uid )->bonelist()->get();
        
        foreach ($bbonelist as $key => $value) {
            if ( $value->id = $id ) {
                $bbones = Bone::where( 'bonelist_id', '=', $id )->get();
            }
            
        }

        return View::make( 'admin::bone.edit' )
            ->with( 'title', 'Edit a Card!' )
            ->with( 'bonelist', $bbonelist )
            ->with( 'bone',     $bbones )
            ->with( 'pid'  ,    $id )
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
        $creds += array(                                                      // add admins_id
            'admins_id'  =>  $uid
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
            'admins_id'    =>  'required|numeric|max:100',                 // admins_id
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
                    $key = 'bonelist_id';
                    break;
                // case "ts":
                //     $key = 'texts';
                //     break;
                case "im":
                    $key = 'images';
                    break;
                case "mv":
                    $key = 'movies';
                    break;                
            }

           // $page->$key = $value;                   // save each key-value pair in page!
  
            foreach ( $ppage as $ergeb ) {              // unpack PPage and
                if ( $key == "ts" ) {                   // if input field name = ts
                    $ttext = Text::where( 'id', '=', $ergeb->text_id)->get(); // get text by id of current page->texts (id of text)
                    foreach ($ttext as $texxt) {        // unpack ttext
                        $texxt->text = $value;          // save user edited text to textDB
                    }
                    $texxt->save();                     // commit save for text
                    $key   = 'texts';                   // rename fieldname to texts
                    $value = $ergeb->texts;             // replace real text with id of text
                } 
                print '<br />saved: '.$key.' with this value: '.$value; // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
                $ergeb->$key = $value;                  // save all other fields to page!
            }            
        }

        $messages = array(                                                    // Generate a success message
            'event'  => 'UpdatePage',
            'state'  => 'Successfully'
        );

        return Redirect::to(URL::to_action('admin::page@list'))->with('alert', $messages);  // return back to home view - looking for error message or events!
    }      
}
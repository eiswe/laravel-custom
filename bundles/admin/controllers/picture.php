<?php
use Admin\Models\Admin;
//use Admin\Models\Page;
//use Home\Models\Page;

class Admin_Picture_Controller extends Admin_Base_Controller {

    public function get_index(){                                     // Index Page of Page^^
        return Redirect::to(URL::to_action('admin::picture@list'));     // return to list view of pages!
    }
    
    public function get_list(){                                      /**    List / Index Page!!! */

        $uid = Session::get('id');                                   // fetch Session:id and 
        if ( $uid == 1 ) {                                           // if root fetch all data
            $ppicture = Picture::all();
        } elseif ( $uid >= 1 ) {                                     // else only your own!
            $ppicture = Admin::find( $uid )->picture()->get();          // lets load all ppicture exist in Database of user
        }

        return View::make( 'admin::picture.list' )
            ->with( 'title', 'List of Admin Panel' )
            ->with( 'picture', $ppicture)
        ;
    }

    public function post_list(){

        $creds = "";                                                // clear creds
        $rules = array();

        $creds = Input::all();        Input::clear();              // Fetch all Input and clear after!

        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules += array(
            'id'    =>  'required|numeric',                 // admins_id
        );

        $v = Validator::make($creds, $rules);                       // validate the input
        if ( $v->fails() ) {                                        // if validator fails...  // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                       // and return back to form and show
        } 

        $messages = array(                                                    // Generate a success message
            'event'  => 'DeletePicture',
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::picture@list'))->with('alert', $messages);;  
          
    } 

    public function get_add(){                                      /**    Add Title of Page!!! */
        
        return View::make( 'admin::picture.add' )                     // No additional Infos neccessary
            ->with( 'title', 'Add new Page Title' )
        ;
    }
  /**

  */
    public function post_add(){

        $creds = "";                                                // clear creds
        $rules = array();

        $creds = Input::all();        Input::clear();              // Fetch all Input and clear after!
        $extension = File::extension( $creds['photo']['name']);
        
        $directory = path( 'public' ).'uploads/'.sha1( Auth::user()->id );
        $filename= sha1( Auth::user()->id.time() ).".{$extension}";
        
        $creds += array(                                            // add to creds ( creds = input vars)
            'path'       => $directory.$filename
        );

        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules += array(
            'name'    =>  'required',                 // admins_id
            'path'    =>  'required',                 // admins_id
            'size'    =>  'required',                 // admins_id
        );

        $upload_success = Input::upload( 'photo', $directory, $filename );

        $v = Validator::make($creds, $rules);                       // validate the input
        if ( $v->fails() ) {                                        // if validator fails...  // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages);                       // and return back to form and show
        } 

        $ppicture = new Picture();
        $ppicture->admin_id = Auth::user()->id;
        $ppicture->name = $creds['name'];
        if ( isset($creds['desc'])) {
            $ppicture->desc     = $creds['desc'];
        }
        $ppicture->path = URL::to('uploads/'.sha1( Auth::user()->id ).'/'.$filename);
        $ppicture->size = $creds['size'];

        $ppicture->save();

        $messages = array(                                                    // Generate a success message
            'event'  => 'AddPicture',
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::picture@list'))->with('alert', $messages);;  
          
    } 
























































/**
    Edit Page!!! 
    -> Fetch id and data for validation. Save into database!
*/
    public function get_edit($id){ 

        $uid = Session::get('id');                                   // fetch Session:id and 
        
        if ( $uid == 1 ) {
            $ppage = Page::where('id', '=', $id)->get();            // load all pagelist exist in Database        
        } elseif ( $uid >= 1 ) {
            $ppage = Admin::find( $uid )->page()->where('id', '=', $id)->get();  // ->where('id', '=', $id)
        }

        foreach ($ppage as $key => $value) {                        // fetch bbones (input fields) and ttext (text of page)
            $bbones = Bone::where( 'bonelist_id', '=', $value->bonelist_id )->get();
            $ttext  = Text::where( 'id',          '=', $value->texts )->get();
        }

        return View::make( 'admin::pages.edit' )
            ->with( 'title', 'Edit a Card!' )
            ->with( 'page', $ppage )
            ->with( 'bones', $bbones)
            ->with( 'text', $ttext)
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
                    $ttext = Text::where( 'id', '=', $ergeb->texts)->get(); // get text by id of current page->texts (id of text)
                    foreach ($ttext as $texxt) {        // unpack ttext
                        $texxt->text = $value;          // save user edited text to textDB
                    }
                    $texxt->save();                     // commit save for text
                    $key   = 'texts';                   // rename fieldname to texts
                    $value = $ergeb->texts;             // replace real text with id of text
                } 
                print '<br />saved: '.$key.' with this value: '.$value;
                $ergeb->$key = $value;              // save all other fields to page!
                                                   // print 'Speichere '.$value.' to the following Key: '.$key.'<br/>';
            }            
        }

        //$ergeb->save();                                                       // finally save to database!

        // $messages = array(                                                    // Generate a success message
        //     'event'  => 'UpdatePicture',
        //     'state'  => 'Successfully'
        // );

        // return Redirect::to(URL::to_action('admin::home@index'))->with('alert', $messages);  // return back to home view - looking for error message or events!
    }  
}
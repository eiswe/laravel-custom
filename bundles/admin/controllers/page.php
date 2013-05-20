<?php
use Admin\Models\Admin;
//use Admin\Models\Page;
//use Home\Models\Page;

class Admin_Page_Controller extends Admin_Base_Controller {

    public function get_index(){                                     // Index Page of Page^^
        return Redirect::to(URL::to_action('admin::page@list'));     // return to list view of pages!
    }
    
    public function get_list(){                                      /**    List / Index Page!!! */

        $uid = Auth::user()->id;                                     // fetch id and 
        
        if ( $uid == 1 ) {                                           // if root fetch all data
            $pagelist = Page::all();
        } elseif ( $uid >= 1 ) {                                     // else only your own!
            $pagelist = Admin::find( $uid )->page()->get();          // lets load all pagelist exist in Database of user
        }

        return View::make( 'admin::pages.list' )
            ->with( 'title',    'LimeBlack - Page List' )
            ->with( 'bott',     'page' )
            ->with( 'subbott',  'list' )
            ->with( 'pages',    $pagelist )
        ;
    }

    public function post_list(){

        $creds = "";                                                // clear creds
        $rules = array();
        $uid = Auth::user()->id;                                     // fetch uid 

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

        $ppage = Admin::find( $uid )->page()->where( 'id', '=', $creds['id'] )->delete();          // lets load all ppage exist in Database of user

        $messages = array(                                                    // Generate a success message
            'event'  => 'DeletePage: '.$creds['id'],
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::page@list'))->with('alert', $messages);
    } 
/** !Pink
            Add Page - here you get a forḿ were you can add a new site to your Project! xD
*/

    public function get_add($any){                                      /**    Add Title of Page!!! */
        
        $uid = Auth::user()->id;                                        // fetch id and 
        
        $bonelst = Admin::find( $uid )->bonelist()->get();              // lets load all bonelst exist in Database of user       

        foreach ($bonelst as $key => $value) {                          // only allow owners of bones to add them!
            if ( $value->name == $any ) {

                $boes = Bone::where( 'bonelist_id', '=', $value->id )->get();

                return View::make( 'admin::pages.add' )                 // No additional Infos neccessary
                    ->with( 'title',    'LimeBlack - Page Add' )
                    ->with( 'bott',     'page' )
                    ->with( 'subbott',  'add' )
                    ->with( 'styles',   $bonelst )
                    ->with( 'extra',    $any)
                    ->with( 'bones',    $boes)
                ;
            }
        }
    }
  
    public function post_add($any){

        $creds = "";                                                // clear creds
        $rules = array();

        $creds = Input::all();     Input::clear();                  // Fetch all Input and clear after!

        $id = Auth::user()->id;                                   // fetch Session:id and 
        $creds += array(                                            // add to creds ( creds = input vars)
            'admins_id'  =>  $id
        );

        if ( $id == 1 ) {                                           // if root fetch all data
            $bonelst = Bonelist::all();
            $bones   = Bone::all();
        } elseif ( $id >= 1 ) {                                     // else only your own!
            $bonelst = Admin::find( $id )->bonelist()->get();       // lets load all bonelst exist in Database of user
        }        

        foreach ($bonelst as $key => $value) {                       // fetch current bonelist_id
            if ( $value->name == $any ) {
                $listid = $value->id;
        }   }
                
        $boes = Bone::where( 'bonelist_id', '=', $listid )->get();  //$boes = Bonelist::find( $uid )->bone()->where( 'bonelist_id', '=', $value->id )->get();
        foreach ($boes as $bkey => $bvalue) {                       //$boes = Bone::where( 'name', '=', $any )->get();
            if ( $bvalue->bonelist_id == $listid ) {                //print_r($bvalue->dbname);  //print_r($bvalue->rules);
                $rules += array( $bvalue->dbname => $bvalue->rules, );  // fetch rules for current bone-fields
            }
        }

        // it could be so cool with aware bundle and rules for MODELS not for FORMS
        $rules += array(
            'admins_id'    =>  'required|numeric|max:100',                 // admins_id
        );

        $v = Validator::make($creds, $rules);                       // validate the input
        if ( $v->fails() ) {                                        // if validator fails...  // $v->errors->has('sn'); - will only give a true (1) if SN is wrong!
            $messages = $v->errors->all('<p>:message</p>');         // get all errors
            return Redirect::back()                                 // with custom error message
                ->with('error', $messages)                         // and return back to form and show them
                ->with('err', $creds);
        } 


        foreach ($bonelst as $key => $value) {                      // fetch current bonelist_id
            if ( $value->name == $any ) {                           // compare with current style
                switch ( $value->name ) {                           // and save each its own way
                    case "Text":
                        // Nessesary Database
                        $page = new Page();                                 // get Model page create a database insertion
                        $text = new Text();                                 // if page was saved, we need to create a history entry

                        // Whitelist for each field to save value in correct database - have to use relation field of bones to figure out with DB is used!
                        foreach ($creds as $key => $value) {
                            // print '<br />'.$key.' has value '.$value;
                            switch ( $key ) {
                                case 'title':
                                    $page->$key = $value;                   // save each key-value pair in page!
                                    $page->admin_id = $id;                  // save each key-value pair in page!
                                    $page->bonelist_id = $listid;           // save each key-value pair in page!
                                    break;
                                case 'desc':
                                    $page->$key = $value;                   // save each key-value pair in page!
                                    break;
                                case 'text':
                                    $text->admin_id = $id;                  // save each key-value pair in page!
                                    $text->$key = $value;
                                    $page->texts = true;
                                    break;
                            }
                        }
                        
                        $page->save();
                        $text->page_id = $page->id;
                        $text->save();
                        break;

                    case "Gallery":
                        echo "not implemented yet";
                        break;
                    case "Foto":
                        echo "wanna save foto? you have to code your save routine!";
                        break;
                    case "lie":
                        echo "but you gonna DIE!";
                        break;                    
                }
            }   
        }

        // print 'This is Bonelist Style: '.$listid.'<br />';
        // print '<br />';
        // print_r($boes);
        // print '<br />';
        // print_r($rules);
        // print '<br />';
        // print_r($creds);

        $messages = array(                                                    // Generate a success message
            'event'  => 'AddPage',
            'state'  => 'Successfully'
        );

        // return back to home view
        return Redirect::to(URL::to_action('admin::page@list'))->with('alert', $messages);  
          
    } 

/** !Pink
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
            $ttext  = Text::where( 'id',          '=', $value->text_id )->get();
        }

        return View::make( 'admin::pages.edit' )
            ->with( 'title', 'LimeBlack - Page Edit' )
            ->with( 'bott',     'page' )
            ->with( 'subbott',  'edit' )            
            ->with( 'page' , $ppage )
            ->with( 'bones', $bbones )
            ->with( 'text' , $ttext )
            ->with( 'pid'  , $id )
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
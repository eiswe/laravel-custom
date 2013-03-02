<?php

class Admin_Page_Controller extends Admin_Base_Controller {

    public $restful = true;

    public function __construct(){

        parent::__construct();

        Asset::container('header')->bundle('admin');
        Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');
    }

    public function get_index(){   
        // show Page Formular
        return View::make('admin::dashboard.page')->with('title', 'Create a new Card!');
    }

    public function post_index(){

        // clear creds
        $creds = "";

        // fetch all input in one time
        $creds = Input::all();

        // fetch Session:id
        $id = Session::get('id');

        // add admin_id
        $creds += array(
            'admin_id'  =>  $id
        );

        // define rules for input
        $rules = array(
            'title'         => 'required|min:3|max:32',
            'description'   => 'required',
            'text'          => 'required|min:10|max:2048',
            'admin_id'      => 'required'
        );

        // validate the input
        $v = Validator::make($creds, $rules);

        if ( $v->fails() ) {
            // if fails return back to form with errors and input
            return Redirect::back()
                ->with('error', true);
        }

        // create a database insertion
        $page = new Page();

        //$page = Page::all();

        // adding data to new form! - can change into foreach loop??? - YES!!
        $page->title = $creds['title'];
        $page->description = $creds['description'];
        $page->text = $creds['text'];
        $page->admin_id = $creds['admin_id'];

        // save the data to database
        $page->save();

        // return back to home view
        return Redirect::to(URL::to_action('admin::home@index'));
        
    }
}
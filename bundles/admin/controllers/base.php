<?php

class Admin_Base_Controller extends Controller {

    // Use Laravels restful controllers
    public $restful = true;

    public function __construct(){

        /** !Pink
         *  I really wanna replace this admin bundle shit!
         *  but now it works ... -.-  
         *  I see problems with compatibility to other bundles like aware...
         *  why he need to Redirect Admin Model (bundles/admin/models/admin.php Line:1,2) - for reach admin class! Database!
        */

        parent::__construct();

        // Imports the library and config: libraries/adminauth
        Config::set('auth.driver', 'adminauth');
        
        // Include header (css) and footer (js) files
        // Asset::container('header')->bundle('admin');
        // Asset::container('header')->add('bootstrap',    'css/bootstrap.css');               // Added custom bootstrap css, next to Bootstrapper!( Laravel-Bundle )

        Asset::container('footer')->bundle('admin');    //Asset::container('footer')->add('jquery', 'http://code.jquery.com/jquery-latest.min.js');
        Asset::container('footer')->add('jquery',       'js/jquery-latest.js');             // Added lokal jQuery
        Asset::container('footer')->add('tablesort',    'js/jquery.tablesorter.js');        // Added TableSorter for Sort Bootstrap Tables!
        Asset::container('footer')->add('charts',       'js/Chart.js');                     // Added Chart.js for generate nice Charts!
        Asset::container('footer')->add('dropzone',       'js/dropzone.js');                // Added DropZone for Drag&Drop File Upload!
        
        // Asset::container('footer')->add('bootstrapjs',          'js/bootstrap.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-affix',      'js/bootstrap-affix.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-carousel',   'js/bootstrap-carousel.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-modal',      'js/bootstrap-modal.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-tab',        'js/bootstrap-tab.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-typeahead',  'js/bootstrap-typeahead.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-alert',      'js/bootstrap-alert.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-collapse',   'js/bootstrap-collapse.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-popover',    'js/bootstrap-popover.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-tooltip',    'js/bootstrap-tooltip.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-button',     'js/bootstrap-button.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-dropdown',   'js/bootstrap-dropdown.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-scrollspy',  'js/bootstrap-scrollspy.js');                 // Added BootsrtapJS! for things like Pagination!
        // Asset::container('footer')->add('bootstrap-transition', 'js/bootstrap-transition.js');                 // Added BootsrtapJS! for things like Pagination!

        // using auth filter globally for everything in admins
        $this->filter('before', 'auth');
    }

    /*
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
     */

    // catch anything that cant match
    // wanna modify this page with page not found view of crunchbang!
    public function __call($method, $parameters){
        return Response::error('404');
    }

}
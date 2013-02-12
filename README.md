ok iam offline...
try to understand wat i have :P
dont show the view files...they are only displays we use.. (except forms ;)

need to add different users!


routes are simple by add this route.php

	// add controllers to system 
	Route::controller(Controller::detect());

	// here we send the sitename we want to the home controller with the function witch opens the site
	Route::get('login', 'home@login');
	Route::get('about', 'home@about');
	Route::get('impressum', 'home@impressum');

// now the content of home.php controller - for all public sites exept home

	// opens about site with array of menu fields
    public function action_about()
    {
        return View::make('home.about', array(
            'sidenav' => array(
                array(
                    'url' => 'home',
                    'name' => 'Home',
                    'active' => false

// now we need to fetch users witch are logged in first in route.php

	// first filter sends guests to home
	Route::filter('auth', function()
	{
		if (Auth::guest()) return Redirect::to('home');
	});

	// if user is logged in we send him to the dashboard!
	Route::filter('nonauth', function()
	{
		if (Auth::guest() == false) return Redirect::to('dashboard');
	});

// dashboard index:

	// redirects to dashboard.index with array of uploaded fotos by user sorted by desc
    public function action_index()
    {
        $photos = Auth::user()->photos()->order_by('created_at', 'desc')->order_by('id', 'desc')->get();
        return View::make('dashboard.index', array('photos' => $photos));
    }

// ok i need to find out how the log in functions - by sending this form:

	// think class is for design - send POST with action user/authenticate
	// think action is the keyword ;) - user have to be the controller  - authenticate he function
    <form class="well" method="POST" action="user/authenticate">
        <button type="submit" class="btn btn-success">Login or Register</button>
    </form>

// now the users.php controller:

	// looks like what we searching
    public function action_authenticate()
    {
    	// gets input data
        $email = Input::get('email');
        $password = Input::get('password');
        $new_user = Input::get('new_user', 'off');
        
        //... blah blah blah ... create new user if wanted ... or log in:
        // after checking requirement and form of inputdata we try to log in with Auth::attempt($inputdata) and...
        // if authentification success redirect to dashboard
        if( Auth::attempt($credentials)) {
            return Redirect::to('dashboard');
        } else {

// now the files upload!!:
// we need to find the buton xD
// its a "plugin" -> if logged in shows button:

	// if Auth::check is true the button view file was shown:
    @section('post_navigation')
    @if (Auth::check())
        @include('plugins.loggedin_postnav')
    @endif
    @yield_section

// ok here's a view file... loggegin_postnav.blade.php

    // onclick open upload modal onclick="$('#upload_modal').modal({backdrop: 'static'});" - rest is design
    // ok upload_modal has a blade file (view file) ..
	<div class="btn-group pull-right">
		<button type="button" class="btn btn-primary" onclick="$('#upload_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i> Upload Picture</button>
	</div>

// omg iam tired... here's the blade file

	// ok now i have to stop !! ... but this form sends a POST with picture and description to...
	// ...controller photo with function upload
	// button is outside the form...cause this we have to -> $('#upload_modal_form').submit()
	<form method="POST" action="{{ URL::to('photo/upload') }}" id="upload_modal_form" enctype="multipart/form-data">
	...
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
    	<button type="button" onclick="$('#upload_modal_form').submit();" class="btn btn-primary">Upload Picture</a>
	</div> 

// now photo controller - i cant read anymore xD contact lenses are dry .. -. -"

	// the function in photo.php
    public function action_upload()

    	// save file as encrypted content in public folder linked in database with user
    	$extension = File::extension($input['photo']['name']);
    	$directory = path('public').'uploads/'.sha1(Auth::user()->id);
    	$filename = sha1(Auth::user()->id.time()).".{$extension}";

// ok gn8 i go upload this file and to bed..







-> look for InstaPic Tutorial to find this Tutorial... dosnt find the link anymore... but doesnt searched xD !

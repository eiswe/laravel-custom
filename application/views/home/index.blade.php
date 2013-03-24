@layout('layouts.default')

@section('topnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        
        echo Navbar::create()
            ->with_brand( 'LimeBlack', $url.'/home' )
            ->with_menus( Navigation::links( 
                array(
                  array('Home', $url.'/home', true),
                  array('David', $url.'/david'),
                  array('Paolo', $url.'/paolo'),
                  array('Kazo', $url.'/kazo'),
                  array( 'Dropdown', '#', false, false, array(
                      array('Action', '#'),
                      array('Another action', '#'),
                      array('Something else here', '#'),
                      
                      array(Navigation::DIVIDER),
                      
                      array(Navigation::HEADER, 'Nav header'),
                      array('Separated link', '#'),
                      array('One more separated link', '#'),
                    )
                  )
                ) 
            ))
          ->with_menus( Navigation::links( array(
              array(Navigation::VERTICAL_DIVIDER),

              array('About', $url.'/about'),
              array('Login', $url.'/admin/login'),
            )),
            array('class' => 'pull-right')
          );
    ?>
@endsection

@section('content')

  <div class="span9">

    	<div class="hero-unit">
		    <h1>LimeBlack</h1>
		    <span class="text text-info">
		    	coding all for Web, Android and Robotic!</span>
		    <br /><br />
		    <p>. .. checkout my Flyduino QuadroCopter Project</p>
		    <br />
		    <p><a href="admin/list" class="btn btn-primary btn-large">
			    	To Quadro!</a></p>
			
	    </div>

	<?php

/*	$pictures = scandir('.');
	print_r($pictures);*/

    echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
    echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
    echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
    echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');


    ?>
@endsection
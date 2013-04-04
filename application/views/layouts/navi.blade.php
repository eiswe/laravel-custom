@layout('layouts.default')

@section('topnav')

  <?php 
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      
      $navlink = array(
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
              );

      // check if user is logged in!
      $id = Session::get('id');                                   // fetch Session:id and 
      print($id);

      $navlinkr = array(
            array(Navigation::VERTICAL_DIVIDER),

            array('About', $url.'/about'),
            array('Login', $url.'/admin/login'),
          );

      echo Navbar::create()
        ->with_brand( 'LimeBlack', $url.'/home' )
        ->with_menus( Navigation::links( $navlink ) )
        ->with_menus( Navigation::links( $navlinkr ),
            array('class' => 'pull-right')
        );
    ?>
@endsection
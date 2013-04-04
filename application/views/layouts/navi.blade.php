@layout('layouts.default')

@section('topnav')

  <?php 
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      



      if ( isset( $site ) ) {
          if ( $site == "home" ) {
              $navlink = array(
                  array('Home', $url.'/home', true),
                      # code...
              );    
          }          
          $navlink[] = array('David', $url.'/david'),
          $navlink[] =  array('Paolo', $url.'/paolo'),
          // $navlink[] =  array('Kazo', $url.'/kazo'),
      }




      // Login or Logout Button?

      $id = Session::get('id');                                   // fetch Session:id and 
      if ( isset( $id ) ) {
          $navlinkr = array(
            array( 'Dropdown', '#', false, false, array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                
                array(Navigation::DIVIDER),
                
                array(Navigation::HEADER, 'Nav header'),
                array('Separated link', '#'),
                array('One more separated link', '#'),
              )
            ),

            array(Navigation::VERTICAL_DIVIDER),

            array('About', $url.'/about'),
            array('Logout', $url.'/admin/login/logout'),
          );
      } else {
          $navlinkr = array(
            array( 'Dropdown', '#', false, false, array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                
                array(Navigation::DIVIDER),
                
                array(Navigation::HEADER, 'Nav header'),
                array('Separated link', '#'),
                array('One more separated link', '#'),
              )
            ),
            
            array(Navigation::VERTICAL_DIVIDER),

            array('About', $url.'/about'),
            array('Login', $url.'/admin/login'),
          );
      }



      echo Navbar::create()
        ->with_brand( 'LimeBlack', $url.'/home' )
        ->with_menus( Navigation::links( $navlink ) )
        ->with_menus( Navigation::links( $navlinkr ),
            array('class' => 'pull-right')
        );
    ?>
@endsection
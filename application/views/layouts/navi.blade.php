@layout('layouts.default')

@section('topnav')

  <?php 
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??



      if ( isset( $site ) ) {
          if ( $site == "home" ) {                                                // enable home if used
              $navlink = array( array( 'Home', $url.'/home', true ));    
          } else {
              $navlink = array( array( 'Home', $url.'/home' ));                   // disable if dont
          }

          $starredUsers = Profile::where('starred', '=', 1)->get();               // fetch starred users!
          foreach ($starredUsers as $key => $value) {
            $frontlow = strtolower($value->frontname);                            //print $value->frontname.' '.$value->backname.' are listed as starred';
            if ( $site == $frontlow ) {                                           // enable david if used
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow, true);
            } else {
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow );      // disable if dont
            }
          }
      } elseif ( isset( $id ) ) {
          $site = 'admin';
          // an logged in user could get another menu!

          $navlink = array( array( 'Home', $url.'/home' ));

          $starredUsers = Profile::where('starred', '=', 1)->get();               // fetch starred users!
          foreach ($starredUsers as $key => $value) {
            $frontlow = strtolower($value->frontname);                            //print $value->frontname.' '.$value->backname.' are listed as starred';
            if ( $site == $frontlow ) {                                           // enable david if used
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow, true);
            } else {
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow );      // disable if dont
            }
          }
      } else {
          $site = 'login';
          // an logged in user could get another menu!

          $navlink = array( array( 'Home', $url.'/home' ));

          $starredUsers = Profile::where('starred', '=', 1)->get();               // fetch starred users!
          foreach ($starredUsers as $key => $value) {
            $frontlow = strtolower($value->frontname);                            //print $value->frontname.' '.$value->backname.' are listed as starred';
            if ( $site == $frontlow ) {                                           // enable david if used
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow, true);
            } else {
                $navlink[] = array( $value->frontname, $url.'/'.$frontlow );      // disable if dont
            }
          }
      }




      // Login or Logout Button?
      if ( isset( $id ) ) {                                                       // check for logged in?
          $navlinkr = array(
            array('Admin', $url.'/admin', true),

            array(Navigation::VERTICAL_DIVIDER),

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
      } elseif ( $site == "login" ) {
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
            array('Login', $url.'/admin/login', true ),
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
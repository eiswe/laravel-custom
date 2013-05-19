@layout('admin::layouts.default')

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


      /*
          Admin Pane on right side of Top Navigation
      */

      // Login or Logout Button?
      if ( isset( $id ) ) {                                // Navi for User
          $navlinkr = array(
            //array('Admin', $url.'/admin', true),

            //array(Navigation::VERTICAL_DIVIDER),

            array( 'Admin', $url.'/admin', true, false, array(
                array('Home', $url.'/admin/home'),
                array('Play Dev', $url.'/admin/play'),
                array('Emacs Dictionary', $url.'/admin/emacs'),
                
                array(Navigation::DIVIDER),
                
                array(Navigation::HEADER, 'Profile'),
                array('Change Profile', $url.'/admin/profile/profile'),
                array('Change Password', $url.'/admin/profile/password'),

                array(Navigation::DIVIDER),

                array('Logout', $url.'/admin/login/logout'),
              )
            ),

            array(Navigation::VERTICAL_DIVIDER),

            array('About', $url.'/about'),
          );
      } elseif ( $site == "login" ) {                       // Navi for Login Page
          $navlinkr = array(
            array('About', $url.'/about'),
            array('Login', $url.'/admin/login', true ),
          );
      } else {                                              // Navi for Public User
          $navlinkr = array(

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

@section('botnav')
    <?php
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      // Login or Logout Button?
      if ( isset( $id ) ) {                                // Navi for User
        ?>
<!--         <div class="navbar navbar-fixed-bottom">
          <div class="navbar-inner">
              <div class="container-fluid">
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a href="<?=$url?>/admin/home" class="brand">Admin Home</a> 
                <div class="nav-collapse">
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                          <a href="#">More options</a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Second level link</a></li>
                            <li><a href="#">Second level link</a></li>
                            <li><a href="#">Second level link</a></li>
                            <li><a href="#">Second level link</a></li>
                            <li><a href="#">Second level link</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div> -->

<?php
        print 'logged in!';
      } else {
        print 'not logged in!';
      }
?>
@endsection
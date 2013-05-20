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
          $site = 'admin'; // an logged in user could get another menu!

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

      if ( isset( $id ) AND isset( $bott )) {                                     // Navi for User

        print '         <div class="navbar navbar-fixed-bottom">';
        print '          <div class="navbar-inner">';
        print '              <div class="container-fluid">';

        print '                <a href="'.$url.'/admin/home" class="brand">Admin Home</a> ';
        print '                <div class="nav-collapse">';
        print '                  <ul class="nav">';

        switch ( $bott ) {
          case 'emacs':
              print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
            break;
          case 'home':
              print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
            break;
          case 'play':
              print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
            break;
          
        }


        if ( isset( $subbott )) {     // mENU FOR ENTRIES WITH sUBtITLE
          switch ( $bott ) {

            case 'bone':
              print '                    <li><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
              switch ( $subbott ) {
                case 'list':
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  break;
              }   break;

            case 'page':
              print '                    <li><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
              switch ( $subbott ) {
                case 'list':
                  print '                    <li class="active">  <a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li>                 <a href="'.$url.'/admin/'.$bott.'/add/Text">Add</a></li>';
                  print '                    <li class="disabled"><a href="'.$url.'/admin/'.$bott.'/edit">Edit</a></li>';
                  break;
                case 'add':
                  print '                    <li>                 <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
                  print '                    <li class="active">  <a href="'.$url.'/admin/'.$bott.'/'.$subbott.'/Text">'.ucfirst($subbott).'</a></li>';
                  print '                    <li class="disabled"><a href="'.$url.'/admin/'.$bott.'/edit">Edit</a></li>';
                  break;
                case 'edit':
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/add/Text">Add</a></li>';
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  break;
              }   break;              

            case 'picture':
              print '                    <li><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
              switch ( $subbott ) {
                case 'list':
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/add/">Add</a></li>';
                  break;
                case 'add':
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  break;
              }   break;

            case 'profile':
              print '                    <li><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
              switch ( $subbott ) {
                case 'index':
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/password">Password</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/profile">Profile</a></li>';
                  break;
                case 'password':
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/index">Index</a></li>';
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/profile">Profile</a></li>';
                  break;
                case 'profile':
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/index">Index</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/password">Password</a></li>';
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  break;
              }   break;

            case 'text':
              print '                    <li><a href="'.$url.'/admin/'.$bott.'"><b>'.ucfirst($bott).'</b></a></li>';
              switch ( $subbott ) {
                case 'list':
                  print '                    <li class="active">  <a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li>                 <a href="'.$url.'/admin/'.$bott.'/add">Add</a></li>';
                  print '                    <li class="disabled"><a href="'.$url.'/admin/'.$bott.'/edit">Edit</a></li>';
                  break;
                case 'add':
                  print '                    <li>                 <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
                  print '                    <li class="active">  <a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  print '                    <li class="disabled"><a href="'.$url.'/admin/'.$bott.'/edit">Edit</a></li>';
                  break;
                case 'edit':
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
                  print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/add">Add</a></li>';
                  print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'/'.$subbott.'">'.ucfirst($subbott).'</a></li>';
                  break;
              }   break;                                          
          }
        }

        print '                  </ul>';
        print '                </div>';
        
        print '              </div>';
        print '          </div>';
        print '        </div>';
      }
?>
@endsection
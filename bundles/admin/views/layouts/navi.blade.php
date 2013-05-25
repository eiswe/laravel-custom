@layout('admin::layouts.default')

@section('topnav')

  <?php 
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      $site = URI::segment(1);
      //echo URI::current();

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

@section('subnav')
  <?php

      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.URI::segment(1).'/';

      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      $bott = URI::segment(2);        // 1=admin 2=page 3=attribute 4=id(onEdit)
      $subbott = URI::segment(3);

      $publicSite = array(    // Sites witch will available in Public Menu
        array( 'Home',      'home',     $surl.'home' ),
        array( 'News',      'news',     $surl.'news' ),
        array( 'Galery',    'gallery',  $surl.'gallery' ),
        array( 'Projects',  'projects', $surl.'projects/Home' ),
        array( 'All Sites', 'site',     $surl.'site/0' ),
        array( 'About',     'about',    $surl.'about' ),
      );

      $adminSite = array(    // Sites witch will available in Admin Menu
        array( 'Home',      'home',     $surl.'home' ),
        array( 'Profile',   'profile',  $surl.'profile' ),
        array( 'Page',      'page',     $surl.'page' ),
        array( 'Text',      'text',     $surl.'text' ),
        array( 'Bones',     'bone',     $surl.'bone' ),
        array( 'Pictures',  'picture',  $surl.'picture' ),
      );

      /* 
       * Build SubNavi located at left site of Page!
       * - will take publicSite from var and build Navi 
       */
      if ( URI::segment(1) == "home" OR URI::segment(1) == "about" OR URI::segment(2) == "login" ) {
        
        // If Home or About Page - only show blank space!

        print '<div class="span2"> <ul class="nav nav-pills nav-stacked"> </div>';  

      } elseif ( URI::segment(1) != "admin" ) {                                 // check for non admin

        // Header of Navi:
        print '<div class="span2">';     // BUild subnavi for non admin users! (public users)
        print '<div class="well" style="padding: 8px 0;">'; //width:300px; 
        print '<div style="overflow-x: hidden;">';
        print '<ul class="nav nav-list">';
//        print '<li><label class="nav-header">Menu</label>';

        foreach ($publicSite as $key) {
          if ( $key[1] == URI::segment(2) ) {
            print '<li class="active">  <a href="'.$key[2].'">'.$key[0].'</a></li>'; 
            
            switch ( $key[1] ) { // make spezific thinks only for activated page
              
              case 'projects':
                if (  isset( $projects )) {
                  print '<ul class="nav nav-list tree">';
                  foreach ($projects as $key => $value) {                       // generate list of stylenames and create menu entrys
                    print '<li><a href="'.$url.'/'.URI::segment(1).'/projects/'.$value->id.'">'.$value->title.'</a></li>';
                  }
                  print '</ul>';
                } 
                break;
              
              case 'site':
                if (  isset( $pages )) {
                  print '<ul class="nav nav-list tree">';
                  foreach ($pages as $key => $value) {                       // generate list of stylenames and create menu entrys
                    print '<li><a href="'.$url.'/'.URI::segment(1).'/site/'.$value->id.'">'.$value->title.'</a></li>';
                  }
                  print '</ul>';
                } 
                break;

            }
          } else {
            print '<li>                 <a href="'.$key[2].'">'.$key[0].'</a></li>'; 
          }
        }

        // Close Navi except one div
        print '</ul>';
        print '</div>';
        print '</div>';
        print '</div>';

      } elseif ( URI::segment(1) == "admin" ) {

        // Header of Navi:
        print '<div class="span2">';     // BUild subnavi for non admin users! (public users)
        print '<div class="well" style="padding: 8px 0;">'; //width:300px; 
        print '<div style="overflow-x: hidden;">';
        print '<ul class="nav nav-list">';

        foreach ($adminSite as $key) {
          if ( $key[1] == URI::segment(2) ) {
            print '<li class="active">  <a href="'.$key[2].'">'.$key[0].'</a></li>'; 
            
            switch ( $key[1] ) { // make spezific thinks only for activated page
              
              case 'projects':
                if (  isset( $projects )) {
                  print '<ul class="nav nav-list tree">';
                  foreach ($projects as $key => $value) {                       // generate list of stylenames and create menu entrys
                    print '<li><a href="'.$url.'/'.URI::segment(1).'/projects/'.$value->id.'">'.$value->title.'</a></li>';
                  }
                  print '</ul>';
                } 
                break;
              
              case 'site':
                if (  isset( $pages )) {
                  print '<ul class="nav nav-list tree">';
                  foreach ($pages as $key => $value) {                       // generate list of stylenames and create menu entrys
                    print '<li><a href="'.$url.'/'.URI::segment(1).'/site/'.$value->id.'">'.$value->title.'</a></li>';
                  }
                  print '</ul>';
                } 
                break;

            }
          } else {
            print '<li>                 <a href="'.$key[2].'">'.$key[0].'</a></li>'; 
          }
        }

                // Close Navi except one div
        print '</ul>';
        print '</div>';
        print '</div>';
        print '</div>';

      }

  ?>  
@endsection


@section('botnav')
    <?php
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      $bott = URI::segment(2);        // 1=admin 2=page 3=attribute 4=id(onEdit)
      $subbott = URI::segment(3);
      //echo URI::current();


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
        print '                  <ul class="nav pull-right">';
        print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
        print '                    <li>               <a href="'.$url.'/admin/'.$bott.'/add/Text">Add</a></li>';
        print '                    <li class="active"><a href="'.$url.'/admin/'.$bott.'">Blah</a></li>';
        print '                    <li class="dropdown">';
        print '                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>';
        print '                      <ul class="dropdown-menu">';
        print '                        <li class="dropdown-submenu">';
        print '                          <a href="#">More options</a>';
        print '                          <ul class="dropdown-menu">';
        print '                            <li>               <a href="'.$url.'/admin/'.$bott.'/list">List</a></li>';
        print '                            <li>               <a href="'.$url.'/admin/'.$bott.'/add/Text">Add</a></li>';
        print '                            <li class="active"><a href="'.$url.'/admin/'.$bott.'">Blah</a></li>';
        print '                          </ul>';
        print '                        </li>';
        print '                        <li><a href="#">Another action</a></li>';
        print '                        <li><a href="#">Something else here</a></li>';
        print '                        <li class="divider"></li>';
        print '                        <li class="nav-header">Nav header</li>';
        print '                        <li><a href="#">Separated link</a></li>';
        print '                        <li><a href="#">One more separated link</a></li>';
        print '                      </ul>';
        print '                    </li>';
        print '                  </ul>';
        print '                </div>';
        print '              </div>';
        print '          </div>';
        print '        </div>';
      }
?>
@endsection

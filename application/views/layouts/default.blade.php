<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ Asset::container('bootstrapper')->styles(); }}
  </head>
  <body>
      @yield('topnav')
      <div class="container-fluid">
          <div class="row-fluid">

        <!-- Small Span for SubNavigation -->
              <div class="span2">

                  <ul class="nav nav-pills nav-stacked">                <!-- Navi Element -->
                      @yield('subnav')
                  </ul>
              </div>        

                  <!--Body content-->
                  <!--       NEVER FORGET TO OPEN ->   <div class="span11">  
                            But dont need to close!!!!!
                -->
                  @yield('content')
                  <div class="row">
                    <?php

                      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??
                      if ( isset( $id ) ) {                                                       // if true -> show userid!
                        echo Typography::lead('Your UserID is: '.$id , 'i');
                      }

                    ?>
                  </div>
              </div>
          </div>
      </div>
      {{ Asset::container('bootstrapper')->scripts(); }}
      @yield('script')
  </body>
</html>
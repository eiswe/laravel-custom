<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ Asset::container('bootstrapper')->styles(); }}
  </head>
  <body>
      
    <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      
      echo Navbar::create()
          ->with_brand( 'LimeBlack', $url.'/home' )
          ->with_menus( ?> @yield('topnav') <?php )
        ->with_menus( Navigation::links( array(
            array(Navigation::VERTICAL_DIVIDER),

            array('About', $url.'/about'),
            array('Login', $url.'/admin/login'),
          )),
          array('class' => 'pull-right')
        );
      ?>
      <div class="container-fluid">
  <!-- First Row - For Title and leading text..        
          <div class="row">
              <div class="span12"> 
                  <h1>LimeBlack
                  <?php
                    echo Typography::lead('coding all for Web, Android and Robotic!', 'i');
                  ?></h1>
              </div>
          </div>  --> 

  <!-- Second Row - For Navi and Content -->
          <div class="row-fluid">

        <!-- Small Span for Navigation -->
              <div class="span1">

                  <ul class="nav nav-pills nav-stacked">                <!-- Navi Element -->
                      @yield('subnav')
                  </ul>
              </div>






                  <!--Body content-->
                  <!--       NEVER FORGET TO OPEN ->   <div class="span11">  
                            But dont need to close!!!!!
                -->
                  @yield('content')
              </div>

          </div>
      </div>
      {{ Asset::container('bootstrapper')->scripts(); }}
      @yield('script')
  </body>
</html>
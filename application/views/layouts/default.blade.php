<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <!-- {{ Asset::container('bootstrapper')->styles(); }} -->
  </head>
  <body>
      @yield('topnav')
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
  <!-- {{ Asset::container('footer')->scripts() }} -->
  @yield('script')
  </body>
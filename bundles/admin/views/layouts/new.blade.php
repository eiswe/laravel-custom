<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ Asset::container('header')->styles() }}
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="span12">
                  <br />
                    <h1>&nbsp;DVS&nbsp;<small> a Rohde und Schwarz Company</small></h1> <!--<h1> {{ $title }}</h1> -->
              </div>
          </div>
          <div class="row-fluid">
              <div class="span1">
                  <!--Sidebar content-->
                  <ul class="nav nav-pills nav-stacked">
                    @section('navigation')
                        <li class="nav-header">Navigation</li>
                        <?php 
                            $url = URL::base(); //return http://laravel.dev
                            print '<li> <a href="'.$url.'/admin/login/logout">  Logout      </a></li>';
                            print '<li> <a href="'.$url.'/admin/export">        Export List </a></li>';
                        ?>                      
                    @yield_section
                  </ul>
              </div>
              
              <!--Body content-->
              <!--       NEVER FORGET TO OPEN ->   <div class="span11">   -->
              @yield('content')
                  
              </div>
          </div>
      </div> 
  </body>
  {{ Asset::container('footer')->scripts() }}
  @yield('script')
</html>


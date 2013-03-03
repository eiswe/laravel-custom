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
                    <h1>Custom{{ $title }}</h1>  
                  <br /><br />
              </div>
          </div>
          <div class="row-fluid">
              <div class="span1">
                  <!--Sidebar content-->
                  <ul class="nav nav-pills nav-stacked">
                    @section('navigation')
                        <li class="nav-header">Navigation</li>
                        <li><a href="login/logout"> Logout    </a></li>
                    @yield_section
                  </ul>
              </div>

                  <!--Body content-->
                  <!--       NEVER FORGET TO OPEN ->   <div class="span11">  
                            But dont need to close!!!!!
                -->
                  @yield('content')

          <!--
                  <hr />
                  <br />
                  <h2>You using: Admins Bundle</h2>
                  &nbsp;<div class="alert alert-warning">You are: {{ print Session::get( 'name', function() { return 'guest'; } ); }} </div>&nbsp;&nbsp;
          -->
                  <div class="alert alert-warning">You are: {{ Session::get( 'id', function() { return 'guest'; } ); }} </div>
              </div>
          </div>
      </div>
  {{ Asset::container('footer')->scripts() }}
  </body>
</html>
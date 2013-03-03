<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ Asset::container('bootstrapper')->styles(); }}
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="span12">
                  <br />
                    <h1>{{ $title }}</h1>  
                  <br /><br />
              </div>
          </div>
          <div class="row-fluid">
              <div class="span1">
                  <!--Sidebar content-->
                  <ul class="nav nav-pills nav-stacked">
                    @section('navigation')
                        <li class="nav-header"> Navigation</li>
                        <li><a href="admin/login">    Login    </a></li>
                    @yield_section
                  </ul>
              </div>
              <div class="span11">  

                  @yield('content')


                  <hr />
                  <br />
                  <div class="alert alert-warning">You are: {{ Session::get( 'id', function() { return 'guest'; } ); }} </div>
              </div>
          </div>
      </div>
  {{ Asset::container('bootstrapper')->scripts(); }}
  </body>
</html>
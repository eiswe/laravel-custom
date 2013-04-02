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
      @yield('topnav')
      <div class="container-fluid">
          <div class="row">
              <div class="span12">
                  <br />
                    <h1>&nbsp;Admin Panel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small> of LimeBlack!</small></h1> <!--<h1> {{ $title }}</h1> -->
              </div>
          </div>
          <div class="row-fluid">
              <div class="span2">
                  <!--Sidebar content-->
                  <ul class="nav nav-pills nav-stacked">
                    @yield('subnav')
                  </ul>
              </div>
              
              <!--Body content-->
              <!--       NEVER FORGET TO OPEN ->   <div class="span11">   -->
              @yield('content')
                  
              </div>
          </div>
      </div> 
    {{ Asset::container('footer')->scripts() }}
    @yield('script')
    <script type="text/javascript">
      $(document).ready(function(){
        $('.dropdown-toggle').dropdown();
      }); 
    </script>
  </body>
</html>


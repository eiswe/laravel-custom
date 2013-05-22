<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    {{ Asset::container('bootstrapper')->styles(); }}
    @yield('style')
  </head>
  <body>
      @yield('topnav')
      <div class="container-fluid">
          <div class="row-fluid">

        <!-- Small Span for SubNavigation -->
                      @yield('subnav')
                  </ul>
              </div>        

                  <!--Body content-->
                  <!--       NEVER FORGET TO OPEN ->   <div class="span11">  
                            But dont need to close!!!!!
                -->
                  @yield('content')
              </div>

              <!-- SubNav on Bottom of Page - only for Admin!   - each site needs to define extra rules, else not shown..-->  
              @yield('botnav')

          </div>
      </div>
      {{ Asset::container('bootstrapper')->scripts(); }}
      @yield('script')
  </body>
</html>
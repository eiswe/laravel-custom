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

            @yield('subnav')      

            @yield('content') <!-- // Needs to close! -->
              </div>

            @yield('botnav') <!-- SubNav on Bottom of Page - only for Admin!   - each site needs to define extra rules, else not shown..-->  

          </div>


          <div class="row-fluid"> 
              <br />
              <br />
          </div>

          <!-- <div class="row-fluid">
            <div class="span12 text-center">

              <div class="span2" style="width: 15%;">
                <ul class="unstyled">
                  <li>GitHub<li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact & support</a></li>
                  <li><a href="#">Enterprise</a></li>
                  <li><a href="#">Site status</a></li>
                </ul>
              </div>

              <div class="span2" style="width: 15%;">
                <ul class="unstyled">
                  <li>Applications<li>
                  <li><a href="#">Product for Mac</a></li>
                  <li><a href="#">Product for Windows</a></li>
                  <li><a href="#">Product for Eclipse</a></li>
                  <li><a href="#">Product mobile apps</a></li>  
                </ul>
              </div>

              <div class="span2" style="width: 15%;">
                <ul class="unstyled">
                  <li>Services<li>
                  <li><a href="#">Web analytics</a></li>
                  <li><a href="#">Presentations</a></li>
                  <li><a href="#">Code snippets</a></li>
                  <li><a href="#">Job board</a></li>  
                </ul>
              </div>

              <div class="span2" style="width: 15%;">
                <ul class="unstyled">
                  <li>Documentation<li>
                  <li><a href="#">Product Help</a></li>
                  <li><a href="#">Developer API</a></li>
                  <li><a href="#">Product Markdown</a></li>
                  <li><a href="#">Product Pages</a></li>  
                </ul>
              </div>  

              <div class="span2" style="width: 15%;">
                <ul class="unstyled">
                  <li>More<li>
                  <li><a href="#">Training</a></li>
                  <li><a href="#">Students & teachers</a></li>
                  <li><a href="#">The Shop</a></li>
                  <li><a href="#">Plans & pricing</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div> 

          </div>
      </div> -->
      <hr />

      <div class="row-fluid">
        <div class="span12">

          <div class="span8">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy</a>
            <a href="#">Security</a>
          </div>

          <div class="span4">
            <p class="muted pull-right">© 2013 LimeBlack by PoisonNet. All rights reserved</p>
          </div>
      </div> </div>

  </div>
      {{ Asset::container('bootstrapper')->scripts(); }}
      @yield('script')
  </body>
</html>
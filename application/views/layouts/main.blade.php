<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LimeBlack</title>
        {{ Asset::styles() }}
        {{ Asset::scripts() }}
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="home">LimeBlack</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            @section('navigation')

                            @yield_section
                        </ul>
                    </div><!--/.nav-collapse -->
                    @section('post_navigation')
                    @if (Auth::check())
                        @include('plugins.loggedin_postnav')
                    @endif
                    @yield_section
                </div>
            </div>
        </div>

        <div class="container">
            <div class="alert alert-info">
                <h4 class="alert-heading">Awww!</h4>
                <p>This site is still under constuction!</a></p>
            </div>
            @include('plugins.status')
            @yield('content')
            <hr>
            <footer>
            <p>&copy; LimeBlack 2013 with Laravel PHP Framework</p>    
            </footer>
        </div> <!-- /container -->

        @section('form_modals')
        @if (Auth::check())
            @include('plugins.upload_modal')
        @endif
        @yield_section
    </body>
</html>
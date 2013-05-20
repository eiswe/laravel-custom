@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base();
        print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';      
    ?>
@endsection

@section('content')
  <div class="span9">
        @if(Session::get('alert'))
            <?php 
                // Fetch alert
                $alert = Session::get('alert'); 
                // Print Alert message
                print '<div class="alert alert-success">The '.$alert['event'].' was '.$alert['state'].'</div>';
            ?>
        @endif
        <div class="hero-unit">
            <h1>LimeBlack</h1>
            <span class="text text-info">
              &nbsp;&nbsp;&nbsp;coding all for Web, Android and Robotic!</span>
            <br /><br />
            <p>Checkout Davids news!</p>
            <br />
                <?php 
                    $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
                    print '<p><a href="'.$url.'/david/news" class="btn btn-primary btn-large">To News!</a></p>';
                
                /*	$pictures = scandir('.'); print_r($pictures);*/

                    print '<br /><br /><br />';
                    echo Typography::error('Dj Kazek - big Beat Producer!');
                    echo Typography::warning('Paolo will show Mini Bartagam`s!');
                    echo Typography::info('David let`s QuadroCopter`s rock`s on Laravel Web Project`s! xD');

                ?>
        </div>
@endsection
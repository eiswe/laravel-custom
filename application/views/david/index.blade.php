@layout('layouts.default')

@section('topnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        
        echo Navbar::create()
            ->with_brand( 'LimeBlack', $url.'/home' )
            ->with_menus( Navigation::links( 
                array(
                  array('Home', $url.'/home'),
                  array('David', $url.'/david', true),
                  array('Paolo', $url.'/paolo'),
                  array('Kazo', $url.'/kazo'),
                  array( 'Dropdown', '#', false, false, array(
                      array('Action', '#'),
                      array('Another action', '#'),
                      array('Something else here', '#'),
                      
                      array(Navigation::DIVIDER),
                      
                      array(Navigation::HEADER, 'Nav header'),
                      array('Separated link', '#'),
                      array('One more separated link', '#'),
                    )
                  )
                ) 
            ))
          ->with_menus( Navigation::links( array(
              array(Navigation::VERTICAL_DIVIDER),

              array('Login', $url.'/admin/login'),
            )),
            array('class' => 'pull-right')
          );
    ?>
@endsection

@section('subnav')
  <?php
      $surl = $url.'/david/';
      print '<li class="active">  <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'about"> About      </a></li>'; 
      print '<li>                 <a href="'.$url.'/galery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

      <div class="hero-unit">
        <h1>David Crimi</h1>
        <span class="text text-info">
          &nbsp;&nbsp;&nbsp;coding all for Web, Android and Robotic!</span>
        <br /><br />
        <p>. .. checkout my Flyduino QuadroCopter Project</p>
        <br />
        <p><a href="admin/list" class="btn btn-primary btn-large">
            To Quadro!</a></p>
      
      </div>


@endsection                    
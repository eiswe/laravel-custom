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
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li class="active">  <a href="'.$surl.'about"> About      </a></li>'; 
      print '<li>                 <a href="'.$url.'/galery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

    <h2>This Project was written with Laravel</h2>
    <p>
      I made it for the DVS a Rohde & Schwarz Company, <br /> 
      to follow defective boards on the way throught the Repair!
    </p>

    <p> Install the DVS RepStat Bundle:</p>
    
    <small>Install Migrations - add Database</small>
    <pre>
      <br />  php artisan migrate:install
      <br />  php artisan session:table    - Need to do this after each JS change! JS sucks..
      <br />  php artisan migrate:rebuild
    </pre>
    
    <hr />
    
    <p>Add Table to Admin Bundle</p>
    <pre>
      <br />  php artisan migrate::make admin::create_admins_table
    </pre>




@endsection                    
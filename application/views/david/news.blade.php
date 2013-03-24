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
      print '<li class="active">  <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'about"> About      </a></li>';       
      print '<li>                 <a href="'.$url.'/galery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

<?php


    foreach ($news as $key => $value) {
      # code...
      print '<br />';
      print_r($key);
      print_r($value);
      //print 'from news -> keys: '.$key.' and no value: '; //.$value;
      print '<br />';      
    }


    echo Typography::horizontal_dl(
        array(
          'Description lists' => 'A description list is perfect for defining terms.',
          'Euismod'           => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.',
          'Malesuada porta'   => 'Etiam porta sem malesuada magna mollis euismod.',
        )
    );


?>

@endsection                    
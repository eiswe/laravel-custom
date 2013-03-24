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

<!-- Begin row 1 -->    
    <div class="row">
      <div class="span3"><h1></h1>
      </div>
      <div class="span6"><h1>David Crimi</h1>
      </div>
    </div>
<!-- End row 2 -->        

<!-- Begin row 1 -->    
    <div class="row">
      <div class="span1"></div>
      <div class="span3">
          <br />
          <?php
            echo MediaObject::create('Born: 1992', 'http://placehold.it/64x64')
            ->with_title('<h4 class="media-heading">LimeBlack</h4>');
          ?>

      </div>
      <div class="span3">
      </div>
      <div class="span5">
          <br />

        <?php
          echo Typography::horizontal_dl( array(
            'Design'                  => 'Gimp / Photoshop',
            'Web - Development'       => 'HTML / CSS / PHP5 / JS / jQuery',
            'CMS / MVC - Development' => 'Drupal / Laravel',
            'Code Development'        => 'Python / BASH',            
          )
          );
        ?>
      </div>
    </div>
<!-- End row 1 -->        

    <div class="row">
      <br />
    </div>    

    <div class="row">
      <br />
    </div>   

<!-- Begin row 3 -->    
    <div class="row">
      <div class="span3">

      </div>
      <div class="span3"><h1></h1>
      </div>
      <div class="span3"><h1></h1>
      </div>
    </div>
<!-- End row 3 -->       

@endsection                    
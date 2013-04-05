@layout('layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li class="active">  <a href="'.$surl.'about"> About      </a></li>';       
      print '<li>                 <a href="'.$surl.'gallery"> Galery      </a></li>';      
  ?>  
@endsection


@section('content')

  <div class="span9">

<!-- Begin row 1 -->    
    <div class="row">
      <div class="span3"><h1></h1>
      </div>
      <div class="span6"><h1>{{ $site }}</h1>
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
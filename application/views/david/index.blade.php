@layout('layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/david/';
      print '<li class="active">  <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
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
        <?php
        echo '<p><a href="'.$url.'/admin" class="btn btn-primary btn-large">To Admin!</a></p>';
        ?>
      </div>


@endsection                    
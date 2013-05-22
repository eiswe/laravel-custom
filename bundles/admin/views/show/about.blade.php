@layout('admin::layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.URI::segment(1).'/';
      print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
      print '<li>                 <a href="'.$surl.'home">          Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">          News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'gallery">       Galery      </a></li>';  
      print '<li>                 <a href="'.$surl.'projects/Home"> Projects      </a></li>';           
      print '<li>                 <a href="'.$surl.'site/0">        All Sites      </a></li>';           
      print '<hr />';
      print '<li class="active">  <a href="'.$surl.'about">         About      </a></li>';       
  ?>  
@endsection


@section('content')

  <div class="span9">

<!-- Begin hero-unit -->    
    <div class="hero-unit">
      <?php 
        if ( isset($profile) ) {
          foreach ($profile as $key => $value) {}
        }
      ?>
      

<!-- Begin row 1 -->    
    <div class="row">
      <div class="span1"></div>
      <div class="span3">
          <br />
          <?php
            echo MediaObject::create('Born: 1992', 'http://placehold.it/64x64')
            ->with_title('<h4 class="media-heading">'.$site.'</h4>');
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
        <?php
          echo Typography::horizontal_dl( array(
            'Straße'    => $value->strasse,
            'PLZ'       => $value->plz,
            'Ort'       => $value->ort,
            'Land'      => $value->land,            
            'Sprache'   => $value->sprache,            
          ));
        ?>
      </div>
      <div class="span3">
        <?php
          echo Typography::horizontal_dl( array(
            'Handy'     => $value->handy,
            'Haus'      => $value->tel,
            'ICQ'       => $value->icq,
          ));
        ?>        
      </div>
      <div class="span5">
        <?php
          echo Typography::horizontal_dl( array(
            'Firma'         => $value->firma,
            'Job'           => $value->job,
            'eMail'         => $value->email,            
            'last Project'  => $value->project,
          ));
        ?>            
      </div>
    </div>
<!-- End row 3 -->       

    </div>
<!-- End hero-unit -->  
@endsection                    
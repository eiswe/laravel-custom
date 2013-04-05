@layout('layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li class="active">  <a href="'.$surl.'about"> About      </a></li>';       
      print '<li>                 <a href="'.$url.'/galery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

<?php
    echo Carousel::create(array(
    array(
    'image'=>'img/bootstrap-mdo-sfmoma-01.jpg',
    'label'=>'First Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
    at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    array(
    'image'=>'img/bootstrap-mdo-sfmoma-02.jpg',
    'label'=>'Second Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    array(
    'image'=>'img/bootstrap-mdo-sfmoma-03.jpg',
    'label'=>'Third Thumbnail label',
    'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
    gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    ));



?>
@endsection

<!--

<h1>Fotos von meinen ersten Erfahrungen mit Tinkerforge!</h1>
<p>Hier habe ich die ersten kleinen Schaltungen zusammengesteckt!<br/>
Sofort wollte ich einen QuadroCopter bauen!<br/>
Musste mich aber zuerst mit diesem 2Wheel Vehicle zufriedenstellen...<br/>
<br/>
...hab aber schon die Einkaufsliste für meinen Quadro =]</p>

<?php

    $allepictures = scandir('content/2WheelTinker/images'); //Ordner "files" auslesen
    foreach ( $allepictures as $pictures ) { // Ausgabeschleife
        if ( $pictures != "." and $pictures != ".." ) {
            /** Hier wird für jeden Content Odner ein Menu Button erstellt! */
            ?>
                <img src="content/2WheelTinker/images/<?php echo $pictures;?>" width="150px" />
            <?php
        }
    };
?>
-->
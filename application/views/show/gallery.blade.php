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

	print_r($pictures);

    echo Carousel::create(array(
	    array(
		    'image'		=>'http://placehold.it/850x300',
		    'label'		=>'First Thumbnail label',
		    'caption'	=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	    ),
	    array(
		    'image'		=>'http://placehold.it/850x300',
		    'label'		=>'Second Thumbnail label',
		    'caption'	=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	    ),
	    array(
		    'image'		=>'http://placehold.it/850x300',
		    'label'		=>'Third Thumbnail label',
		    'caption'	=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	    ),
    ));



?>
@endsection
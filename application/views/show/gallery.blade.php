@layout('layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li>  				  <a href="'.$surl.'about"> About      </a></li>';       
      print '<li class="active">  <a href="'.$surl.'gallery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

<?php

	if ( isset( $pictures ) ) {

		foreach ($pictures as $key) {
			if ( $key->size == "big" ) {						// if size big create list of caroussel items
				$bpiclist[] = array(
				    'image'		=> $key->path,
				    'label'		=> 'First Thumbnail label',
				    'caption'	=> $key->desc,
				);

			} elseif ( $key->size == "small" ) {				// else size small create list of preview items items
				$spiclist[] = array(
				    'image'		=> $key->path,
				    'label'		=> 'First Thumbnail label',
				    'caption'	=> $key->desc,
				);				
			}
		}
    	echo Carousel::create( $bpiclist );
    	
    	echo MediaObject::open_list();
    	foreach ($spiclist as $key) {
		    echo MediaObject::create( $key->caption, $key->image )->with_h4( $key->label );
    	}
    	echo MediaObject::close_list();

	} else {
		print '<h1>No Pictures found...</h1>';
	}

?>
@endsection
@layout('admin::layouts.navi')

@section('content')

  <div class="span9">

<?php

	if ( isset( $pictures ) ) {

		foreach ($pictures as $key) {
			if ( $key->size == "big" ) {						// if size big create list of caroussel items
				$bpiclist[] = array(
				    'image'		=> $key->path,
				    'label'		=> $key->name,
				    'caption'	=> $key->desc,
				);

			}
		}
    	echo Carousel::create( $bpiclist );
    	

    	echo MediaObject::open_list();
    	foreach ($pictures as $key) {
			if ( $key->size == "small" ) {				// else size small create list of preview items items
		    	echo MediaObject::create( $key->desc, $key->path )->with_h4( $key->name );
			}
		}
    	echo MediaObject::close_list();


	} else {
		print '<h1>No Pictures found...</h1>';
	}

?>
@endsection
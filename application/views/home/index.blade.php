@layout('layouts.default')

@section('navigation')
	@parent
	<?php
	    $url = URL::base(); //return http://laravel.dev 
	    print '<li class="active">  <a href="'.$url.'/home"> Home      </a></li>'; 
	    print '<li>					<a href="'.$url.'/about"> About      </a></li>'; 
	    print '<li>         		<a href="'.$url.'/galery"> Galery      </a></li>'; 	    
	?>  
@endsection


@section('content')

  <div class="span9">

    	<div class="hero-unit">
		    <h1>LimeBlack</h1>
		    <span class="text text-info">
		    	coding all for Web, Android and Robotic!</span>
		    <br /><br />
		    <p>. .. checkout my Flyduino QuadroCopter Project</p>
		    <br />
		    <p><a href="admin/list" class="btn btn-primary btn-large">
			    	To Quadro!</a></p>
			
	    </div>

	<?php

	$pictures = scandir('.');
	print_r($pictures);

    echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
    echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
    echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
    echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');


    ?>
@endsection
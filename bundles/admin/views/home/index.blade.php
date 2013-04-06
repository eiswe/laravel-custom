@layout('admin::layouts.navi')

@section('content')

  <div class="span9">

    	<div class="hero-unit">

        <h1>LimeBlack</h1>
        <span class="text text-info">
          &nbsp;&nbsp;&nbsp;coding all for Web, Android and Robotic!</span>
        <br /><br />
        <p>Checkout Davids news!</p>
        <br />
            <?php 
                $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
                print '<p><a href="'.$url.'/david/news" class="btn btn-primary btn-large">To News!</a></p>';
            ?>   
	    </div>

	<?php

/*	$pictures = scandir('.');
	print_r($pictures);*/

    echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
    echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
    echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
    echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');


    ?>
@endsection
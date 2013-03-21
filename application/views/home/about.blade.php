@layout('layouts.default')

@section('navigation')
	@parent
	<?php
	    $url = URL::base(); //return http://laravel.dev 
	    print '<li>         		<a href="'.$url.'/home"> Home      </a></li>'; 
	    print '<li class="active">	<a href="'.$url.'/about"> About      </a></li>'; 
	    print '<li>         		<a href="'.$url.'/galery"> Galery      </a></li>'; 	    
	?>  
@endsection

@section('content')

  <div class="span9">

		<h2>This Project was written with Laravel</h2>
		<p>
			I made it for the DVS a Rohde & Schwarz Company, <br />	
			to follow defective boards on the way throught the Repair!
		</p>

		<p>	Install the DVS RepStat Bundle:</p>
		
		<small>Install Migrations - add Database</small>
		<pre>
			<br />	php artisan migrate:install
			<br />	php artisan session:table    - Need to do this after each JS change! JS sucks..
			<br />	php artisan migrate:rebuild
		</pre>
		
		<hr />
		
		<p>Add Table to Admin Bundle</p>
		<pre>
			<br />  php artisan migrate::make admin::create_admins_table
		</pre>




@endsection
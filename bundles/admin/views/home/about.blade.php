@layout('admin::layouts.navi')

@section('content')

  <div class="span9">

		<h2>Why this Project comes alive...</h2>
		<p>
			I made it to learn howto handle MVCs and Frameswork, <br />	
			in this Project you will find an dynamicly generated MVC-CMS! <br />
			Nearly everything you see will be generated by the Laravel - "System" <br />
			with data from a Database. <br />
			<br />
			Now I wanna add: <br />
			- Media Support <br />
			- PIM Application. <br />
			- a lot bugfixes <br />
			- and a lot more...
		</p>

@endsection

<!-- #

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


-->
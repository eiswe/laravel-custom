@layout('layouts.default')

@section('content')

	<div class="home">
		<h2>This Project was written with Laravel</h2>
		<p>
			I made it for the DVS a Rohde & Schwarz Company, <br />	
			to follow defective boards on the way throught the Repair!
		</p>

		<p>	Install the DVS RepStat Bundle:</p>
		
		<small>Install Migrations - add Database</small>
		<pre>
			<br />	php artisan migrate:install
			<br />	php artisan session:install
			<br />	php artisan migrate:rebuild
		</pre>
		
		<hr />
		
		<p>Add Table to Admin Bundle</p>
		<pre>
			<br />  php artisan migrate::make admin::create_admins_table
		</pre>


	</div>

@endsection
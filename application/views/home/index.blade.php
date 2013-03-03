@layout('layouts.default')

@section('navigation')
	@parent
    <li class="active">	<a href="home">		Home      </a></li>      <!-- class="active" -->	
    <li> 				<a href="about">	About      </a></li>      <!-- class="active" -->	
@endsection


@section('content')

	<div class="home">
		<h2>Custom Index Page of Laravel Project</h2>

		<p>
			This is the public Area.
		</p>
	</div>
<!--
	echo Typography::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.');
    echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
    echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
    echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
    echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');
-->
@endsection
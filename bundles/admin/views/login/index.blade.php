@layout('admin::layouts.new')

@section('content')
  <div class="span8">
  	<div class="page-header">
  		<h1>Login<small> to Admin Panel</small></h1>
  	</div>	
		
		@if(Session::get('error'))
			<div class="alert alert-warning">Sorry, your username or password was incorrect.</div>
		@endif

		{{Form::open()}}

		{{Form::label('username', 'Username')}}
		{{Form::text('username', Input::old('username'))}}

		{{Form::label('password', 'Password')}}
		{{Form::password('password')}}

		<br />

		{{Form::submit('Login', array('class' => 'btn btn-success'))}}

		{{Form::token()}}
		{{Form::close()}}

@endsection


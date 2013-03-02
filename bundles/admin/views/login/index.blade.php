@layout('admin::layouts.new')

@section('content')
  <div class="span9">
	<h1>Login Page</h1>

	@if(Session::get('error'))
		Sorry, your username or password was incorrect.
	@endif

	{{Form::open()}}

	{{Form::label('username', 'Username')}}
	{{Form::text('username')}}

	{{Form::label('password', 'Password')}}
	{{Form::password('password')}}

	<br />

	{{Form::submit('Login', array('class' => 'btn btn-success'))}}

	{{Form::token()}}
	{{Form::close()}}

@endsection


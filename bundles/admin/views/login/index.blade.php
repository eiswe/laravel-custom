@layout('admin::layouts.new')

@section('navigation')
    <li class="active">	<a href="../home">	Home      </a></li>      <!-- class="active" -->	
    <li> 				<a href="../about">	About      </a></li>      <!-- class="active" -->	
@endsection

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


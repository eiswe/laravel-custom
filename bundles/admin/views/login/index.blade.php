@layout('admin::layouts.navi')

@section('subnav')
	<?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<li class="active">	<a href="'.$url.'/admin/home">     Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">    Emacs  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/page">     Pages  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/text">     Texts  </a></li>';  
      	print '<li>  				<a href="'.$url.'/admin/bone">         Bones  </a></li>'; 
        print '<li>                 <a href="'.$url.'/admin/picture">  Pictures  </a></li>';  
	?>
@endsection

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


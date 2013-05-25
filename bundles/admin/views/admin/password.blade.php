@layout('admin::layouts.navi')

@section('style')
	{{ Asset::container('header')->styles() }}
@endsection


@section('content')

	<?php use Admin\Models\Admin;
		$AAdmin = Admin::where('id', '=', $userid)->get();
		foreach ( $AAdmin as $key ) {
  			$uid 		= $key->id;
  			$uname 		= $key->name;
  			$user 		= $key->username;
  			$upassword 	= $key->password;
  		}
	?>

  <div class="span5">
  	<h3>Password of User {{ $userid }}</h3>
  	<br />
	@if(Session::get('error'))
		<?php 
			$error = Session::get('error'); 
			//<div class="alert alert-warning">Sorry, your POST Data was incorrect.</div> 
			foreach ($error as $value) {
				# code...
				echo '<div class="alert alert-error">'.$value.'</div>';
			}
		?>
	@endif
  	<?php
        $url = URL::base();

  		echo Form::horizontal_open();

		echo Form::control_group(
			Form::label('name', 'Name'), 
			Form::medium_text('name', $uname), '', 
			Form::block_help('Here you have to place your Name'));

		echo Form::control_group(
			Form::label('user', 'User'), 
			Form::medium_text('user', $user), '', 
			Form::block_help('Here you have to place your Username'));

		echo Form::control_group(
			Form::label('password', 'Password'), 
			Form::password('password'), '', 
			Form::block_help('Here you have to place your Password'));

		echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

			//echo Form::token();
   		echo Form::close();
  	?>
  </div>
  <div class="span5">
  	<p></p>
  </div>

@endsection


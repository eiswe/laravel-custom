@layout('admin::layouts.navi')

@section('content')

<div class="span10">
	<?php 					  /* admin menu */
	$url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
	$id = Session::get('id');                                                   // fetch Session:id - user is logged in??

/*

	field for inspiration!

	[id] => 1 [admin_id] => 2 [name] => Text [desc] => only text [fieldname] => Titel [fieldtype] => text [weight] => 1 [relation] 

*/

	?>

  	<div class="span5">

	  	<div class="row">
	  		<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here you can add a new Text:</h3>
	  		<br />

			@if(Session::get('error')) <?php 
					$error = Session::get('error'); 
					foreach ($error as $value) {
						echo '<div class="alert alert-error">'.$value.'</div>';
					} ?>
			@endif 
	  	</div>  		
			<?php 

			echo Form::horizontal_open( 'admin/text/add/' );

				if ( isset($page)) {
					$tmpList = array('' => '', );
					$i = 1;
					foreach ($page as $key => $value) {
						if ( $i > 1 ) {
							echo Form::control_group(
								Form::label('page_id', ''),
								Form::labelled_radio('page_id', '&nbsp;'.$value->title, $value->id ));
						} else {
							echo Form::control_group(
								Form::label('page_id', 'Choose page_id'),
								Form::labelled_radio('page_id', '&nbsp;'.$value->title, $value->id ));
						}
						$i++;
					}
				}

				echo Form::control_group(
					Form::label( 'text' , 'Insert Text' ), 
					Form::xlarge_textarea( 'text' , '', array('rows' => '2')), '', 
					Form::block_help( 'Insert your Text!' ));

				echo Form::token();
				echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

		   	Form::close();
	?>
  	</div>

	<div class="span5">

	  	<div class="row">
	  		<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here you see your Preview:</h3>
	  		<br />
	  	</div>

	  	<div class="hero-unit">

        <?php

			// if ( isset($page)) {
			// 	$tmpList = array('' => '', );
			// 	foreach ($page as $key => $value) {
			// 		$tmpList += array( $value->id => $value->title );
			// 	}
			// }
	  //     	echo Typography::horizontal_dl( $tmpList );

		?>
		<h1>Title</h1>
		<small>Description...</small> <br /><br />
		<p>Lorem ipsum...sdfff efewf wefwe fewf wefwekfwre gfkrg rekg ergvkrej vekj vbebvjke bejb kdeb erfjb ebked bkjfb fjkb ebk erbkej bekrjb frkjb rbjengejrb tb tbikj bjkib rgtjb gfrjbp gfrbkrfg bjfgb fgjb gkbr gbjfdg bjdb bjr bjr bjb jkb bkd gfbjkd brjtgkb djgn djogre bojer bjob dfjbo egbje gvdjfb tgjbtdrfbjgnfbkrkbfbkf bgkfdnb bkejn vbdfk ebktr btrjkb dfk bekj etbked betbj bkdfb eobj tjb trb tb dobj eobjtr bjortb jetb bio dfbojtrb trjbi dbojte btroub tobj fdboj hgoth dfigob trb tedobgdf </p>
	  	</div>
	</div>
</div>

@endsection

@section('script')

  {{ Asset::container('footer')->scripts() }}

@endsection 
@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">        Emacs </a></li>';
        print '<li class="active">  <a href="'.$url.'/admin/page/list">    Pages  </a></li>';     
        print '<li>                 <a href="'.$url.'/admin/picture">      Picture </a></li>';
    ?>
@endsection


@section('content')

<div class="span10">
	<?php 					  /* admin menu */

	$url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
	$id = Session::get('id');                                                   // fetch Session:id - user is logged in??

	?>

  	<div class="span5">

			@if(Session::get('error')) <?php 
					$error = Session::get('error'); 
					foreach ($error as $value) {
						echo '<div class="alert alert-error">'.$value.'</div>';
					} ?>
			@endif 

        	<?php 

			echo Form::horizontal_open_for_files( 'admin/picture/add/' );
			
			// 	foreach ( $bones as $key => $value ) {
			// 		// print $value->id;
			// 		// print $value->name;
			// 		// print $value->desc;
			// 		// print $value->fieldname;
			// 		// print $value->fieldtype;
			// 		// print $value->weight;
			// 		// print $value->relation;
			// 		// print '<br />';
			// 		// print $value->fieldtype;
			// 		// print '<br />';

				echo Form::control_group(
					Form::label( 'photo' , 'photo' ), 
					Form::file( 'photo' ), '', 
					Form::block_help( 'Here choose Foto!' ));

				echo Form::control_group(
					Form::label( 'name' , 'Name' ), 
					Form::medium_text( 'name' ), '', 
					Form::block_help( 'Name your Photo!' ));

				echo Form::control_group(
					Form::label( 'desc' , 'description' ), 
					Form::xlarge_textarea( 'desc', '', array('rows' => '2')), '', 
					Form::block_help( 'Describe your photo in a few sentences' ));

				echo Form::control_group(
					Form::label('size', 'Choose Size'),
					Form::labelled_radio('size', 'Small for inSite Pictures', 'small'));

				echo Form::control_group(
					Form::label('size', ' '),
					Form::labelled_radio('size', 'Big for Sliders', 'big'));

			 	echo Form::actions(array(Button::primary_submit('Upload!'), Form::button('Cancel')));

				Form::token();
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
	  			$extra = 'Text';
				switch ( $extra ) {
	  				case 'Text':
	  					?>
	  					<h1>Title</h1>
	  					<small>Description...</small> <br /><br />
	  					<p>Lorem ipsum...sdfff efewf wefwe fewf wefwekfwre gfkrg rekg ergvkrej vekj vbebvjke bejb kdeb erfjb ebked bkjfb fjkb ebk erbkej bekrjb frkjb rbjengejrb tb tbikj bjkib rgtjb gfrjbp gfrbkrfg bjfgb fgjb gkbr gbjfdg bjdb bjr bjr bjb jkb bkd gfbjkd brjtgkb djgn djogre bojer bjob dfjbo egbje gvdjfb tgjbtdrfbjgnfbkrkbfbkf bgkfdnb bkejn vbdfk ebktr btrjkb dfk bekj etbked betbj bkdfb eobj tjb trb tb dobj eobjtr bjortb jetb bio dfbojtrb trjbi dbojte btroub tobj fdboj hgoth dfigob trb tedobgdf </p>
	  					<?php
	  					break;  					
	  			}
	  	//</div>
	  		?>
	</div>
</div>

@endsection

@section('script')

  {{ Asset::container('footer')->scripts() }}

  <script type="text/javascript">

    $(document).ready(function(){


    }); 
  </script> 


@endsection 
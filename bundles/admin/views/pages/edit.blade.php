@layout('layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">        Emacs </a></li>';
        print '<li class="active">  <a href="'.$url.'/admin/page/list">    Pages  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/text/list">    Texts  </a></li>';       
        print '<li>                 <a href="'.$url.'/admin/picture/list"> Pictures  </a></li>';        
        print '<li>                 <a href="'.$url.'/admin/movie/list">   Movies  </a></li>';       
    ?>
@endsection

@section('content')

  <div class="span9">
	<!--
			Form like a BOSS! 
		-->
<?php
	echo Breadcrumb::create(array( 'Add' => $url.'/admin/page/add', 'List' => $url.'/admin/page/list', 'Edit'));
	print_r($page);

  	if ( isset( $page ) ) {				// Check if page is givven!
		foreach ( $page as $uniqValue ) {
			// THIS LOOP CONTAINS DEFAULT DATA FOR INPUT FIELDS!!! and save in awesome Var: uniqValue!
		} 
	} else {
		print 'no page given!';
	}


?>
		<br /><br />
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

	echo Form::horizontal_open();

		$tt = $uniqValue->title ;
		echo Form::control_group(
			Form::label('tt', 'Title'), 
			Form::large_text('tt', $tt), 'info', 
			Form::block_help('insert your title'));

		$dc = $uniqValue->desc ;
		echo Form::control_group(
			Form::label('dc', 'Description'), 
			Form::medium_text('dc', $dc), '', 
			Form::block_help('insert your description'));

		$st = $uniqValue->style ;
		echo Form::control_group(
			Form::label('st', 'Style'), 
			Form::medium_text('st', $st), 'info', 
			Form::block_help('choose your style - will add a dropdown here'));

		$ts = $uniqValue->texts ;
		echo Form::control_group(
			Form::label('ts', 'Texts'), 
			Form::medium_text('ts', $ts), '', 
			Form::block_help('choose your texts - will add a checkboxes here'));

		$im = $uniqValue->images ;
		echo Form::control_group(
			Form::label('im', 'Images'), 
			Form::medium_text('im', $im), '', 
			Form::block_help('choose your images - will add a checkboxes here'));

		$mv = $uniqValue->movies ;
		echo Form::control_group(
			Form::label('mv', 'Movies'), 
			Form::medium_text('mv', $mv), '', 
			Form::block_help('choose your movies - will add a checkboxes here'));

// textarea... dont need for pages
// ---------------------------------------------------
/*
		echo Form::control_group(										// External Failure Desc. - Externe Fehlerbeschreibung
			Form::label('ex', 'Ext. Comment'), 
			Form::xlarge_textarea('ex', '', array('rows' => '2')), '', 
			Form::block_help('Here you must place your Ext. Comment! 1024Zeichen'));

		echo Form::control_group(										// DVS Failure Desc. - DVS Fehlerbeschreibung
			Form::label('dv', 'Comment'), 
			Form::xlarge_textarea('dv', '', array('rows' => '2')), '', 
			Form::block_help('Here you can write some Text.. 1024Zeichen'));
*/
// Really unimportant fields... will not shown..
// ---------------------------------------------------

/*		// replace values for beauty these **** nice text fields =)
		$textlist[] = array( 'shrt' => 'tt', 'element' => 'small_text',  'label' => 'Test Time', 			'desc' => 'Here you have to place Test Time'  );
		$textlist[] = array( 'shrt' => 'td', 'element' => 'small_text',  'label' => 'Test Date', 			'desc' => 'Here you have to place Test Date'  );
		$textlist[] = array( 'shrt' => 'dw', 'element' => 'small_text',  'label' => 'Datum Wareneingang', 	'desc' => 'Here you have to place Datum Wareneingang'  );
		$textlist[] = array( 'shrt' => 'dt', 'element' => 'medium_text', 'label' => 'DVS Ticket', 			'desc' => 'Here you have to place DVS Ticket'  );
		$textlist[] = array( 'shrt' => 'pa', 'element' => 'small_text',  'label' => 'Produktions Auftrag', 	'desc' => 'Here you have to place Produktions Auftrag'  );
		$textlist[] = array( 'shrt' => 'cu', 'element' => 'large_text',  'label' => 'Customer', 			'desc' => 'Here you have to place Customer'  ); 
		// next unimportant fields
		$textlist[] = array( 'shrt' => 'rl', 'element' => 'small_text',  'label' => 'Rücklieferschein RLA', 'desc' => 'Here you have to place Rücklieferschein RLA'  );
		$textlist[] = array( 'shrt' => 'cp', 'element' => 'small_text',  'label' => 'CPLD Version', 		'desc' => 'Here you have to place CPLD Version'  );
		$textlist[] = array( 'shrt' => 'fw', 'element' => 'medium_text', 'label' => 'Firmware', 			'desc' => 'Here you have to place Firmware'  );
		$textlist[] = array( 'shrt' => 'sd', 'element' => 'small_text',  'label' => 'SDK', 					'desc' => 'Here you have to place SDK'  );
		$textlist[] = array( 'shrt' => 'hw', 'element' => 'small_text',  'label' => 'Hardware Test', 		'desc' => 'Here you have to place Hardware Test'  );

		foreach ( $textlist as $key) {
			echo Form::control_group(
				Form::label( 			 $key[ 'shrt' ] , $key[ 'label' ] ), 
				Form::$key[ 'element' ]( $key[ 'shrt' ] ), '',     //  , $key[ 'value' ] |  have to replace value!  // change small_text to $key['element']
				Form::block_help( $key[ 'desc' ] )); 
		}
*/
// --------------------------------------------------------------

		echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

		Form::token();
   	Form::close();

?>

@endsection
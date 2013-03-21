@layout('admin::layouts.new')

@section('navigation')
	@parent
	<?php 
		$url = URL::base(); //return http://laravel.dev
    	print '<li>					<a href="'.$url.'/admin/home"> Home      </a></li>';
    	print '<li>					<a href="'.$url.'/admin/list"> List      </a></li>';
    	print '<li>					<a href="'.$url.'/admin/card"> Add Card  </a></li>';
    	print '<li class="active">  <a href="'.$url.'/admin/edit"> Edit Card  </a></li>';
	?>
@endsection

@section('content')

  <div class="span9">				<!--	Form like a BOSS!  -->
		<br /><br />

<?php
		if ( isset( $card ) ) {				// Check if card is givven!
			foreach ( $card as $uniqValue ) {
				// THIS LOOP CONTAINS DEFAULT DATA FOR INPUT FIELDS!!! and save in awesome Var: uniqValue!
			} 
		} else {
			print 'no card given!';
		}

?>	@if(Session::get('error'))	<?php 

			$error = Session::get('error'); 
			foreach ($error as $value) {
				echo '<div class="alert alert-error">'.$value.'</div>';
			}
?>	@endif <?php 

	echo Form::horizontal_open();

// Interessting Fields + Combo Fields like Dropdown and Radio

		$sn = $uniqValue->serialnumber ;
		echo Form::control_group(
			Form::label('sn', 'SerialNumber'), 
			Form::small_text('sn', $sn), '', 
			Form::block_help('Here you have to place your SerialNumber'));

		$rv = $uniqValue->revision;
		echo Form::control_group(
			Form::label('rv', 'Revision'), 
			Form::small_text('rv', $rv), '', 
			Form::block_help('Here you must place your Revision!'));

// Generate DropDown Menus ... - need to sort arrays for default value! - plz in controller!
// ---------------------------------------------------

		$droplist[] = array( 'shrt' => 'kt', 'value' => $type, 'label' => 'Card-Type', 			'desc' => 'Here you have to place Card-Type'  );
		$droplist[] = array( 'shrt' => 'ao', 'value' => $auso, 'label' => 'Ausfall-Ort', 		'desc' => 'Here you have to place Ausfall Ort'  );
		$droplist[] = array( 'shrt' => 'et', 'value' => $errr, 'label' => 'ErrorType', 			'desc' => 'Here you have to place ErrorType'  );
		$droplist[] = array( 'shrt' => 'st', 'value' => $stat, 'label' => 'Status', 			'desc' => 'Here you have to place Status'  );
		$droplist[] = array( 'shrt' => 'fl', 'value' => $fail, 'label' => 'Failure', 			'desc' => 'Here you have to place Failure'  );

		foreach ( $droplist as $key) {
			echo Form::control_group(
				Form::label( 		$key[ 'shrt' ] , $key[ 'label' ] ), 
				Form::select( 	$key[ 'shrt' ] , $key['value'] ), '',     // have to replace value!  // change small_text to $key['element']
				Form::block_help( $key['desc'] )); 
		}

// Build textarea for comment! ...
// ---------------------------------------------------

		// External Failure Desc. - Externe Fehlerbeschreibung
		$ex = $uniqValue->excomment;
		echo Form::control_group(
			Form::label('ex', 'Ext. Comment'), 
			Form::xlarge_textarea('ex', $ex, array('rows' => '2')), '', 
			Form::block_help('Here you must place your Ext. Comment! 1024Zeichen'));

		// DVS Failure Desc. - DVS Fehlerbeschreibung
		$dv = $uniqValue->comment;
		echo Form::control_group(
			Form::label('dv', 'Comment'), 
			Form::xlarge_textarea('dv', $dv, array('rows' => '2')), '', 
			Form::block_help('Here you can write some Text.. 1024Zeichen'));

// Really unimportant fields...
// ---------------------------------------------------

		// replace values for beauty these **** nice text fields =)
		$textlist[] = array( 'shrt' => 'tt', 'value' => $uniqValue->time 		, 'element' => 'small_text',  'label' => 'Test Time', 			'desc' => 'Here you have to place Test Time'  );
		$textlist[] = array( 'shrt' => 'td', 'value' => $uniqValue->testdate	, 'element' => 'small_text',  'label' => 'Test Date', 			'desc' => 'Here you have to place Test Date'  );
		$textlist[] = array( 'shrt' => 'dw', 'value' => $uniqValue->datawe 		, 'element' => 'small_text',  'label' => 'Datum Wareneingang', 	'desc' => 'Here you have to place Datum Wareneingang'  );
		$textlist[] = array( 'shrt' => 'dt', 'value' => $uniqValue->otrs 		, 'element' => 'medium_text', 'label' => 'DVS Ticket', 			'desc' => 'Here you have to place DVS Ticket'  );
		$textlist[] = array( 'shrt' => 'pa', 'value' => $uniqValue->pa 			, 'element' => 'small_text',  'label' => 'Produktions Auftrag', 'desc' => 'Here you have to place Produktions Auftrag'  );
		$textlist[] = array( 'shrt' => 'cu', 'value' => $uniqValue->distributor	, 'element' => 'large_text',  'label' => 'Customer', 			'desc' => 'Here you have to place Customer'  ); 
		// next unimportant fields
		$textlist[] = array( 'shrt' => 'rl', 'value' => $uniqValue->rla 		, 'element' => 'small_text',  'label' => 'Rücklieferschein RLA','desc' => 'Here you have to place Rücklieferschein RLA'  );
		$textlist[] = array( 'shrt' => 'cp', 'value' => $uniqValue->cpld 		, 'element' => 'small_text',  'label' => 'CPLD Version', 		'desc' => 'Here you have to place CPLD Version'  );
		$textlist[] = array( 'shrt' => 'fw', 'value' => $uniqValue->firmware 	, 'element' => 'medium_text', 'label' => 'Firmware', 			'desc' => 'Here you have to place Firmware'  );
		$textlist[] = array( 'shrt' => 'sd', 'value' => $uniqValue->sdk 		, 'element' => 'small_text',  'label' => 'SDK', 				'desc' => 'Here you have to place SDK'  );
		$textlist[] = array( 'shrt' => 'hw', 'value' => $uniqValue->hwtest 		, 'element' => 'small_text',  'label' => 'Hardware Test', 		'desc' => 'Here you have to place Hardware Test'  );

		foreach ( $textlist as $key) {
			echo Form::control_group(
				Form::label( 		$key[ 'shrt' ] , $key[ 'label' ] ), 
				Form::$key['element']( 	$key[ 'shrt' ] , $key['value'] ), '',     // have to replace value!  // change small_text to $key['element']
				Form::block_help( $key['desc'] )); 
		}

		echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

		Form::token();
   	Form::close();

?>
@endsection

@layout('admin::layouts.navi')

@section('content')

  <div class="span9">
	<!--
			Form like a BOSS! 
		-->
	<?php

	  	if ( isset( $bone ) ) {				// Check if page is givven!

			?>	<br /><br />
				@if(Session::get('error'))	<?php 
						$error = Session::get('error'); //<div class="alert alert-warning">Sorry, your POST Data was incorrect.</div> 
						foreach ($error as $value) {
							echo '<div class="alert alert-error">'.$value.'</div>'; }
			?> @endif <?php 

			echo Form::horizontal_open();

				foreach ( $bone as $uniqBones ) {	
					print "<br />
						ID: $uniqBones->id <br />
						BonelistID: $uniqBones->bonelist_id <br />
						Desc: $uniqBones->desc <br />
						dbName: $uniqBones->dbname <br />
						fieldName: $uniqBones->fieldname <br />
						fieldType: $uniqBones->fieldtype <br />
						Rules: $uniqBones->rules <br />
						Weight: $uniqBones->weight <br />
						Relation: $uniqBones->relation <br />
					";
				}

				echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

				echo Form::token();
		   	echo Form::close();

		} else {
			print 'no page given!';
		}

	?>
@endsection
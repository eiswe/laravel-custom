@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
		print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
        print '<li>                 <a href="'.$url.'/admin/home">    Home      </a></li>';
      	print '<li>  				<a href="'.$url.'/admin/profile"> Profile  </a></li>';
      	print '<hr />';
        print '<li>  				<a href="'.$url.'/admin/page">    Pages  </a></li>';      
      	print '<li>                 <a href="'.$url.'/admin/text">    Texts  </a></li>';  
      	print '<li class="active">  <a href="'.$url.'/admin/bone">    Bones  </a></li>'; 
        print '<li>                 <a href="'.$url.'/admin/picture"> Pictures  </a></li>';  
    ?>
@endsection

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
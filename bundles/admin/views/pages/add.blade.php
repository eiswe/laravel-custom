@layout('admin::layouts.navi')

@section('content')

<div class="span10">
	<?php 					  /* admin menu */
	$url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
	$id = Session::get('id');                                                   // fetch Session:id - user is logged in??

	foreach ($styles as $key => $value) {												// generate list of stylenames and create menu entrys
		$tmpMenu[] = array($value->name, $url.'/admin/page/add/'.$value->name);
	}
	/* $tmpMenu = array(
		array('Add Sytle', $url.'/admin/page/add', true),
		array('Add Infos', $url.'/admin/page/desc')); */

	if ( isset( $id ) ) {                                                       // check for logged in?
		echo Navbar::create()
		  ->with_brand( 'Create '.$extra.' Page', $url.'/admin/page/add/'.$extra )
		  ->with_menus( Navigation::links( $tmpMenu ));  /* end of admin menu */
	} 
	
	?>

  	<div class="span5">
			@if(Session::get('error')) <?php 
					$error = Session::get('error'); 
					foreach ($error as $value) {
						echo '<div class="alert alert-error">'.$value.'</div>';
					} ?>
			@endif 

			<?php 
			//<form id="text" class="form-horizontal" method="POST" action="http://192.168.0.163/laravel-custom/public/text" accept-charset="UTF-8">
			
			//print_r($bones);

			echo Form::horizontal_open( 'admin/page/add/'.$extra );
			
				foreach ( $bones as $key => $value ) {
					// print $value->id;
					// print $value->name;
					// print $value->desc;
					// print $value->fieldname;
					// print $value->fieldtype;
					// print $value->weight;
					// print $value->relation;
					// print '<br />';
					// print $value->fieldtype;
					// print '<br />';

					switch ( $value->fieldtype ) {
					    case "text":
							echo Form::control_group(
								Form::label( $value->dbname , $value->fieldname ), 
								Form::medium_text( $value->dbname ), '', 
								Form::block_help( $value->desc ));
					        break;
					    case "textarea":
							echo Form::control_group(
								Form::label( $value->dbname , $value->fieldname ), 
								Form::xlarge_textarea( $value->dbname, '', array('rows' => '2')), '', 
								Form::block_help( $value->desc ));
					        break;
					    case "cake":
					        echo "i is cake";
					        break;
					}
				}
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

				switch ( $extra ) {
	  				case 'Text':
	  					?>
	  					<h1>Title</h1>
	  					<small>Description...</small> <br /><br />
	  					<p>Lorem ipsum...sdfff efewf wefwe fewf wefwekfwre gfkrg rekg ergvkrej vekj vbebvjke bejb kdeb erfjb ebked bkjfb fjkb ebk erbkej bekrjb frkjb rbjengejrb tb tbikj bjkib rgtjb gfrjbp gfrbkrfg bjfgb fgjb gkbr gbjfdg bjdb bjr bjr bjb jkb bkd gfbjkd brjtgkb djgn djogre bojer bjob dfjbo egbje gvdjfb tgjbtdrfbjgnfbkrkbfbkf bgkfdnb bkejn vbdfk ebktr btrjkb dfk bekj etbked betbj bkdfb eobj tjb trb tb dobj eobjtr bjortb jetb bio dfbojtrb trjbi dbojte btroub tobj fdboj hgoth dfigob trb tedobgdf </p>
	  					<?php
	  					break;  					
	  			}
	  		?>
	  	</div>
	</div>
</div>

@endsection

@section('script')

  {{ Asset::container('footer')->scripts() }}

  <script type="text/javascript">
    // alert("JS is enabled");

    $(document).ready(function(){
        // alert('document is ready');                                  // JS test!
        
        // $("p").click(function(){                                     // jQuery test!
        //   $(this).hide();
        // });

        // $('tr').click(function() {                                                // table row was clicked
        //     var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
        //     var baseUrl = document.URL ;                                          // fetch current URL
        //     var url = baseUrl + '/../edit/' + value;                                 // build new url: baseUrl/edit/id
        //     window.location.replace(url);                                         // redirect to edit form
        // });

        // $('table').tablesorter({                                                  // Sort hole table with click on Title
        //     onRenderHeader: function(index) {                                     // Indexies fields of table
        //     }
        // });
    }); 
  </script>


@endsection 
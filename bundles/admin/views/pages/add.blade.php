@layout('admin::layouts.navi')

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
		  ->with_brand('Create '.$extra.' Page', $url.'/admin/page/add')
		  ->with_menus(Navigation::links( $tmpMenu ));  /* end of admin menu */
	} 


/*

	field for inspiration!

	[id] => 1 [admin_id] => 2 [name] => Text [desc] => only text [fieldname] => Titel [fieldtype] => text [weight] => 1 [relation] 

*/

	?>

  	<div class="span5">
						<div class="tab-pane active" id="Text">
							@if(Session::get('error')) <?php 
									$error = Session::get('error'); 
									foreach ($error as $value) {
										echo '<div class="alert alert-error">'.$value.'</div>';
									} ?>
							@endif 

							<form id="text" class="form-horizontal" method="POST" action="http://192.168.0.163/laravel-custom/public/text" accept-charset="UTF-8">
							<?php 
							//echo Form::horizontal_open('text');

								echo Form::control_group(
									Form::label('st', 'Style'), 
									Form::medium_text('st'), '', 
									Form::block_help('choose your style - will add a dropdown here'));


								echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

								Form::token();
						   	Form::close();
					?>  </div>
  	</div>

	<div class="span5">

	  	<div class="hero-unit">
	  		<p>Here you see your Preview:</p>
	  	</div>

	  	<div class="hero-unit">
	  		<p>here showd be the preview..</p>
	  	</div>
	</div>
</div>

@endsection

@section('script')

  {{ Asset::container('footer')->scripts() }}
<!--
  <script type="text/javascript">
  //   // alert("JS is enabled");

  //   $(document).ready(function(){

  //       $('tr').click(function() {                                                // table row was clicked
  //           var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
  //           var baseUrl = document.URL ;                                          // fetch current URL
  //           var url = baseUrl + '/../edit/' + value;                                 // build new url: baseUrl/edit/id
  //           window.location.replace(url);                                         // redirect to edit form
  //       });

  //       $('table').tablesorter({                                                  // Sort hole table with click on Title
  //           onRenderHeader: function(index) {                                     // Indexies fields of table
  //           }
  //       });
  //   }); 
  </script> 
-->

@endsection 
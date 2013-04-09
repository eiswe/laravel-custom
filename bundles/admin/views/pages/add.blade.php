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
	<?php
	/* admin menu */
	      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
	      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

	      if ( isset( $id ) ) {                                                       // check for logged in?
	        echo Navbar::create()
	          ->with_brand('Create Page', $url.'/admin/page/add')
	          ->with_menus(Navigation::links( array(
	              array('Add Sytle', $url.'/admin/page/add', true),
	              array('Add Infos', $url.'/admin/page/desc'),
	          )));
	      }
	/* end of admin menu */

	?>
  <div class="span5">

<div class="tabbable tabs-left">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
    <li  		      ><a href="#tab2" data-toggle="tab">Section 2</a></li>
    <li  		      ><a href="#tab3" data-toggle="tab">Section 3</a></li>
    <li  		      ><a href="#tab4" data-toggle="tab">Section 4</a></li>
    <li  		      ><a href="#tab5" data-toggle="tab">Section 5</a></li>
    <li  		      ><a href="#tab6" data-toggle="tab">Section 6</a></li>
    <li  		      ><a href="#tab7" data-toggle="tab">Section 7</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab2">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane" id="tab3">
      <p>Howdy, I'm in Section 3.</p>
    </div>
    <div class="tab-pane" id="tab4">
      <p>Howdy, I'm in Section 4.</p>
    </div>
    <div class="tab-pane" id="tab5">
      <p>Howdy, I'm in Section 5.</p>
    </div>
    <div class="tab-pane" id="tab6">
      <p>Howdy, I'm in Section 6.</p>
    </div>
    <div class="tab-pane" id="tab7">
      <p>Howdy, I'm in Section 7.</p>
    </div>
  </div>
</div>


  	<?php


 //  	echo Tabbable::tabs_left(
	//   Navigation::links(
	//     array(
	//       array(
	//         'Section 1', 
	//         "<p>I'm in Section 1.</p>", 
	//         true
	//       ),
	//       array(
	//         'Section 2', 
	//         "<p>Howdy, I'm in Section 2.</p>"
	//       ),
	//       array(
	//         'Section 3', 
	//         'bölah', //$site,

	//       ),
	//     )
	//   )
	// );

  	?>


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

			echo Form::control_group(
				Form::label('st', 'Style'), 
				Form::medium_text('st'), '', 
				Form::block_help('choose your style - will add a dropdown here'));


			echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

			Form::token();
	   	Form::close();

	?>
  </div>

  <div class="span5">

  	<div class="hero-unit">
  		<p>Here you see your Preview:</p>
  	</div>

  	<div class="hero-unit">
  		<p>here showd be the preview..</p>
  	</div>

  </div></div>

@endsection
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

  <div class="span9">
	<!--
			Form like a BOSS! 
		-->
<?php
/* admin menu */
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      if ( isset( $id ) ) {                                                       // check for logged in?
        echo Navbar::create()
          ->with_brand('Create Page', $url.'/admin/page/add')
          ->with_menus(Navigation::links( array(
              array('Add Title', $url.'/admin/page/add', true),
              array('Select Sytle', $url.'/admin/page/style'),
          )));
      }
/* end of admin menu */

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

		echo Form::control_group(
			Form::label('tt', 'Title'), 
			Form::large_text('tt'), 'info', 
			Form::block_help('insert your title'));

		echo Form::actions(array(Button::primary_submit('Save changes!'), Form::button('Cancel')));

		Form::token();
   	Form::close();

?>

@endsection
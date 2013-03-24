@layout('admin::layouts.new')

@section('topnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        
        echo Navbar::create()
            ->with_brand( 'LimeBlack', $url.'/home' )
            ->with_menus( Navigation::links( 
                array(
                  array('Home', $url.'/home'),
                  array('David', $url.'/david'),
                  array('Paolo', $url.'/paolo'),
                  array('Kazo', $url.'/kazo'),
                  array( 'Dropdown', '#', false, false, array(
                      array('Action', '#'),
                      array('Another action', '#'),
                      array('Something else here', '#'),
                      
                      array(Navigation::DIVIDER),
                      
                      array(Navigation::HEADER, 'Nav header'),
                      array('Separated link', '#'),
                      array('One more separated link', '#'),
                    )
                  )
                ) 
            ))
          ->with_menus( Navigation::links( array(
              array('Admin', $url.'/admin', true),
              array(Navigation::VERTICAL_DIVIDER),

              array('About', $url.'/about'),
              array('Logout', $url.'/admin/logout'),
            )),
            array('class' => 'pull-right')
          );
    ?>
@endsection

@section('subnav')
	<?php 
    	print '<li class="active">	<a href="'.$url.'/admin/home">          Home      </a></li>';
      print '<li>                 <a href="'.$url.'/admin/emacs">         Emacs  </a></li>';
      print '<li>                 <a href="'.$url.'/admin/page/list">     Pages  </a></li>';
      print '<li>                 <a href="'.$url.'/admin/picture/list">  Pictures  </a></li>';        
      print '<li>                 <a href="'.$url.'/admin/movie/list">    Movies  </a></li>';       
	?>
@endsection

@section('content')

  <div class="span9">
		@if(Session::get('alert'))
			<?php 
				// Fetch alert
				$alert = Session::get('alert'); 
				// Print Alert message
				print '<div class="alert alert-success">The '.$alert['event'].' was '.$alert['state'].'</div>';
			?>
		@endif
    	<div class="hero-unit">
		    <h1>DVS</h1>
		    <span class="text text-info">
		    	eine Rohde und Schwarz Company</span>
		    
		    <p>Reparatur Statistic</p>
		    <br />
            <?php 
                print '<p><a href="'.$url.'/admin/list" class="btn btn-primary btn-large">To List!</a></p>';
            ?>         
		    
	    </div>

@endsection





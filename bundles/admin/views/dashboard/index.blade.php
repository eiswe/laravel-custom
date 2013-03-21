@layout('admin::layouts.new')

@section('navigation')
	@parent
	<?php 
		$url = URL::base(); //return http://laravel.dev
    	print '<li class="active">	<a href="'.$url.'/admin/home"> Home      </a></li>';
    	print '<li>					<a href="'.$url.'/admin/list"> List      </a></li>';
    	print '<li>					<a href="'.$url.'/admin/card"> Add Card  </a></li>';
    	print '<li>					<a href="'.$url.'/admin/edit"> Edit Card  </a></li>';
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





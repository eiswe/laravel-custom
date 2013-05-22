@layout('admin::layouts.navi')

@section('subnav')
	<?php 
        $url = URL::base();
		print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
      	print '<li class="active">	<a href="'.$url.'/admin/home">        Home      </a></li>';
      	print '<li>  				<a href="'.$url.'/admin/profile"> 	  Profile  </a></li>';
      	print '<hr />';
      	print '<li>                 <a href="'.$url.'/admin/page/list">   Pages  </a></li>'; 
      	print '<li>                 <a href="'.$url.'/admin/text/list">   Texts  </a></li>';  
        print '<li>  				<a href="'.$url.'/admin/bone">        Bones  </a></li>'; 
        print '<li>                 <a href="'.$url.'/admin/picture">     Pictures </a></li>';       
	?>
@endsection

@section('style')
	{{ Asset::container('header')->styles() }}
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
		    <h1>LimeBlack</h1>
        <span class="text text-info">
          &nbsp;&nbsp;&nbsp;coding all for Web, Android and Robotic!</span>
        <br /><br />
		    <p>List of your Pages</p>
		    <br />
            <?php 
                print '<p><a href="'.$url.'/admin/page/list" class="btn btn-primary btn-large">To List!</a></p>';
            ?>         
		    
	    </div>

@endsection

@section('script')

	{{ Asset::container('footer')->scripts() }}

@endsection



@layout('admin::layouts.new')

@section('navigation')
	@parent
    <li>				<a href="home"> Home      </a></li>      <!-- class="active" -->	
    <li>				<a href="list"> List      </a></li>      <!-- class="active" -->	
    <li class="active">	<a href="page"> Add Card  </a></li>      <!-- class="active" -->	
@endsection

@section('content')

  <div class="span9">
	<!--	{{ Form::open() }}
			Form like a BOSS!        cause BLADE cant change class?!?!
	 -->
	<form class="form-horizontal" method="POST" action="/admin/page" accept-charset="UTF-8">

		<br />
		<span class="text text-warning">Warning! Some fileds are required!</span>
		<br />
		<br />

		@if(Session::get('error'))
			Sorry, your Formular Data was incorrect.
		@endif



	    <div class="control-group">
	    	{{ Form::label('title', 'Title', array('class' => 'control-label')) }}
		    <div class="controls">
		    	{{ Form::text('title', Input::old('title')) }}  
		    </div>
		</div>
	    <div class="control-group">
	    	{{ Form::label('description', 'Description', array('class' => 'control-label')) }}
		    <div class="controls">
		    	{{ Form::text('description', Input::old('description')) }}
		    </div>
		</div>		
	    <div class="control-group">
	    	{{ Form::label('text', 'Text', array('class' => 'control-label')) }}
		    <div class="controls">
		    	{{ Form::text('text', Input::old('text')) }}
		    </div>
		</div>		
	    <div class="control-group">
	    	<div class="controls">
<!--	    		<div class="form-actions"> -->
	    			{{ Form::submit('Create Card', array('class' => 'btn btn-primary')) }}
				    <button type="button" class="btn">Cancel</button>
<!--			    </div> -->
	    	</div>
    	</div>

		{{ Form::token() }}
<!--		{{ Form::close() }} -->
    </form>

@endsection
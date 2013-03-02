@layout('admin::layouts.new')

@section('navigation')
	@parent
    <li class="active">	<a href="home"> Home      </a></li>      <!-- class="active" -->	
    <li>				<a href="list"> List      </a></li>      <!-- class="active" -->	
    <li>				<a href="page"> Add Card  </a></li>      <!-- class="active" -->	
@endsection

@section('content')

  <div class="span9">

    	<div class="hero-unit">
		    <h1>DVS</h1>
		    <span class="text text-info">
		    	eine Rohde und Schwarz Company</span>
		    
		    <p>Reparatur Statistic</p>
		    <br />
		    <p><a href="list" class="btn btn-primary btn-large">
			    	To List!</a></p>
			
	    </div>

@endsection




<!--

		experimental code
	<div class="tabbable">
	    <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
		    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
	    </ul>
	    <div class="tab-content">
	    	<div class="tab-pane active" id="tab1">
				<p>Im section 1!</p>
	    	</div>
		    <div class="tab-pane" id="tab2">
		    	<p>I'm in Section 2.</p>
		    	<div class="tabbable tabs-left">
    				<ul class="nav nav-tabs">
					    <li class="active"><a href="#hltab1" data-toggle="tab">Section 1</a></li>
					    <li><a href="#hltab2" data-toggle="tab">Section 2</a></li>
    				</ul>
    				<div class="tab-content">
				    	<div class="tab-pane active" id="hltab1">
				    		<p>Howdy, I'm in Section 1.1.</p>
				    	</div>
				    	<div class="tab-pane" id="hltab2">
				    		<p>Howdy, I'm in Section 1.2.</p>
				    	</div>
    				</div>
    			</div>
		    </div>
    	</div>
    </div>


	Old Code

<h1>Hello DVS User</h1>
<p class="lead">This is our dashboard view</p>

<a href="list">Liste</a>
<a href="list/auto/23">Liste auto 23</a>

-->
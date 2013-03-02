@layout('admin::layouts.new')

@section('navigation')
	@parent
    <li>				<a href="home"> Home      </a></li>      <!-- class="active" -->	
    <li class="active">	<a href="list"> List      </a></li>      <!-- class="active" -->	
    <li>				<a href="page"> Add Card  </a></li>      <!-- class="active" -->	
@endsection

@section('content')

  <div class="span11">
	<table class="table table-hover table-condensed">
		<tr>
			<td><strong>	Id 			</strong></td>
			<td><strong>	Title 		</strong></td>
			<td><strong>	Description </strong></td>
			<td><strong>	Text 		</strong></td>
			<td><strong>	AdminId		</strong></td>
			<td><strong>	Created		</strong></td>
			<td><strong>	Updated		</strong></td>
		</tr>

			<?php
			    foreach ( $pages as $value ) {
			    	?>
			    	  <tr>
		    			<td> {{ $value->id }} </td>
		    			<td> {{ $value->title }} </td>
		    			<td> {{ $value->description }} </td>
		    			<td> {{ $value->text }} </td>
		    			<td> {{ $value->admin_id }} </td>
		    			<td> {{ $value->created_at }} </td>
		    			<td> {{ $value->updated_at }} </td>

		    		  </tr>
		    		<?php 
				}
			?>
	</table>
@endsection
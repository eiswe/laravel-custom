@layout('admin::layouts.navi')

@section('content')

    <div class="span10">
        <h1>Bonelist Area</h1>

        @if(Session::get('alert')) <?php // Fetch alert            
            $alert = Session::get('alert'); 
            print '<div class="alert alert-success">The '.$alert['event'].' was '.$alert['state'].'</div>'; // Print Alert message
        ?> @endif

        <?php
    		$headi = array(                                       // Define Title for Table Columns
                'ID',
                'UserID',
                'Name',
                'Description',
                'Weight',
    		);

    	    echo Table::hover_tablesorter_condensed_open();       // Create Table Class: condensed, hover, tablesorter!
    	    echo Table::headers($headi);                          // Import Titles
    	    echo Table::body($bonelist)                           // Import Table Body
    	    	->ignore( 'created_at', 'updated_at' );           // Ignore these Fields
    	    echo Table::close();
        ?>   

        <br /><br /><br /><h3>Delete Picture!</h3>  
        @if(Session::get('error')) <?php 
                $error = Session::get('error'); 
                foreach ($error as $value) {
                    echo '<div class="alert alert-error">'.$value.'</div>';
                } ?>
        @endif 
    
        <?php
            echo Form::inline_open();
            echo Form::text('id', null, array('class' => 'input-small', 'placeholder' => 'ID of Picture'));
            echo Form::submit('Delete Bonelist!');
            echo Form::token();
            echo Form::close();
        ?>

@endsection

@section('script')

    {{ Asset::container('footer')->scripts() }}
    {{ Asset::container('table')->scripts() }}

    <script type="text/javascript">
        $(document).ready(function(){
            
            $('tr').click(function() {                                                // table row was clicked
                var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
                var baseUrl = document.URL ;                                          // fetch current URL
                var url = baseUrl + '/../edit/' + value;                                 // build new url: baseUrl/edit/id
                window.location.replace(url);                                         // redirect to edit form
            });

            $('table').tablesorter({                                                  // Sort hole table with click on Title
                onRenderHeader: function(index) {}                                    // Indexies fields of table
            });
        }); 

    </script>

@endsection
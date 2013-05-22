@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/profile">      Profile  </a></li>';
        print '<hr />';
        print '<li>                 <a href="'.$url.'/admin/page">         Pages  </a></li>';      
        print '<li>                 <a href="'.$url.'/admin/text">         Texts  </a></li>';  
        print '<li class="active">  <a href="'.$url.'/admin/bone">         Bones  </a></li>'; 
        print '<li>                 <a href="'.$url.'/admin/picture">      Pictures  </a></li>';  
    ?>
@endsection

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

        <ul id="sortable">
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 1 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 2 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 3 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 4 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 5 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 6 of Sortable List!</li>
            <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item Number. 7 of Sortable List!</li>
        </ul>    

@endsection

@section('script')

    {{ Asset::container('footer')->scripts() }}
    {{ Asset::container('table')->scripts() }}

    <script type="text/javascript">
        $(document).ready(function(){

            $(function() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
            });
            
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
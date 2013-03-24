@layout('admin::layouts.new')

@section('navigation')
	@parent
	<?php 
		$url = URL::base(); //return http://laravel.dev
    	print '<li>					<a href="'.$url.'/admin/home"> Home      </a></li>';
    	print '<li class="active">	<a href="'.$url.'/admin/list"> List      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs"> Emacs  </a></li>';
    	print '<li>					<a href="'.$url.'/admin/card"> Add Card  </a></li>';
    	print '<li>					<a href="'.$url.'/admin/edit"> Edit Card  </a></li>';
	?>
@endsection

@section('content')

  <div class="span10">

  	<?php
	    // $body = array( array( 'id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge' ), array( 'id' => '2', 'fname' => 'Fatrick', 'lname' => 'Palmadge' ), );

  		// begin to build an ****** nice constuct to 
  		// change ids to names inside the array cause i dont generate each line of table... i throw the hole array in the table:body

	   	foreach ( $cards as $key => $value ) {
	   		
	   		// print_r( $key ); shows entry id - not card id but equal!
	   		
	   		foreach ($user as $key) {             // check foreach user id for change to name
	   			//print $key[0];	              // print user id
	   			//print $key[1];                  // print user name
	   			if ( $value->userid == $key[0] ) { 
	   				$value->userid = $key[1];
	   			}
	   		}

            foreach ($type as $key) {           // check foreach card id for change to name
                if ( $value->cardtype == $key[0] ) { 
                    $value->cardtype = $key[1];
                }
            }

            foreach ($errr as $key) {           // check foreach error id for change to name
                if ( $value->errortype == $key[0] ) { 
                    $value->errortype = $key[1];
                }
            }

            foreach ($stat as $key) {           // check foreach failure id for change to name
                if ( $value->status == $key[0] ) { 
                    $value->status = $key[1];
                }
            }

            foreach ($fail as $key) {           // check foreach failure id for change to name
                if ( $value->failure == $key[0] ) { 
                    $value->failure = $key[1];
                }
            }

            // Need to add a Button at end of Table, for edit!

		}

		$headi = array(
			'ID', 			'SerialNumber', 'UserID', 	'Karten Typ', 
			'Fehler Typ', 	'Status', 		'Failure', 	'Ausfall', 
			'T. Datum', 	'T. Dauer', 	'Revision', 'Fehlerbesch.', 
			'Ext. Fehlerbesch.', 'Datum Wareneingang', 	'OTRS', 'Auftrag', 
			'Lieferant', 	'RLA', 	'CPLD', 'Firmware', 'SDK', 	'HW-Test' 
		);

// could generate the list by hand (foreach loop, to have more space to handle the output...)

	    echo Table::hover_tablesorter_condensed_open(); // bordered_hover_condensed_
	    echo Table::headers($headi);
	    echo Table::body($cards)
	    	->ignore( 'created_at', 'updated_at' ); // 'cardid',
	    echo Table::close();

	    if ( isset( $cards ) ) {   // check if table was successfully loaded!
	    	echo Typography::success('Table was successfully loaded!');
	    } else {
	    	echo Typography::success('An error occured while loading Table!');
	    }
    ?>

@endsection

@section('script')

<script type="text/javascript">
// alert("JS is enabled");

$(document).ready(function(){
    // alert('document is ready');                                  // JS test!

    // $("p").click(function(){                                     // jQuery test!
    //   $(this).hide();
    // });

    $('tr').click(function() {                                                // table row was clicked
        // var first = $(this).parent().siblings(":first").text();            // only show headings
        // var first = $(this).find("td").parent().siblings(":first").text(); // only show first value id sn rev,.... SHOWS FIRST CARD ROW!

        var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
        var baseUrl = document.URL ;                                          // fetch current URL
        var url = baseUrl + '/edit/' + value;                                 // build new url: baseUrl/edit/id
        window.location.replace(url);                                         // redirect to edit form
    });

    $('table').tablesorter({                                                  // Sort hole table with click on Title
    // customize header HTML
        onRenderHeader: function(index) {                                     // Indexies fields of table
        // the span wrapper is added by default                               // add little icons - dont work - dont have to work!
        // this.wrapInner('<span class="icons"></span>');
        }
    });

}); 

</script>

@endsection
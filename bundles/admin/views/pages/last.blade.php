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

/**

    Will generate a list of Pages on this site!

*/
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
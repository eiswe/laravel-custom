@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">        Emacs </a></li>';
        print '<li class="active">  <a href="'.$url.'/admin/page/list">    Pages  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/text/list">    Texts  </a></li>';       
        print '<li>                 <a href="'.$url.'/admin/picture/list"> Pictures  </a></li>';        
        print '<li>                 <a href="'.$url.'/admin/movie/list">   Movies  </a></li>';       
    ?>
@endsection

@section('content')

  <div class="span10">

    <h1>Page Area</h1>

  	<?php

/* admin menu */
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      if ( isset( $id ) ) {                                                       // check for logged in?
        echo Navbar::create()
          ->with_brand('Create Page', $url.'/admin/page/add')
          ->with_menus(Navigation::links( array(
              array('Home', '#', true),
              array('Link', '#'),
              array('Link', '#'),
              array('Link', '#'),
          )));
      }
/* end of admin menu */

/**

    Will generate a list of Pages on this site!

*/
		$headi = array(
            'ID',
            'UserID',
            'Title',
            'Description',
            'StyleID',
            'TextsIDs',
            'ImagesIDs',
            'MoviesIDs',
		);

// could generate the list by hand (foreach loop, to have more space to handle the output...)

	    echo Table::hover_tablesorter_condensed_open(); // bordered_hover_condensed_
	    echo Table::headers($headi);
	    echo Table::body($pages)
	    	->ignore( 'created_at', 'updated_at' );
	    echo Table::close();

    ?>

@endsection

@section('script')

  {{ Asset::container('footer')->scripts() }}

  <script type="text/javascript">
    // alert("JS is enabled");

    $(document).ready(function(){
        // alert('document is ready');                                  // JS test!

        // $("p").click(function(){                                     // jQuery test!
        //   $(this).hide();
        // });

        $('tr').click(function() {                                                // table row was clicked
            var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
            var baseUrl = document.URL ;                                          // fetch current URL
            var url = baseUrl + '/../edit/' + value;                                 // build new url: baseUrl/edit/id
            window.location.replace(url);                                         // redirect to edit form
        });

        $('table').tablesorter({                                                  // Sort hole table with click on Title
            onRenderHeader: function(index) {                                     // Indexies fields of table
            }
        });
    }); 
  </script>

@endsection
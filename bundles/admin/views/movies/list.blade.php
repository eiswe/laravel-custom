@layout('layouts.default') 

@section('topnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        
        echo Navbar::create()
            ->with_brand( 'LimeBlack', $url.'/home' )
            ->with_menus( Navigation::links( 
                array(
                  array('Home', $url.'/home'),
                  array('David', $url.'/david'),
                  array('Paolo', $url.'/paolo'),
                  array('Kazo', $url.'/kazo'),
                  array( 'Dropdown', '#', false, false, array(
                      array('Action', '#'),
                      array('Another action', '#'),
                      array('Something else here', '#'),
                      
                      array(Navigation::DIVIDER),
                      
                      array(Navigation::HEADER, 'Nav header'),
                      array('Separated link', '#'),
                      array('One more separated link', '#'),
                    )
                  )
                ) 
            ))
          ->with_menus( Navigation::links( array(
              array('Admin', $url.'/admin', true),
              array(Navigation::VERTICAL_DIVIDER),

              array('About', $url.'/about'),
              array('Logout', $url.'/admin/logout'),
            )),
            array('class' => 'pull-right')
          );
    ?>
@endsection

@section('subnav')
    <?php 
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">        Emacs  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/page/list">    Pages  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/text/list">    Texts  </a></li>';       
        print '<li>                 <a href="'.$url.'/admin/picture/list"> Pictures  </a></li>';        
        print '<li class="active">  <a href="'.$url.'/admin/movie/list">   Movies  </a></li>';       
    ?>
@endsection

@section('content')

  <div class="span10">

    <h1>Movies Area</h1>

  	<?php
      echo Breadcrumb::create(array('Add' => $url.'/admin/movie/add', 'Edit' => $url.'/admin/movie/edit', 'List'));
    // print_r($pages);
    
/**

    Will generate a list of Pages on this site!

*/
		$headi = array(
            'ID',
            'UserID',
            'Description',
            'Path',
            'rating',
		);

// could generate the list by hand (foreach loop, to have more space to handle the output...)

	    echo Table::hover_tablesorter_condensed_open(); // bordered_hover_condensed_
	    echo Table::headers($headi);
	    echo Table::body($movies)
	    	->ignore( 'created_at', 'updated_at' );
	    echo Table::close();

    ?>

@endsection

@section('script')

  <script type="text/javascript">
    $(document).ready(function(){
        $('tr').click(function() {                                                // table row was clicked
            var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
            var baseUrl = document.location.hostname;//URL ;                                          // fetch current URL
            var url = baseUrl + '/admin/movie/edit/' + value;                                 // build new url: baseUrl/edit/id
            window.location.replace(url);                                         // redirect to edit form
        });
        $('table').tablesorter({                                                  // Sort hole table with click on Title
            onRenderHeader: function(index) {                                     // Indexies fields of table
            }
        });
    }); 
  </script>

@endsection
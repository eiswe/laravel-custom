@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        print '<li>                 <a href="'.$url.'/admin/home">         Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">        Emacs </a></li>';
        print '<li>                 <a href="'.$url.'/admin/page/list">    Pages  </a></li>';      
        print '<li class="active">  <a href="'.$url.'/admin/picture">      Picture  </a></li>';      
    ?>
@endsection

@section('content')

  <div class="span10">

    <h1>Picture Area</h1>

    @if(Session::get('alert'))
        <?php 
            // Fetch alert
            $alert = Session::get('alert'); 
            // Print Alert message
            print '<div class="alert alert-success">The '.$alert['event'].' was '.$alert['state'].'</div>';
        ?>
    @endif

  	<?php

/*    Will generate a list of Pages on this site! */
        $headi = array(
            'UserID',
            'Name',
            'Description',
            'Path',
            'Size',
        );

        echo Table::hover_tablesorter_condensed_open();
        echo Table::headers($headi);
        echo Table::body($picture)
            ->ignore( 'id', 'created_at', 'updated_at' );
        echo Table::close();

/* admin menu */
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
      $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

      echo Button::link( $url.'/admin/picture/add', 'Create Picture' );


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
            var url = baseUrl + '/../edit/' + value;                              // build new url: baseUrl/edit/id
            window.location.replace(url);                                         // redirect to edit form
        });

        $('table').tablesorter({                                                  // Sort hole table with click on Title
            onRenderHeader: function(index) {                                     // Indexies fields of table
            }
        });

    }); 
  </script>

@endsection
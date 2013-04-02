@layout('layouts.default')

@section('topnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        
        echo Navbar::create()
            ->with_brand( 'LimeBlack', $url.'/home' )
            ->with_menus( Navigation::links( 
                array(
                  array('Home', $url.'/home'),
                  array('David', $url.'/david', true),
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
              array(Navigation::VERTICAL_DIVIDER),

              array('Login', $url.'/admin/login'),
            )),
            array('class' => 'pull-right')
          );
    ?>
@endsection

@section('subnav')
  <?php
      $surl = $url.'/david/';
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li class="active">  <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'about"> About      </a></li>';       
      print '<li>                 <a href="'.$url.'/galery"> Galery      </a></li>';      
  ?>  
@endsection

@section('content')

  <div class="span9">

    <?php
      // echo Breadcrumb::create(array('DEMO OBJECT' => $url.'/admin/page/add', 'Edit' => $url.'/admin/page/edit', 'List'));

/*  New row foreach news */
    foreach ($news as $key => $value) {

      echo '<div class="row">';
      echo "<h1>".$value->title."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>".$value->desc."</small></h1>";

      if ( isset($value->texts) ) {                                         // also check if texts is string (text = 1) or array (texts >= 1)
        $texts = Text::where('id', '=', $value->texts )->get();             // fetch news->text from DB
        foreach ($texts as $tkey => $tvalue) {                              // 
          print_r($tvalue->text);                                           // print each news->text  (is only 1)
        }
      }

      //echo Typography::lead( $texts );
      echo '</div>';

      echo '<div class="row">';       // Footer of News Element!
      echo     '<br />';
      echo     '<div class="span3"><p class="text-left">Added by David as UID: '.$value->userid.'</p></div>';
      echo     '<div class="span3"><p class="text-center">This is the '.$value->id.' Entry!</p></div>';
      echo     '<div class="span3"><p class="text-right">'.$value->created_at.'</p></div>';
      echo '</div>';
      
      echo '<div class="row">';       // Footer of News Element!
      echo     '<br /><hr /><br />';
      echo '</div>';


    }



    ?>

@endsection

@section('script')

  <script type="text/javascript">
    $(document).ready(function(){
        $('tr').click(function() {                                                // table row was clicked
            var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
            var baseUrl = document.location.hostname;//URL ;                                          // fetch current URL
            var url = baseUrl + '/admin/page/edit/' + value;                                 // build new url: baseUrl/edit/id
            window.location.replace(url);                                         // redirect to edit form
        });
        $('table').tablesorter({                                                  // Sort hole table with click on Title
            onRenderHeader: function(index) {                                     // Indexies fields of table
            }
        });
    }); 
  </script>

@endsection
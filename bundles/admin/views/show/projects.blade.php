@layout('admin::layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'about"> About      </a></li>';       
      print '<li>                 <a href="'.$surl.'gallery"> Galery      </a></li>';  
      print '<li class="active">  <a href="'.$surl.'projects"> Projects      </a></li>';           
  ?>  
@endsection

@section('content')

  <div class="span9">
    <?php

      if (  isset( $project )) {
        print "<br /><br /> <p>Project</p>";
        print_r( $project );
      } 

      if ( isset( $projectpage )) {
        print "<br /><br /> <p>ProjectPage</p>";
        print_r( $projectpage );
      }   


      // echo Breadcrumb::create(array('DEMO OBJECT' => $url.'/admin/page/add', 'Edit' => $url.'/admin/page/edit', 'List'));

/*  New row foreach news */
    // print_r($news);
    // foreach ($news as $key => $value) {

    //   echo '<div class="hero-unit">';
    //   echo "<h1>".$value->title."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>".$value->desc."</small></h1>";

    //   if ( isset($value->texts) ) {                                         // also check if texts is string (text = 1) or array (texts >= 1)
    //     $texts = Text::where('id', '=', $value->texts )->get();             // fetch news->text from DB
    //     foreach ($texts as $tkey => $tvalue) {                              // 
    //       print_r($tvalue->text);                                           // print each news->text  (is only 1)
    //     }
    //   }

    //   //echo Typography::lead( $texts );
    //   echo '</div>';

    //   echo '<div class="hero-unit">';       // Footer of News Element!
    //   echo     '<br />';
    //   echo     '<div class="span3"><p class="text-left">Added by David as UID: '.$value->admin_id.'</p></div>';
    //   echo     '<div class="span3"><p class="text-center">This is the '.$value->id.' Entry!</p></div>';
    //   echo     '<div class="span3"><p class="text-right">'.$value->created_at.'</p></div>';
    //   echo '</div>';
      
    //   echo '<div class="row">';       // Footer of News Element!
    //   echo     '<br /><hr /><br />';
    //   echo '</div>';


    // }



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
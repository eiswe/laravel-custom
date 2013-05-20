@layout('admin::layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
      print '<li>                 <a href="'.$surl.'home">          Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">          News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'gallery">       Galery      </a></li>';  
      print '<li class="active">  <a href="'.$surl.'projects/Home"> Projects      </a></li>';           
      print '<li>                 <a href="'.$surl.'site/0">        All Sites      </a></li>';           
      print '<hr />';
      print '<li>                 <a href="'.$surl.'about">         About      </a></li>';       
  ?>  
@endsection

@section('content')

  <div class="span9">
    <?php

      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers

      if (  isset( $projects )) {
        foreach ($projects as $key => $value) {                       // generate list of stylenames and create menu entrys
          
          $tmpMenu[] = array($value->title, $url.'/'.$site.'/projects/'.$value->title);
          //print_r($value);
        }

        echo Navbar::create()
          ->with_brand( 'Projects', $url.'/'.$site.'/projects/Home' )
          ->with_menus( Navigation::links( $tmpMenu ));  /* end of admin menu */
      } 


      if ( $project == "Home") {

          // If all nessessary data isset show the Page!
          if ( isset( $projects ) AND isset( $projectpage ) AND isset($page) AND isset($text) ) {

            foreach ($projects as $key => $value ) {

              print '<div class="hero-unit">';
              print '<h2>'.$value->title.'</h2>';
              print '<p>'.$value->desc.'</p>';

              foreach ($projectpage as $pkey => $pvalue) {
                //print '<br />'.'<br />'.$pvalue->projectgroup_id.' should be same with '.$value->id;
                if ( $pvalue->projectgroup_id == $value->id ) {
                  //print $value->title.'<br />';       // here should be a value...
                  foreach ($page as $akey => $avalue) {
                    //print $pvalue->page_id.' should equal with '.$avalue->id;
                    if ( $pvalue->page_id == $avalue->id ) {
                      //print 'Get Pages witch a related to this Project!<br />'.$avalue->title.'<br />';
                      print '<br /><a href="'.$url.'/'.$site.'/site/'.$avalue->id.'">'.$avalue->title.'</a>';
                      print '<p>'.$avalue->desc.'</p>';
                      foreach ($text as $tkey => $tvalue) {
                        //print 'Text ID:'.$avalue->text_id.' of user '.$avalue->admin_id.' should equal to '.$tvalue->id.'<br />';
                        if ( $avalue->text_id == $tvalue->id ) {
                          print '<p>'.$tvalue->text.'</p>';
                        }
                      }
                    }
                  }
                }
              }
              print '</div>';              
            }
          } 
       
      } else {

          if (  isset( $text )) {
            print "<br /><br /> <p>text</p>";
            foreach ($text as $key => $value) {
              //print_r($value);
              print $value->id.':&'.$value->text.'<br />';

            }
            //print_r( $text );
          } 

          if ( isset( $page )) {
            print "<br /><br /> <p>page</p>";
            print_r( $page );
          }

          if (  isset( $projects )) {
            print "<br /><br /> <p>Projects</p>";
            print_r( $projects );
          } 

          if ( isset( $projectpage )) {
            print "<br /><br /> <p>ProjectPage</p>";
            print_r( $projectpage );
          }
      }


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
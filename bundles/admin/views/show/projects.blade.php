@layout('admin::layouts.navi')

@section('content')

  <div class="span9">
    <?php

      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers

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
                      print '<br /><a href="'.$url.'/'.URI::segment(1).'/site/'.$avalue->id.'">'.$avalue->title.'</a>';
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

    ?>

@endsection

@section('script')

  <script type="text/javascript">
    $(document).ready(function(){

    }); 
  </script>

@endsection
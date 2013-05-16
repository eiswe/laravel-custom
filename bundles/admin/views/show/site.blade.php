@layout('admin::layouts.navi')

@section('subnav')
    <?php
        $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
        $surl = $url.'/'.$site.'/';
        print '<li>                 <a href="'.$surl.'home">  Home      </a></li>'; 
        print '<li>                 <a href="'.$surl.'news">  News      </a></li>'; 
        print '<li>                 <a href="'.$surl.'about"> About      </a></li>';       
        print '<li>                 <a href="'.$surl.'gallery"> Galery      </a></li>';  
        print '<li class="active">  <a href="'.$surl.'projects/Home"> Projects      </a></li>';           
    ?>  
@endsection

@section('content')

  <div class="span9">
    <?php
      $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers

      if (  isset( $pages )) {
        foreach ($pages as $key => $value) {                       // generate list of stylenames and create menu entrys
          $tmpMenu[] = array($value->title, $url.'/'.$site.'/site/'.$value->id);
        }

        echo Navbar::create()
          ->with_brand( 'Sites', $url.'/'.$site.'/projects/Home' )
          ->with_menus( Navigation::links( $tmpMenu ));  /* end of admin menu */
      } 

      if ( isset( $page ) AND isset($userid) ) {      // Display Site

        echo '<div class="hero-unit">';
        print "<br />";

        // have to check for bonelist! type of page! sry site!
        foreach ($page as $key => $value) {

          print '<h2>'.$value->title.'</h2>';
          print '<p>'.$value->desc.'</p>';

          if ( $value->texts == true ) {
            $ttext = Text::where( 'admin_id', '=', $userid )->where( 'page_id', '=', $id )->get();
            foreach ($ttext as $key => $value) {

              print $value->text;

            }
          } else { print '<br />no text given'; }
          if ( $value->pictures == true ) {
            $ppictures = Picture::where( 'admin_id', '=', $userid )->where( 'page_id', '=', $id )->get();
            foreach ($ppictures as $key => $value) {

              print '<br /><br />here should be a picture';//$value->text;

            }
          } else { print '<br /><br />no picture given'; }
          if ( $value->movies == true ) {
            $mmovies = Movie::where( 'admin_id', '=', $userid )->where( 'page_id', '=', $id )->get();
            foreach ($mmovies as $key => $value) {

              print '<br /><br />here should be a movie';//$value->text;

            }
          } else { print '<br /><br />no movie given'; }
        } 

        print '</div>';

      }
    ?>

@endsection

@section('script')

@endsection
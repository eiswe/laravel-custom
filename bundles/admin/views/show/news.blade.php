@layout('admin::layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
      print '<li>                 <a href="'.$surl.'home">          Home      </a></li>'; 
      print '<li class="active">  <a href="'.$surl.'news">          News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'gallery">       Galery      </a></li>';      
      print '<li>                 <a href="'.$surl.'projects/Home"> Projects      </a></li>';       
      print '<hr />';
      print '<li>                 <a href="'.$surl.'about">         About      </a></li>';       
  ?>  
@endsection

@section('content')

  <div class="span9">
  <?php

    foreach ($news as $key => $value) {

      echo '<div class="hero-unit">';
      echo "<h1>".$value->title."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href=".$surl.'site/'.$value->id.">".$value->desc."</a></small></h1>";

      if ( isset($tlist) ) {                            // if text exist
        foreach ($tlist as $tkey => $tvalue) {          // unpack text                    
          foreach ($tvalue as $ttkey => $ttvalue) {     // unpack...
            if ( $ttvalue->page_id == $value->id ) {    // check if text is related to this page
              print '<br />'.$ttvalue->text;                     // show text
            } 
          }
        }
      }
      echo '</div>';

      echo '<div class="hero-unit">';       // Footer of News Element!
      echo     '<div class="span3"><p class="text-left">Added by <a href="'.$surl.'home">David (UID: '.$value->admin_id.')</a></p></div>';
      echo     '<div class="span3"><p class="text-center">This is the <a href="'.$surl.'site/'.$value->id.'">'.$value->id.'th Entry</a>!</p></div>';
      echo     '<div class="span3"><p class="text-right">'.$value->created_at.'</p></div>';
      echo '</div>';
      
      echo '<div class="row">';       // Footer of News Element!
      echo     '<br /><hr /><br />';
      echo '</div>';

    }
  ?>

@endsection

@layout('admin::layouts.navi')

@section('subnav')
  <?php
      $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers
      $surl = $url.'/'.$site.'/';
      print '<div class="span2"> <ul class="nav nav-pills nav-stacked">';
      print '<li class="active">  <a href="'.$surl.'home">          Home      </a></li>'; 
      print '<li>                 <a href="'.$surl.'news">          News      </a></li>'; 
      print '<li>                 <a href="'.$surl.'gallery">       Galery      </a></li>';    
      print '<li>                 <a href="'.$surl.'projects/Home"> Projects      </a></li>';            
      print '<li>                 <a href="'.$surl.'site/0">        All Sites      </a></li>';           
      print '<hr />';
      print '<li>                 <a href="'.$surl.'about">         About      </a></li>';       
  ?>  
@endsection

@section('content')

  <div class="span9">

      <div class="hero-unit">
        <h1>{{ $site }}</h1>
        <span class="text text-info">
          &nbsp;&nbsp;&nbsp;coding all for Web, Android and Robotic!</span>
        <br /><br />
        <p>. .. checkout my Flyduino QuadroCopter Project</p>
        <br />
        <?php
        echo '<p><a href="'.$url.'/admin" class="btn btn-primary btn-large">To Admin!</a></p>';
        ?>

        <!-- Button to trigger modal -->
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
         
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
            </div>
            
            <div class="modal-body">
                <p>One fine body…</p>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
            
        </div>

      </div>


@endsection                    
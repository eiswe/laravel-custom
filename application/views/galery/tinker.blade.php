@layout('layouts.default')

@section('subnav')
    @parent
    <?php
        $url = URL::base(); //return http://laravel.dev 
        print '<li>                 <a href="'.$url.'/home"> Home      </a></li>'; 
        print '<li>                 <a href="'.$url.'/about"> About      </a></li>'; 
        print '<li class="active">  <a href="'.$url.'/galery"> Galery      </a></li>';      
    ?>  
@endsection


@section('content')

  <div class="span9">


    <h1>Fotos von meinen ersten Erfahrungen mit Tinkerforge!</h1>
    <p>Hier habe ich die ersten kleinen Schaltungen zusammengesteckt!<br/>
    Sofort wollte ich einen QuadroCopter bauen!<br/>
    Musste mich aber zuerst mit diesem 2Wheel Vehicle zufriedenstellen...<br/>
    <br/>
    ...hab aber schon die Einkaufsliste für meinen Quadro =]</p>


    <?php

    $pictureDir = 'public/bundles/application/images';

    $allepictures = scandir($pictureDir);  //$pictureDir); //Ordner "files" auslesen


    echo Carousel::create(array(
        array(
            'image'=>'/bundles/application/images/testx64.jpg',
            'label'=>'First Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
        ),
        array(
            'image'=>'img/bootstrap-mdo-sfmoma-02.jpg',
            'label'=>'Second Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
        ),
        array(
            'image'=>'/bundles/application/images/testx64.jpg',
            'label'=>'Third Thumbnail label',
            'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
        ),
    ));

/*

    echo MediaObject::open_list();
    foreach ( $allepictures as $pictures ) { // Ausgabeschleife
        if ( $pictures != "." and $pictures != ".." ) {
            // Hier wird für jeden Content Odner ein Menu Button erstellt! 
            //print '<img src="'.'/img/'.$pictures.'" width="150px" />';
            echo MediaObject::create('Description of the picture...', '/bundles/application/images/'.$pictures )->with_h4('Media heading');

//            print '1';
        }
    };
    echo MediaObject::close_list();
*/
    echo Typography::info('HowTo add Pictures to non bundle Laravel folder!');
    echo Typography::success('Add Pictures to : /application/public/* ');
    echo Typography::success('And publish with: php artisan bundle:publish application ');
    echo Typography::success('Fetch pictures in PHP /bundles/application/images/*');
    echo "<br/>";
    echo "<br/>";
    echo Typography::warning('Etiam porta sem malesuada magna mollis euismod.');
    echo Typography::error('Donec ullamcorper nulla non metus auctor fringilla.');
    echo Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.');
    echo Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.');


    ?>
@endsection

@section('script')

<script src="/bundles/application/js/jquery.tablesorter.js"> </script>
<script src="/bundles/application/js/Chart.js"> </script>


<script type="text/javascript">
// alert("JS is enabled");

    $(document).ready(function(){
        // alert('document is ready');                                  // JS test!

        $('.carousel').carousel()                                                  // Sort hole table with click on Title

    }); 

</script>


@endsection
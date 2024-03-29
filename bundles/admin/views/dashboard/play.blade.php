@layout('admin::layouts.navi')

@section('content')

  <div class="span10">

      <div class="row-fluid">
        <div class="span12 text-center">

          <div class="span4"> <!--  style="width: 15%;" -->
            <?php

              $url = "http://www.engadget.com/rss.xml";
              $rss = simplexml_load_file($url);
              
              if ( $rss ) {

                echo '<h1>'.$rss->channel->title.'</h1>';
                //echo '<li>'.$rss->channel->pubDate.'</li>';

                $items = $rss->channel->item;
                
                foreach ( $items as $item ) {

                  $title = $item->title;
                  $link = $item->link;
                  $published_on = $item->pubDate;
                  $description = $item->description;

                  echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
                  //echo '<span>('.$published_on.')</span>';
                  echo '<p>'.$description.'</p>';
                }
              }
            ?>
          </div> 

          <div class="span6"> <!--  style="width: 15%;" -->
            <?php

              $url = "http://www.xda-developers.com/feed/";
              $rss = simplexml_load_file($url);
              
              if ( $rss ) {

                echo '<h1>'.$rss->channel->title.'</h1>';
                //echo '<li>'.$rss->channel->pubDate.'</li>';

                $items = $rss->channel->item;
                
                foreach ( $items as $item ) {

                  $title = $item->title;
                  $link = $item->link;
                  $published_on = $item->pubDate;
                  $description = $item->description;

                  echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
                  //echo '<span>('.$published_on.')</span>';
                  echo '<p>'.$description.'</p>';
                }
              }
            ?>
          </div> 

        </div>
      </div>


    <form action="{{ url('user/upload')}}" class="dropzone" id="my-awesome-dropzone"></form>



  	<h1>Show you a beautiful Chart!</h1>
  	{{ Typography::lead('with some random data!') }}

    <canvas id="canvas" height="600" width="1200"></canvas>

    <ol id="sortable">
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
        <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
    </ol>
    <br /><br /><br />

@endsection

@section('script')

    {{ Asset::container('footer')->scripts() }}
    {{ Asset::container('chart')->scripts() }}
    {{ Asset::container('dropzone')->scripts() }}

    <script type="text/javascript">

        $(document).ready(function () {
            $('label.tree-toggler').click(function () {
                $(this).parent().children('ul.tree').toggle(300);
            });
        });

        $(function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        });

        var data = {
            labels : ["January","February","March","April","May","June","July","August","Septembre","Ottobre","Novembre","Dezembre"],
            datasets : [ {
                    fillColor : "rgba(180,180,180,0.5)",
                    strokeColor : "rgba(180,180,180,1)",
                    pointColor : "rgba(180,180,180,1)",
                    pointStrokeColor : "#fff",
                    data : [0,3,6,8,9,8,7,9,5,4,6,7]
                }, {
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    data : [0,3,5,6,5,7,6,4,7,5,8,5]
                }, {
                    fillColor : "rgba(51,87,105,0.5)",
                    strokeColor : "rgba(51,87,105,1)",
                    pointColor : "rgba(51,87,105,1)",
                    pointStrokeColor : "#fff",
                    data : [0,2,1,3,2,1,4,3,2,1,4,2]
                } ]
        }
        var options = {
                    
            scaleOverlay : false,                   //Boolean - If we show the scale above the chart data           
            scaleOverride : false,                  //Boolean - If we want to override with a hard coded scale
            //** Required if scaleOverride is true **
            scaleSteps : null,                      //Number - The number of steps in a hard coded scale
            scaleStepWidth : null,                  //Number - The value jump in the hard coded scale
            scaleStartValue : null,                 //Number - The scale starting value
            scaleLineColor : "rgba(0,0,0,.1)",      //String - Colour of the scale line 
            scaleLineWidth : 1,                     //Number - Pixel width of the scale line    
            scaleShowLabels : true,                 //Boolean - Whether to show labels on the scale  // Show label left of chart! ( Value Size )
            scaleLabel : "<%=value%>",              //Interpolated JS string - can access value
            scaleFontFamily : "'Arial'",            //String - Scale label font declaration for the scale label
            scaleFontSize : 12,                     //Number - Scale label font size in pixels  
            scaleFontStyle : "normal",              //String - Scale label font weight style
            scaleFontColor : "#666",                //String - Scale label font colour
            
            
            scaleShowGridLines : true,              //Boolean - Whether grid lines are shown across the chart
            scaleGridLineColor : "rgba(0,0,0,.05)", //String - Colour of the grid lines
            scaleGridLineWidth : 1,                 //Number - Width of the grid lines
            
            bezierCurve : true,                     //Boolean - Whether the line is curved between points
            
            pointDot : true,                        //Boolean - Whether to show a dot for each point
            pointDotRadius : 3,                     //Number - Radius of each point dot in pixels
            pointDotStrokeWidth : 1,                //Number - Pixel width of point dot stroke
            
            datasetStroke : true,                   //Boolean - Whether to show a stroke for datasets
            datasetStrokeWidth : 2,                 //Number - Pixel width of dataset stroke
            datasetFill : true,                     //Boolean - Whether to fill the dataset with a colour
            
            animation : true,                       //Boolean - Whether to animate the chart
            animationSteps : 60,                    //Number - Number of animation steps            
            animationEasing : "easeOutQuart",       //String - Animation easing effect
            onAnimationComplete : null              //Function - Fires when the animation is complete
        }
        
        var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Line(data,options);

    </script>

@endsection

<!-- 	

/** Radar Chart! */
    // var radarChartData = {        
    //     labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
    //     datasets : [
    //         {
    //             fillColor : "rgba(220,220,220,0.5)",
    //             strokeColor : "rgba(220,220,220,1)",
    //             pointColor : "rgba(220,220,220,1)",
    //             pointStrokeColor : "#fff",
    //             data : [100,20,70,30,80,0,0]
    //         },
    // ]   }
    // var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
/** End Radar Chart! */

/** Doughnut Chart! */
    // var data = [
    //     {
    //         value: 30,
    //         color:"#F7464A"
    //     },
    //     {
    //         value : 50,
    //         color : "#E2EAE9"
    //     },
    //     {
    //         value : 100,
    //         color : "#D4CCC5"
    //     },
    //     {
    //         value : 40,
    //         color : "#949FB1"
    //     },
    //     {
    //         value : 120,
    //         color : "#4D5360"
    //     }
    // ]

    // var options = {
    //     //Boolean - Whether we should show a stroke on each segment
    //     segmentShowStroke : true,
        
    //     //String - The colour of each segment stroke
    //     segmentStrokeColor : "#fff",
        
    //     //Number - The width of each segment stroke
    //     segmentStrokeWidth : 2,
        
    //     //The percentage of the chart that we cut out of the middle.
    //     percentageInnerCutout : 50,
        
    //     //Boolean - Whether we should animate the chart 
    //     animation : true,
        
    //     //Number - Amount of animation steps
    //     animationSteps : 100,
        
    //     //String - Animation easing effect
    //     animationEasing : "easeOutBounce",
        
    //     //Boolean - Whether we animate the rotation of the Doughnut
    //     animateRotate : true,

    //     //Boolean - Whether we animate scaling the Doughnut from the centre
    //     animateScale : false,
        
    //     //Function - Will fire on animation completion.
    //     onAnimationComplete : null
    // }
    
    // var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(data,options);
/** End Doughnut Chart! */

        -->
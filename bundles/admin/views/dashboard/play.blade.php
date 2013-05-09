@layout('admin::layouts.navi')

@section('subnav')
    <?php 
        $url = URL::base(); //return http://laravel.dev
        print '<li>                 <a href="'.$url.'/admin/home">          Home      </a></li>';
        print '<li>                 <a href="'.$url.'/admin/emacs">         Emacs  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/page/list">     Pages  </a></li>';
        print '<li class="active">  <a href="'.$url.'/admin/play">        Play  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/picture">      Pictures </a></li>';        
    ?>
@endsection

@section('content')

  <div class="span10">


    <form action="{{ url('user/upload')}}" class="dropzone" id="my-awesome-dropzone"></form>



  	<h1>Show you a beautiful Chart!</h1>
  	{{ Typography::lead('with some random data!') }}

    <canvas id="canvas" height="600" width="1200"></canvas>

@endsection

@section('script')
{{ Asset::container('footer')->scripts() }}
<script type="text/javascript">

    var data = {
        labels : ["January","February","March","April","May","June","July","August","Septembre","Ottobre","Novembre","Dezembre"],
        datasets : [
            {
                fillColor : "rgba(180,180,180,0.5)",
                strokeColor : "rgba(180,180,180,1)",
                pointColor : "rgba(180,180,180,1)",
                pointStrokeColor : "#fff",
                data : [0,3,6,8,9,8,7,9,5,4,6,7]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [0,3,5,6,5,7,6,4,7,5,8,5]
            },
            {
                fillColor : "rgba(51,87,105,0.5)",
                strokeColor : "rgba(51,87,105,1)",
                pointColor : "rgba(51,87,105,1)",
                pointStrokeColor : "#fff",
                data : [0,2,1,3,2,1,4,3,2,1,4,2]
            }
        ]
    }

    var options = {
                
        //Boolean - If we show the scale above the chart data           
        scaleOverlay : false,
        
        //Boolean - If we want to override with a hard coded scale
        scaleOverride : false,
        
        //** Required if scaleOverride is true **
        //Number - The number of steps in a hard coded scale
        scaleSteps : null,
        //Number - The value jump in the hard coded scale
        scaleStepWidth : null,
        //Number - The scale starting value
        scaleStartValue : null,

        //String - Colour of the scale line 
        scaleLineColor : "rgba(0,0,0,.1)",
        
        //Number - Pixel width of the scale line    
        scaleLineWidth : 1,

        //Boolean - Whether to show labels on the scale 
        scaleShowLabels : true, //false,                    // Show label left of chart! ( Value Size )
        
        //Interpolated JS string - can access value
        scaleLabel : "<%=value%>",
        
        //String - Scale label font declaration for the scale label
        scaleFontFamily : "'Arial'",
        
        //Number - Scale label font size in pixels  
        scaleFontSize : 12,
        
        //String - Scale label font weight style    
        scaleFontStyle : "normal",
        
        //String - Scale label font colour  
        scaleFontColor : "#666",    
        
        ///Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines : true,
        
        //String - Colour of the grid lines
        scaleGridLineColor : "rgba(0,0,0,.05)",
        
        //Number - Width of the grid lines
        scaleGridLineWidth : 1, 
        
        //Boolean - Whether the line is curved between points
        bezierCurve : true,
        
        //Boolean - Whether to show a dot for each point
        pointDot : true,
        
        //Number - Radius of each point dot in pixels
        pointDotRadius : 3,
        
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth : 1,
        
        //Boolean - Whether to show a stroke for datasets
        datasetStroke : true,
        
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth : 2,
        
        //Boolean - Whether to fill the dataset with a colour
        datasetFill : true,
        
        //Boolean - Whether to animate the chart
        animation : true,

        //Number - Number of animation steps
        animationSteps : 60,
        
        //String - Animation easing effect
        animationEasing : "easeOutQuart",

        //Function - Fires when the animation is complete
        onAnimationComplete : null
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
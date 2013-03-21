# [Laravel](http://laravel.com) - A PHP Framework For Web Artisans

Laravel is a clean and classy framework for PHP web development. Freeing you
from spaghetti code, Laravel helps you create wonderful applications using
simple, expressive syntax. Development should be a creative experience that you
enjoy, not something that is painful. Enjoy the fresh air.

[Official Website & Documentation](http://laravel.com)

## Feature Overview

- Simple routing using Closures or controllers.
- Views and templating.
- Driver based session and cache handling.
- Database abstraction with query builder.
- Authentication.
- Migrations.
- PHPUnit Integration.
- A lot more.

### Passing Data To Views:

```php
<?php

Route::get('user/(:num)', function($id)
{
	$user = DB::table('users')->find($id);

	return View::make('profile')->with('user', $user);
});
```

## Contributing to Laravel

Contributions are encouraged and welcome; however, please review the Developer
Certificate of Origin in the "license.txt" file included in the repository. All
commits must be signed off using the `-s` switch.

```bash
git commit -s -m "this commit will be signed off automatically!"
```

## License

Laravel is open-sourced software licensed under the MIT License.


## Custom

Need to be logged in to export List to Excell!!

	// jQuery JavaScript!

    // $(function() {

    //   // Set up empty table with second and first columns pre-sorted
    //   $("table").tablesorter({ theme : 'blue', sortList: [[2,1],[0,0]] });

    //   $("#append").click(function() {

    //     // add some html
    //     var html = "<tr><td>Peter</td><td>Parker</td><td>28</td><td>$9.99</td><td>20%</td><td>Jul 6, 2006 8:14 AM</td></tr>" +
    //       "<tr><td>John</td><td>Hood</td><td>33</td><td>$19.99</td><td>25%</td><td>Dec 10, 2002 5:14 AM</td></tr><tr><td>Clark</td>" +
    //       "<td>Kent</td><td>18</td><td>$15.89</td><td>44%</td><td>Jan 12, 2003 11:14 AM</td></tr>" +
    //       "<tr><td>Bruce</td><td>Almighty</td><td>45</td><td>$153.19</td><td>44%</td><td>Jan 18, 2001 9:12 AM</td></tr>";

    //     // append new html to table body 
    //     $("table tbody").append(html);

    //     // let the plugin know that we made a update, then the plugin will
    //     // automatically sort the table based on the header settings
    //     $("table").trigger("update");

    //     return false;
    //   });

    // });

<!--
 			HTML Bootstrap...

		experimental code
	<div class="tabbable">
	    <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
		    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
	    </ul>
	    <div class="tab-content">
	    	<div class="tab-pane active" id="tab1">
				<p>Im section 1!</p>
	    	</div>
		    <div class="tab-pane" id="tab2">
		    	<p>I'm in Section 2.</p>
		    	<div class="tabbable tabs-left">
    				<ul class="nav nav-tabs">
					    <li class="active"><a href="#hltab1" data-toggle="tab">Section 1</a></li>
					    <li><a href="#hltab2" data-toggle="tab">Section 2</a></li>
    				</ul>
    				<div class="tab-content">
				    	<div class="tab-pane active" id="hltab1">
				    		<p>Howdy, I'm in Section 1.1.</p>
				    	</div>
				    	<div class="tab-pane" id="hltab2">
				    		<p>Howdy, I'm in Section 1.2.</p>
				    	</div>
    				</div>
    			</div>
		    </div>
    	</div>
    </div>


	Old Code

<h1>Hello DVS User</h1>
<p class="lead">This is our dashboard view</p>

<a href="list">Liste</a>
<a href="list/auto/23">Liste auto 23</a>

-->
<!-- 
    // $(function() {

    //   // Set up empty table with second and first columns pre-sorted
    //   $("table").tablesorter({ theme : 'blue', sortList: [[2,1],[0,0]] });

    //   $("#append").click(function() {

    //     // add some html
    //     var html = "<tr><td>Peter</td><td>Parker</td><td>28</td><td>$9.99</td><td>20%</td><td>Jul 6, 2006 8:14 AM</td></tr>" +
    //       "<tr><td>John</td><td>Hood</td><td>33</td><td>$19.99</td><td>25%</td><td>Dec 10, 2002 5:14 AM</td></tr><tr><td>Clark</td>" +
    //       "<td>Kent</td><td>18</td><td>$15.89</td><td>44%</td><td>Jan 12, 2003 11:14 AM</td></tr>" +
    //       "<tr><td>Bruce</td><td>Almighty</td><td>45</td><td>$153.19</td><td>44%</td><td>Jan 18, 2001 9:12 AM</td></tr>";

    //     // append new html to table body 
    //     $("table tbody").append(html);

    //     // let the plugin know that we made a update, then the plugin will
    //     // automatically sort the table based on the header settings
    //     $("table").trigger("update");

    //     return false;
    //   });
    // }); 


$(document).ready(function(){

  $(".run").click(function(){
  
    $("#box").animate({opacity: "0.1", left: "+=400"}, 1200)
    .animate({opacity: "0.4", top: "+=160", height: "20", width: "20"}, "slow")
    .animate({opacity: "1", left: "0", height: "100", width: "100"}, "slow")
    .animate({top: "0"}, "fast")
    .slideUp()
    .slideDown("slow")
    return false;
  
  });
});
/*
    $ausort.unshift($uniqValue->);
    $userlist.unshift($uniqValue->);
    $ctypeslist.unshift($uniqValue->);
    $etypeslist.unshift($uniqValue->);
    $statuslist.unshift($uniqValue->);
    $failurelist.unshift($uniqValue->); */

  // $("p").click(function(){                                     // jQuery test!
  //   $(this).hide();
  // });

// // 
//         // create a short array with changed fields - for testing
//         $fields = array( 'sn', 'cardid', 'userid' );
//         //convert array to string - reolve with explode()
//         $fieldstr = implode(",", $fields);

//         // create a short array with changed values - for testing
//         $values = array( '28124567', '1', '1' );
//         $valuestr = implode(",", $values);


            // $userlist[] = array(                            // get all users to fetch username from id
            //     $value->id,
            //     $value->username,             // save user, id in userlist for sending to list
            // );


/** !Pink here are some testdata - only for testing! 
        // insert test data for playing!
        $creds = Array ( 
            'sn'        => '12345678123',
            'rv'        => '1234567123456789',
            'kt'        => '2',
            'ao'        => '0',
            'et'        => '2',
            'st'        => '2',
            'fl'        => '2',
            'ex'        => 'qwertzuio',
            'dv'        => 'qwertzuiop',
            'tt'        => '00:30',
            'td'        => '05.03.2013',
            'dw'        => '12.01.2013',
            'dt'        => 'DVS#1234567',
            'pa'        => 'PA-12345',
            'cu'        => 'RuS Inc.',
            'rl'        => '12345',
            'cp'        => '7.0.4',
            'fw'        => '1.1.16.11',
            'sd'        => '4.3.0.10',
            'hw'        => '2.1.16.1',
        );
*/

    -->
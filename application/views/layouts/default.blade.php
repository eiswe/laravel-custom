<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>LimeBlack: Try something new!</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>LimeBlack</h1>
			<h2>Try something new!</h2>
			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
				@yield('content')
			</div>
			<br />
			<ul class="out-links">
				<li><a href="home">Home</a></li>
				<li><a href="admin/home">Admin Area</a></li>
				<li><a href="about">about</a></li>
				<li><a href="..">Admin for after Logout!</a></li>				
			</ul>
			<br />
		</div>
	</div>
</body>
</html>

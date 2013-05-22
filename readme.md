

# [LimeBlack](http://limeblack.de/) - The beginning of s.th. awesome!

This Site will become a type of CMS but not really... =]

Will use this Site to generate a Public Profile for everyone,
and my Area to play with some Web Magick!

A lot of my Projects are private but i will try to publish some of them
to show you all what i am doing and looking for!

ok now i have put all my stuff into a bundle only need to remove the laravel from my github project

to install my bundle add this to your bundles.php - my project required bootstrapper!

	'admin'	=> array( 'handles' => 'admin' ),		// registrating a new bundle: admin
	
	'home'	=> array( 								// registrating a new bundle: home -> for public contents
		'auto' 		=> true,
		'handles' => 'home'
	),	


[Official Website & Documentation of using Laravel PHP Framework](http://laravel.com)

## Feature Overview

- Simple routing using Closures or controllers.
- Views and templating.
- Driver based session and cache handling.
- Database abstraction with query builder.
- Authentication.
- Migrations.
- PHPUnit Integration.
- A lot more.


## License

Laravel is open-sourced software licensed under the MIT License.

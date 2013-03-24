<?php

class Admin_Create_Profile_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: profiles
		Schema::create('profiles', function($table){
            $table->increments('id')			->unique();
            $table->integer('adminid')			->unique();
            $table->string('frontname', 32)		->nullable();
            $table->string('backname', 64)		->nullable();
            $table->string('countries', 1024)	->nullable();
            $table->string('languages', 1024)	->nullable();
            $table->string('skills', 1024)		->nullable();
            $table->string('hobbies', 1024)		->nullable();
            $table->string('role', 32)			->nullable();
            $table->timestamps();
        });

		$countries	= array( 'Italien', 'Deutschland' );		// create a short array with countries
        $countriestr = implode(",", $countries);										//convert array to string - reolve with explode()

		$languages	= array( 'Deutsch', 'English', 'Italienisch' );		// create a short array with languages
        $languagestr = implode(",", $languages);										//convert array to string - reolve with explode()

		$skills	= array( 'HTML', 'CSS', 'PHP', 'Laravel', 'Python' );		// create a short array with skills
        $skillstr = implode(",", $skills);										//convert array to string - reolve with explode()

		$hobbies	= array( 'Tinkerforge', 'Flyduino', 'Laravel', 'Italien' );		// create a short array with hobbies
        $hobbiestr = implode(",", $hobbies);										//convert array to string - reolve with explode()

        DB::table('profiles')->insert(array(
        	'adminid'		=> '1',
        	'frontname'	=> 'David',
        	'backname'	=> 'Crimi',
        	'countries'	=> $countriestr,
        	'languages'	=> $languagestr,
        	'skills'	=> $skillstr,
        	'hobbies'	=> $hobbiestr,
        ));

        DB::table('profiles')->insert(array(
        	'adminid'		=> '2',
        	'frontname'	=> 'David',
        	'backname'	=> 'Crimi',
        	'countries'	=> $countriestr,
        	'languages'	=> $languagestr,
        	'skills'	=> $skillstr,
        	'hobbies'	=> $hobbiestr,
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop profiles
		Schema::drop('profiles');
	}

}


/** !Pink

        DB::table('admins')->insert(array(
        	'name'		=> 'David Crimi',
        	'username'	=> 'root',
        	'password'	=> Hash::make('qwert'),
        	'email'		=> 'deathpoison.dc@gmail.com',
        	'role'		=> 'admin'
        ));

		// create a short array with changed fields - for testing
		$fields	= array( 'sn', 'cardid', 'userid' );
        //convert array to string - reolve with explode()
        $fieldstr = implode(",", $fields);

		// create a short array with changed values - for testing
		$values	= array( '28124567', '1', '1' );
        $valuestr = implode(",", $values);

        DB::table('histories')->insert(array(
        	'cardid'		=> '1',
        	'userid'		=> '1',
        	'action'		=> 'insert',
        	'fields'		=> $fieldstr,
        	'values'		=> $valuestr,
        ));

*/
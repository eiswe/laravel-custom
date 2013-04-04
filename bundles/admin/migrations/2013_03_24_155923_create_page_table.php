<?php

class Admin_Create_Page_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
	  Schema::create('pages', function($table){ 		// add database schema: pages

            $table->increments('id')->unique();			// with id
            $table->integer('userid');					// user id

            $table->string('title', 32);				// title 	20
            $table->string('desc', 64)->nullable();         // desc     64

            $table->integer('style');				// style 	64
            $table->integer('texts')	->nullable();	// texts 	{1,2,3,4}
            $table->integer('images')	->nullable();	// images 	{1,2,3,4}
            $table->integer('movies')	->nullable();	// movies 	{1,2,3,4}
            
            $table->timestamps();						// timestamp of created and updated
        });

        DB::table('pages')->insert(array(
            'userid'        => '1',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '1',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => 'Second Page',
            'desc'          => 'My second Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '2',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '1',
            'title'         => 'Third Page',
            'desc'          => 'My third Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '3',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => 'Fourth Page',
            'desc'          => 'My fourth Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '4',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => 'Fifth Page',
            'desc'          => 'My fifth Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '5',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => '6th Page',
            'desc'          => 'My 6th Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '6',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => '7th Page',
            'desc'          => 'My 7th Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '7',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '3',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '1',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '3',
            'title'         => 'Second Page',
            'desc'          => 'My second Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '2',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '4',
            'title'         => 'Third Page',
            'desc'          => 'My third Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '3',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '4',
            'title'         => 'Fourth Page',
            'desc'          => 'My fourth Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '4',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '3',
            'title'         => 'Fifth Page',
            'desc'          => 'My fifth Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '5',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '4',
            'title'         => '6th Page',
            'desc'          => 'My 6th Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '6',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'userid'        => '1',
            'title'         => '7th Page',
            'desc'          => 'My 7th Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '7',
            'images'        => '1',
            'movies'        => '1',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: pages
		Schema::drop('pages');
	}

}

/*
        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '1',
            'images'        => '1',
            'movies'        => '1',
      ));
*/
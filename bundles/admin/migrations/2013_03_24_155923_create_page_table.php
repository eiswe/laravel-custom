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

            $table->string('title', 12);				// title 	20
            $table->string('desc', 64)->nullable();         // desc     64

            $table->integer('style');				// style 	64
            $table->integer('texts')	->nullable();	// texts 	{1,2,3,4}
            $table->integer('images')	->nullable();	// images 	{1,2,3,4}
            $table->integer('movies')	->nullable();	// movies 	{1,2,3,4}
            
            $table->timestamps();						// timestamp of created and updated
        });

        DB::table('pages')->insert(array(
            'userid'        => '2',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'style'         => '1',
            'texts'         => '1',
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
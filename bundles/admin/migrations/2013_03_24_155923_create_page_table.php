<?php

class Admin_Create_Page_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
	  Schema::create('pages', function($table){ 		// add database schema: pages

            $table->engine = 'InnoDB';

            $table->increments('id')        ->unique();			// with id
           
            $table->integer('admin_id')     ->unsigned();			// user id
            $table->integer('bonelist_id')	->unsigned();		// bonelist_id 	64

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->foreign('bonelist_id')
                ->references('id')
                ->on('bonelists')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('title', 32);                // title    20
            $table->string('desc', 64)      ->nullable();         // desc     64

            $table->integer('text_id')  ->unsigned();       // bonelist_id  64

            $table->foreign('text_id')
                ->references('id')
                ->on('texts')
                ->on_delete('restrict')
                ->on_update('cascade');

            //$table->integer('texts')	    ->nullable()  ->unsigned();	// texts 	{1,2,3,4}
            $table->integer('images')	    ->nullable()  ->unsigned();	// images 	{1,2,3,4}
            $table->integer('movies')	    ->nullable()  ->unsigned();	// movies 	{1,2,3,4}
            
            $table->timestamps();						// timestamp of created and updated
        });

        DB::table('pages')->insert(array(
            'admin_id'     => '1',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '1',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'      => '2',
            'title'         => 'Quadro Copter',
            'desc'          => 'This is my first SubPage of my QuadroCopter Project',
            'bonelist_id'   => '1',
            'text_id'         => '2',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '1',
            'title'         => 'Third Page',
            'desc'          => 'My third Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '3',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '2',
            'title'         => 'Fourth Page',
            'desc'          => 'My fourth Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '4',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '2',
            'title'         => 'Fifth Page',
            'desc'          => 'My fifth Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '5',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '2',
            'title'         => '6th Page',
            'desc'          => 'My 6th Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '6',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '2',
            'title'         => '7th Page',
            'desc'          => 'My 7th Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '7',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '3',
            'title'         => 'First Page',
            'desc'          => 'My first Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '1',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '3',
            'title'         => 'Second Page',
            'desc'          => 'My second Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '2',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '4',
            'title'         => 'Third Page',
            'desc'          => 'My third Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '3',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '4',
            'title'         => 'Fourth Page',
            'desc'          => 'My fourth Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '4',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '3',
            'title'         => 'Fifth Page',
            'desc'          => 'My fifth Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '5',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '4',
            'title'         => '6th Page',
            'desc'          => 'My 6th Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '6',
            'images'        => '1',
            'movies'        => '1',
        ));

        DB::table('pages')->insert(array(
            'admin_id'     => '1',
            'title'         => '7th Page',
            'desc'          => 'My 7th Page with my own Laravel-CMS',
            'bonelist_id'         => '1',
            'text_id'         => '7',
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

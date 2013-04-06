<?php

class Admin_Create_Movie_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */

	public function up() {
		
		// add database schema: movies
		Schema::create('movies', function($table){

            $table->increments('id')->unique();

            $table->integer('admin_id');

            $table->string('desc', 64)->nullable();
            $table->string('path', 64);

            $table->integer('rate');

            $table->timestamps();
		});

        DB::table('movies')->insert(array(
            'admin_id'        => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));                        

        DB::table('movies')->insert(array(
            'admin_id'        => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */

	public function down() {
		// drop database schema: movies
		Schema::drop('movies');
	}

}


/*
        DB::table('cards')->insert(array(
            'serialnumber'  => '28120123',
            'admin_id'        => '3',
            'cardtype'      => '6',
            'errortype'     => '7',
            'status'        => '4',
            'failure'       => '6',
            'ausort'        => '1',
            'testdate'      => '21.12.2012',
      ));
*/
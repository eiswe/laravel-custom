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

            $table->engine = 'InnoDB';

            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

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

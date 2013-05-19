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
            $table->integer('page_id')->unsigned()->nullable();

            $table->foreign('admin_id')  // with admin all his data will lost...
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->foreign('page_id') // with page all his data will lost...
                ->references('id')
                ->on('pages')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('desc', 64)->nullable();
            $table->string('path', 64);

            $table->integer('rate');

            $table->timestamps();
		});

        DB::table('movies')->insert(array(
            'admin_id'        => '1',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '1',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '2',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '2',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '3',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '3',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '4',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '4',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));                        

        DB::table('movies')->insert(array(
            'admin_id'        => '5',
            'page_id'       => '1',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'rate'          => '4',
        ));

        DB::table('movies')->insert(array(
            'admin_id'        => '5',
            'page_id'       => '1',
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

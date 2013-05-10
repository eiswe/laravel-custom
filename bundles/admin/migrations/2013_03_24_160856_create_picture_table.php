<?php

class Admin_Create_Picture_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: pictures
		Schema::create('pictures', function($table){

            $table->engine = 'InnoDB';

            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();
            $table->integer('page_id')->unsigned()->nullable();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('name', 32)->nullable();
            $table->string('desc', 64)->nullable();
            $table->string('path', 512);
            $table->string('size', 64);

            $table->timestamps();
        });

        $user = array( 1,2,3,4 );
        foreach ($user as $key ) {
            for ($i=1; $i <= 15; $i++) { 

                DB::table('pictures')->insert(array(
                    'admin_id'      => $key,
                    //'page_id'       => $i,
                    'name'          => 'Small Picture '.$i,
                    'desc'          => 'No. '.$i.' of UID: '.$key.' small Pictures',
                    'path'          => 'http://placehold.it/64x64',
                    'size'          => 'small'
                ));
            }
        }

        foreach ($user as $key ) {
            for ($i=1; $i <= 5; $i++) { 

                DB::table('pictures')->insert(array(
                    'admin_id'      => $key,
                    //'page_id'       => $i,
                    'name'          => 'Big Picture '.$i,
                    'desc'          => 'No. '.$i.' of UID: '.$key.' big Pictures',
                    'path'          => 'http://placehold.it/850x350',
                    'size'          => 'big'
                ));
            }
        }
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: pictures
		Schema::drop('pictures');
	}
}
<?php

class Admin_Create_Todostatus_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: todostatus
		Schema::create('todostatus', function($table){
            
            $table->increments('id')->unique();

            $table->string('name', 64);
            $table->string('desc', 200);

            $table->timestamps();
        });

        DB::table('todostatus')->insert(array(
			'name'		=> 'Started',
        	'desc'		=> 'Started',
        ));
 
        DB::table('todostatus')->insert(array(
        	'name'		=> 'Stopped',
        	'desc'		=> 'Stopped',
        ));
 
        DB::table('todostatus')->insert(array(
        	'name'		=> 'Paused',
        	'desc'		=> 'Paused',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: todostatus
		Schema::drop('todostatus');
	}
}
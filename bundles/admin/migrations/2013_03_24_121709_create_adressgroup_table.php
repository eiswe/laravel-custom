<?php

class Admin_Create_Adressgroup_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: adressgroups
		Schema::create('adressgroups', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->string('name', 64);
            $table->string('desc', 200);

            $table->timestamps();
        });

        DB::table('adressgroups')->insert(array(
			'name'		=> 'Friends',
        	'desc'		=> 'Friends',
        ));
 
        DB::table('adressgroups')->insert(array(
        	'name'		=> 'Buisness',
        	'desc'		=> 'Buisness',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: adressgroups
		Schema::drop('adressgroups');	
	}
}
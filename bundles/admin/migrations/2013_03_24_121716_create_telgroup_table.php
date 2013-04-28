<?php

class Admin_Create_Telgroup_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: telgroups
		Schema::create('telgroups', function($table){
            
            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->string('name', 64);
            $table->string('desc', 200);

            $table->timestamps();
        });

        DB::table('telgroups')->insert(array(
			'name'		=> 'Friends',
        	'desc'		=> 'Friends',
        ));
 
        DB::table('telgroups')->insert(array(
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
		// Drop Schema: telgroups
		Schema::drop('telgroups');	
	}

}
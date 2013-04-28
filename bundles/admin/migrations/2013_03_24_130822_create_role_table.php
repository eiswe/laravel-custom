<?php

class Admin_Create_Role_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
		// add database schema: roles
		Schema::create('roles', function($table){

			$table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->string('name', 64);
            $table->string('desc', 200);

            $table->timestamps();
        });

        DB::table('roles')->insert(array(
			'name'		=> 'admin',
        	'desc'		=> 'user with root rights',
        ));
 
        DB::table('roles')->insert(array(
        	'name'		=> 'user',
        	'desc'		=> 'normal user',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: roles
		Schema::drop('roles');	
	}
}
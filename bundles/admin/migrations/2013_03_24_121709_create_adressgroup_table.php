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
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his bookmarkgroups would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('name', 64);
            $table->string('desc', 200);

            $table->timestamps();
        });

        DB::table('adressgroups')->insert(array(
            'admin_id'      => '2',
			'name'		=> 'Friends',
        	'desc'		=> 'Friends',
        ));
 
        DB::table('adressgroups')->insert(array(
            'admin_id'      => '2',
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
<?php

class Admin_Create_Notegroup_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: notegroups
		Schema::create('notegroups', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his notegroups would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('title', 64);
            $table->string('desc', 1024)->nullable();

            $table->timestamps();
        });

        DB::table('notegroups')->insert(array(
        	'admin_id'		=> '1',
        	'title'			=> 'First notegroup',
        	'desc'			=> 'This is my first notegroup!',
        ));

        DB::table('notegroups')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'First notegroup',
        	'desc'			=> 'This is my first notegroup!',
        ));
              
        DB::table('notegroups')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'Second notegroup',
        	'desc'			=> 'This is my second notegroup!',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: notegroups
		Schema::drop('notegroups');
	}
}
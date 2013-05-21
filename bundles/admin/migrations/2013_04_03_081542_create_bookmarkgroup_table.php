<?php

class Admin_Create_Bookmarkgroup_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: bookmarkgroups
		Schema::create('bookmarkgroups', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his bookmarkgroups would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('title', 64);
            $table->string('desc', 1024)->nullable();

            $table->timestamps();
        });

        DB::table('bookmarkgroups')->insert(array(
        	'admin_id'		=> '1',
        	'title'			=> 'First bookmark group',
        	'desc'			=> 'This is my first bookmark group!',
        ));

        DB::table('bookmarkgroups')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'First bookmark group',
        	'desc'			=> 'This is my first bookmark group!',
        ));
              
        DB::table('bookmarkgroups')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'Second bookmark group',
        	'desc'			=> 'This is my second bookmark group!',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: bookmarkgroups
		Schema::drop('bookmarkgroups');
	}
}
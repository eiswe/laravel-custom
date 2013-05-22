<?php

class Admin_Create_Status_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		// add database schema: status
		Schema::create('status', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his status would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('title', 64);
            $table->string('desc', 1024)->nullable();

            $table->timestamps();
        });

        DB::table('status')->insert(array(
        	'admin_id'		=> '1',
        	'title'			=> 'First status',
        	'desc'			=> 'This is my first status!',
        ));

        DB::table('status')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'First status',
        	'desc'			=> 'This is my first status!',
        ));
              
        DB::table('status')->insert(array(
            'admin_id'      	=> '2',
        	'title'			=> 'Second status',
        	'desc'			=> 'This is my second status!',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: status
		Schema::drop('status');
	}
}
<?php

class Admin_Create_Note_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: notes
		Schema::create('notes', function($table){
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();
            
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');
            
            $table->string('title', 200);
            $table->string('desc', 32);

            $table->timestamps();
        });

        DB::table('notes')->insert(array(
        	'admin_id'		=> '2',
        	'title'		=> 'short Note',
        	'desc'	=> 'first short Note...',
        ));

        DB::table('notes')->insert(array(
            'admin_id'      => '2',
            'title'		=> 'little Note',
        	'desc'  => 'second short Note...',
        ));
              
        DB::table('notes')->insert(array(
            'admin_id'      => '3',
            'title'		=> 'short Note',
        	'desc'  => 'first short Note...',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: users
		Schema::drop('notes');
	}
}
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
            
            $table->engine = 'InnoDB';

            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();
            
            $table->foreign('admin_id')  // with admin all his data will lost...
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
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
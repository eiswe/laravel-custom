<?php

class Admin_Create_Task_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: tasks
		Schema::create('tasks', function($table){
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();
            
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');
            
            $table->string('start', 200);
            $table->string('ende', 32)->nullable();
            
            $table->string('title', 64);
            $table->string('desc', 320)->nullable();
            
            $table->timestamps();
        });

        DB::table('tasks')->insert(array(
        	
            'admin_id'		=> '2',
        	
            'start'			=> '15-02-2013', // PHP TimeStamp
        	'ende'			=> '15-02-2013',
        	'title'			=> 'First Task',
        	'desc'			=> 'This is my first task!',
        ));

        DB::table('tasks')->insert(array(
            
            'admin_id'      	=> '3',
        	
            'start'			=> '15-02-2013', // PHP TimeStamp
        	'ende'			=> '15-02-2013',
        	'title'			=> 'First Task',
        	'desc'			=> 'This is my first task!',
        ));
              
        DB::table('tasks')->insert(array(
            
            'admin_id'      	=> '2',
        	
            'start'			=> '15-02-2013', // PHP TimeStamp
        	'ende'			=> '15-02-2013',
        	'title'			=> 'Second Task',
        	'desc'			=> 'This is my second task!',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: users
		Schema::drop('tasks');
	}
}
<?php

class Admin_Create_Todo_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: todos
		Schema::create('todos', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();
            $table->integer('todostatus_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his todos would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->foreign('todostatus_id')  // if todostatus dies todos leave alive
                ->references('id')
                ->on('todostatus')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('title', 64);
            $table->string('desc', 1024)->nullable();

            $table->timestamps();
        });


        DB::table('todos')->insert(array(
        	'admin_id'		=> '2',
        	'todostatus_id'	=> '1',
        	'title'			=> 'First todo',
        	'desc'			=> 'This is my first todo!',
        ));

        DB::table('todos')->insert(array(
            'admin_id'      	=> '3',
        	'todostatus_id'	=> '1',
        	'title'			=> 'First todo',
        	'desc'			=> 'This is my first todo!',
        ));
              
        DB::table('todos')->insert(array(
            'admin_id'      	=> '2',
        	'todostatus_id'	=> '1',
        	'title'			=> 'Second todo',
        	'desc'			=> 'This is my second todo!',
        ));


	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: todos
		Schema::drop('todos');
	}
}
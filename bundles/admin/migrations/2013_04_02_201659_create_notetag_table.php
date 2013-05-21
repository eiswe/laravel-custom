<?php

class Admin_Create_Notetag_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: notetags
		Schema::create('notetags', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his todos would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->string('title', 64);
            $table->string('desc', 1024)->nullable();

            $table->timestamps();
        });

        DB::table('notetags')->insert(array(
        	'admin_id'		=> '2',

        	'title'			=> 'First NoteTag',
        	'desc'			=> 'This is my first noteTag!',
        ));

        DB::table('notetags')->insert(array(
            'admin_id'      	=> '3',

        	'title'			=> 'First NoteTag',
        	'desc'			=> 'This is my first noteTag!',
        ));
              
        DB::table('notetags')->insert(array(
            'admin_id'      	=> '2',

        	'title'			=> 'Second NoteTag',
        	'desc'			=> 'This is my second noteTag!',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: notetags
		Schema::drop('notetags');
	}

}
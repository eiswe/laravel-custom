<?php

class Admin_Create_Bookmark_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: bookmarks
		Schema::create('bookmarks', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('title', 32);
            $table->string('link', 200);
            $table->string('path', 200);

            $table->timestamps();
        });

        DB::table('bookmarks')->insert(array(
        	'admin_id'	=> '2',
        	
        	'title'		=> 'GMail',
        	'link'      => 'http://gmail.com/',
            'path'      => 'http://gmail.com/',
        ));

        DB::table('bookmarks')->insert(array(
        	'admin_id'	=> '1',
        	
        	'title'		=> 'GMail',
        	'link'		=> 'http://gmail.com/',
            'path'      => 'http://gmail.com/',
        ));

        DB::table('bookmarks')->insert(array(
        	'admin_id'		=> '3',
        	
        	'title'		=> 'GMail',
        	'link'		=> 'http://gmail.com/',
            'path'      => 'http://gmail.com/',
        ));

        DB::table('bookmarks')->insert(array(
        	'admin_id'		=> '2',
        	
        	'title'		=> 'Outlook',
        	'link'		=> 'http://login.live.com/',
            'path'      => 'http://gmail.com/',
        ));       

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: users
		Schema::drop('bookmarks');
	}
}
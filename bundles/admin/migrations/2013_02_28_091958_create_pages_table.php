<?php

class Admin_Create_Pages_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: pages
		Schema::create('pages', function($table){
            $table->increments('id');
            $table->string('title', 32)->unique();
            $table->string('description', 64);
            $table->string('text');
            $table->integer('admin_id');
            $table->timestamps();
        });

        DB::table('pages')->insert(array(
        	'title'			=> 'Some Title',
        	'description'	=> 'some description..',
        	'text'			=> 'here is some random text i wrote in my boring time xD',
        	'admin_id'		=> '1'
        ));
        
        DB::table('pages')->insert(array(
        	'title'			=> '2nd Title',
        	'description'	=> 'Second description..',
        	'text'			=> 'here is some other random text i wrote in my boring time xD',
        	'admin_id'		=> '2'
        ));

        DB::table('pages')->insert(array(
        	'title'			=> '3rd Title',
        	'description'	=> 'Third description..',
        	'text'			=> 'here is some other random text i wrote in my boring time xD',
        	'admin_id'		=> '1'
        ));        

        DB::table('pages')->insert(array(
        	'title'			=> 'Some other Title',
        	'description'	=> 'some other description..',
        	'text'			=> 'here is some other random text i wrote in my boring time xD',
        	'admin_id'		=> '1'
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: pages
		Schema::drop('pages');
	}
}
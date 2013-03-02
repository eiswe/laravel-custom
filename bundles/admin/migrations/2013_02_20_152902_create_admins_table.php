<?php

class Admin_Create_Admins_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: admins
		Schema::create('admins', function($table){
            $table->increments('id');
            $table->string('name', 200);
            $table->string('username', 32)->unique();
            $table->string('password', 64);
            $table->string('email', 320)->unique();
            $table->string('role', 32);
            $table->timestamps();
        });

        DB::table('admins')->insert(array(
        	'id'		=> '1',
        	'name'		=> 'David Crimi',
        	'username'	=> 'root',
        	'password'	=> Hash::make('qwert'),
        	'email'		=> 'deathpoison.dc@gmail.com',
        	'role'		=> 'admin'
        ));

        DB::table('admins')->insert(array(
        	'id'		=> '2',
        	'name'		=> 'David Crimi',
        	'username'	=> 'dcrimi',
        	'password'	=> Hash::make('qwert'),
        	'email'		=> 'dcrimi@dvs.de',
        	'role'		=> 'admin'
        ));
        DB::table('admins')->insert(array(
        	'id'		=> '3',        	
        	'name'		=> 'Michael Bethwell',
        	'username'	=> 'bethwell',
        	'password'	=> Hash::make('qwert'),
        	'email'		=> 'bethwell@dvs.de',
        	'role'		=> 'admin'
        ));                
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: admins
		Schema::drop('admins');
	}

}
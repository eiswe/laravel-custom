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
            $table->increments('id')->unique();
            $table->string('name', 200);
            $table->string('username', 32)->unique();
            $table->string('password', 64);
            $table->string('email', 320)->unique();
            $table->string('role', 32);
            $table->timestamps();
        });

        DB::table('admins')->insert(array(
        	'name'		=> 'David Crimi',
        	'username'	=> 'root',
        	'password'	=> Hash::make('qwert'),
        	'email'		=> 'deathpoison.dc@gmail.com',
        	'role'		=> 'admin'
        ));

        DB::table('admins')->insert(array(
            'name'      => 'David Crimi',
            'username'  => 'dcrimi',
            'password'  => Hash::make('qwert'),
            'email'     => 'dcrimi@dvs.de',
            'role'      => 'admin'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Viktor Ananev',
            'username'  => 'ananev',
            'password'  => Hash::make('qwert'),
            'email'     => 'ananev@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Michael Bethwell',
            'username'  => 'bethwell',
            'password'  => Hash::make('qwert'),
            'email'     => 'bethwell@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Ralf Stolz',
            'username'  => 'stolz',
            'password'  => Hash::make('qwert'),
            'email'     => 'stolz@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Julia Justus',
            'username'  => 'justus',
            'password'  => Hash::make('qwert'),
            'email'     => 'justus@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Vassilios Giourgas',
            'username'  => 'giourgas',
            'password'  => Hash::make('qwert'),
            'email'     => 'giourgas@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Mark Schmalenberg',
            'username'  => 'schmalenberg',
            'password'  => Hash::make('qwert'),
            'email'     => 'schmalenberg@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Michael Scholz',
            'username'  => 'scholz',
            'password'  => Hash::make('qwert'),
            'email'     => 'scholz@dvs.de',
            'role'      => 'user'
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Service Abteilung',
            'username'  => 'service',
            'password'  => Hash::make('dvs'),
            'email'     => 'service@dvs.de',
            'role'      => 'user'
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
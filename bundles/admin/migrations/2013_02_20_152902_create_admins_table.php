<?php

class Admin_Create_Admins_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

        // add database schema: admins
        Schema::create('admins', function($table){
            
            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();
            
            $table->string('name', 200);
            $table->string('username', 32)->unique();
            $table->string('password', 64);
            
            $table->timestamps();
        });

        DB::table('admins')->insert(array(
            'name'      => 'David',
            'username'  => 'root',
            'password'  => Hash::make('qwert'),
        ));

        DB::table('admins')->insert(array(
            'name'      => 'David',
            'username'  => 'dcrimi',
            'password'  => Hash::make('qwert'),
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Volker',
            'username'  => 'volker',
            'password'  => Hash::make('qwert'),
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Paolo Crimi',
            'username'  => 'paolo',
            'password'  => Hash::make('qwert'),
        ));
              
        DB::table('admins')->insert(array(
            'name'      => 'Kevin Sieg',
            'username'  => 'Kazzo',
            'password'  => Hash::make('qwert'),
        ));
                  
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: admins
		Schema::drop('admins');
	}
}
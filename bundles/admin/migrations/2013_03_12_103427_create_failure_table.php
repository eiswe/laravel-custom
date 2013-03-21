<?php

class Admin_Create_Failure_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){

		// add database schema: failure
		Schema::create('failure', function($table){
            $table->increments('id')->unique();
            $table->string('name', 20)->unique();
            $table->string('description', 64);
            $table->timestamps();
        });

        DB::table('failure')->insert(array(
        	'name'			=> 'mechanical Damage',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'Soldering Issue',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'Firmware reload',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'Genlock issues',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'DRAM',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'IC0301 Virtex',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'Clock Switch',
        	'description'	=> 'A Description',
        ));

        DB::table('failure')->insert(array(
        	'name'			=> 'DVI or analog out',
        	'description'	=> 'A Description',
        ));
        DB::table('failure')->insert(array(
        	'name'			=> 'SDI',
        	'description'	=> 'A Description',
        ));
        DB::table('failure')->insert(array(
        	'name'			=> 'Others',
        	'description'	=> 'A Description',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: failure
		Schema::drop('failure');
	}

}
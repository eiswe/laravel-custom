<?php

class Admin_Create_Adress_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: adress
		Schema::create('adress', function($table){
            
            $table->increments('id')            ->unique();

            $table->integer('admin_id')        ->unsigned();
            $table->integer('adressgroup_id')  ->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->foreign('adressgroup_id')
                ->references('id')
                ->on('adressgroups')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('Title', 200)        ->nullable();       // Here we will generate some redundant data...
            $table->string('FirstName', 200)    ->nullable();
            $table->string('BackName', 200)     ->nullable();
            $table->string('email', 200)        ->nullable();
            $table->string('secmail', 200)      ->nullable();
            $table->string('skype', 200)        ->nullable();
            $table->integer('icq')              ->nullable();

            $table->string('street', 200)       ->nullable();
            $table->string('houseno', 200)      ->nullable();
            $table->integer('plz')              ->nullable();
            $table->string('city', 200)         ->nullable();


            $table->timestamps();
        });

        DB::table('adress')->insert(array(
			'admin_id'			=> '2',
        	'adressgroup_id'	=> '1',

            'Title'             => 'Dr.',
            'FirstName'         => 'DeathPoison',
            'BackName'          => 'LimeBlack',
            'email'             => 'deathpoison.dc@gmail.com',
            'secmail'           => 'deathpoison.dc@gmail.com',
            'skype'             => 'deathpoison.dc@gmail.com',
            'icq'               => '291728983',
                        
            'street'            => 'weberstr',
            'houseno'           => '3',
            'plz'               => '30826',
            'city'              => 'Garbsen',

        ));
 
        DB::table('adress')->insert(array(
			'admin_id'			=> '1',
        	'adressgroup_id'	=> '1',

            'Title'             => 'Dr.',
            'FirstName'         => 'DeathPoison',
            'BackName'          => 'LimeBlack',
            'email'             => 'deathpoison.dc@gmail.com',
            
            'street'            => 'weberstr',
            'houseno'           => '3',
            'plz'               => '30826',
            'city'              => 'Garbsen',

        ));
 
        DB::table('adress')->insert(array(
        	'admin_id'			=> '3',
        	'adressgroup_id'	=> '1',
            
            'Title'             => 'Dr.',
            'FirstName'         => 'DeathPoison',
            'BackName'          => 'LimeBlack',
            'email'             => 'deathpoison.dc@gmail.com',
            
            'street'            => 'weberstr',
            'houseno'           => '3',
            'plz'               => '30826',
            'city'              => 'Garbsen',

        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: adress
		Schema::drop('adress');
	}
}
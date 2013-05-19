<?php

class Admin_Create_Profile_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{

/*  My Playground

## Primary Key
$table->primary('id');  Adding a primary key

## Composite Key
$table->primary(array('fname', 'lname'));   Adding composite keys

## Foreign Key
$table->foreign('user_id')->references('id')->on('users');

You may also specify options for the "on delete" and "on update" actions of the foreign key:

$table->foreign('user_id')->references('id')->on('users')->on_delete('restrict');

$table->foreign('user_id')->references('id')->on('users')->on_update('cascade');

*/

        // add database schema: profiles
        Schema::create('profiles', function($table){

            $table->engine = 'InnoDB';

            $table->increments('id')            ->unique();

            $table->boolean('starred')          ->nullable();

            $table->integer('admin_id')         ->unsigned()->unique();
            $table->integer('role_id')          ->unsigned();

            $table->foreign('admin_id') // with admin all his data will lost...
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->foreign('role_id') // if role dies admins keep alive
                ->references('id')
                ->on('roles')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('frontname', 32)     ->nullable();
            $table->string('backname', 64)      ->nullable();
            $table->string('email', 1024)       ->nullable();

            $table->date('born')                ->nullable();
            $table->string('family', 32)        ->nullable();
            $table->string('strasse', 32)       ->nullable();
            $table->integer('plz')              ->nullable();
            $table->string('ort', 32)           ->nullable();
            $table->string('land', 32)          ->nullable();
            $table->string('sprache', 32)       ->nullable();
            $table->string('handy')             ->nullable();
            $table->string('tel')               ->nullable();
            $table->integer('icq')              ->nullable();
            $table->string('firma', 32)         ->nullable();
            $table->string('job', 32)           ->nullable();
            $table->string('project', 32)       ->nullable();
            
            $table->timestamps();

        });

        DB::table('profiles')->insert(array(
            'starred'   => false,
            'admin_id'   => '1',
            'role_id'   => '1',
            'frontname' => 'David',
            'backname'  => 'Crimi',
            'email'     => 'deathpoison.dc@gmail.com',
            'born'      => '02.05.1991',
            'family'    => 'single',
            'strasse'   => 'Weberstr. 3',
            'plz'       => '30827',
            'ort'       => 'Garbsen',
            'land'      => 'Deutschland',
            'sprache'   => 'Deutsch',
            'handy'     => '01717621492',
            'tel'       => '0513197295',
            'icq'       => '291728983',
            'firma'     => 'DVS a Rohde & Schwarz GmbH',
            'job'       => 'IT-Spezialist',
            'project'   => 'Laravel - QuadroCopter',
        ));

        DB::table('profiles')->insert(array(
            'starred'   => true,
            'admin_id'   => '2',
            'role_id'   => '2',
            'frontname' => 'David',
            'backname'  => 'Crimi',
            'email'     => 'deathpoison.dc@gmail.com',
            'born'      => '02.05.1991',
            'family'    => 'single',
            'strasse'   => 'Weberstr. 3',
            'plz'       => '30827',
            'ort'       => 'Garbsen',
            'land'      => 'Deutschland',
            'sprache'   => 'Deutsch',
            'handy'     => '01717621492',
            'tel'       => '0513197295',
            'icq'       => '291728983',
            'firma'     => 'DVS a Rohde & Schwarz GmbH',
            'job'       => 'IT-Spezialist',
            'project'   => 'Laravel - QuadroCopter',            
        ));

        DB::table('profiles')->insert(array(
            'starred'   => false,
            'admin_id'   => '3',
            'role_id'   => '2',
            'frontname' => 'Volker',
            'backname'  => 'Dewald',
            'email'     => 'volker@gmx.com',           
        ));

        DB::table('profiles')->insert(array(
            'starred'   => true,
            'admin_id'   => '4',
            'role_id'   => '2',
            'frontname' => 'Paolo',
            'backname'  => 'Crimi',
            'email'     => 'crimi@gmx.com',
            'born'      => '12.11.1992',
            'family'    => 'single',
            'strasse'   => 'Weberstr',
            'plz'       => '30827',
            'ort'       => 'Garbsen',
            'land'      => 'Deutschland',
            'sprache'   => 'Deutsch',
            'handy'     => '0123',
            'tel'       => '0513197295',
            'icq'       => '0123',
            'firma'     => 'Crimi GmbH',
            'job'       => 'Head of Production',
            'project'   => 'Mini Bartagam!',            
        ));

        DB::table('profiles')->insert(array(
            'starred'   => true,
            'admin_id'   => '5',
            'role_id'   => '2',
            'frontname' => 'Kazzo',
            'backname'  => 'Sieg',
            'email'     => 'sieg@gmx.com', 
            'born'      => '13.05.1975',
            'family'    => 'single',
            'strasse'   => 'Gosse',
            'plz'       => '30827',
            'ort'       => 'Berenbostel',
            'land'      => 'Deutschland',
            'sprache'   => 'Deutsch',
            'handy'     => '0180666666',
            'tel'       => '0180000000',
            'icq'       => '123456789',
            'firma'     => 'Crimi GmbH',
            'job'       => 'DJ',
            'project'   => 'Beat Production',            
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop profiles
		Schema::drop('profiles');
	}
}
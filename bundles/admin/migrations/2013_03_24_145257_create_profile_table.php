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

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->on_delete('restrict')
                ->on_update('cascade');


            $table->string('frontname', 32)     ->nullable();
            $table->string('backname', 64)      ->nullable();
            $table->string('email', 1024)       ->nullable();
            
            $table->timestamps();

        });


        DB::table('profiles')->insert(array(
            'starred'   => false,
            'admin_id'   => '1',
            'role_id'   => '1',
            'frontname' => 'David',
            'backname'  => 'Crimi',
            'email'     => 'deathpoison.dc@gmail.com',
        ));

        DB::table('profiles')->insert(array(
            'starred'   => true,
            'admin_id'   => '2',
            'role_id'   => '2',
            'frontname' => 'David',
            'backname'  => 'Crimi',
            'email'     => 'deathpoison.dc@gmail.com',
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
        ));

        DB::table('profiles')->insert(array(
            'starred'   => true,
            'admin_id'   => '5',
            'role_id'   => '2',
            'frontname' => 'Kazzo',
            'backname'  => 'Sieg',
            'email'     => 'sieg@gmx.com', 
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
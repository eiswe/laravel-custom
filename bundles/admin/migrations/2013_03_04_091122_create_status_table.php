<?php

class Admin_Create_Status_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		// add database schema: status
		Schema::create('status', function($table){
            $table->increments('id')->unique();
            $table->string('name', 20)->unique();
            $table->string('description', 64);
            $table->timestamps();
        });

        DB::table('status')->insert(array(
        	'name'			=> 'nicht getestet',
        	'description'	=> 'noch nicht angeguckt',
        ));
        DB::table('status')->insert(array(
        	'name'			=> 'repariert',
        	'description'	=> 'Karte wieder repariert!',
        ));
        DB::table('status')->insert(array(
        	'name'			=> 'schrott',
        	'description'	=> 'Karte ist nicht reparabel!',
        ));
        DB::table('status')->insert(array(
            'name'          => 'Lager',
            'description'   => 'war iO und ist wieder im Lager!',
        ));
        DB::table('status')->insert(array(
            'name'          => 'in Arbeit',
            'description'   => 'wurde übergeben, muss bearbeitet werden!',
        ));
        DB::table('status')->insert(array(
            'name'          => 'nicht Reproduzierbar',
            'description'   => 'der beschriebene Fehler kann nicht nachvollzogen werden!',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database by reset
        Schema::drop('status');
	}

}
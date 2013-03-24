<?php

class Admin_Create_Text_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: texts
		Schema::create('texts', function($table){

            $table->increments('id')->unique();

            $table->integer('userid');

            $table->string('text', 2048)->nullable();

            $table->timestamps();
        });

        DB::table('texts')->insert(array(
            'userid'        => '2',
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'userid'        => '2',
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
      ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: texts
		Schema::drop('texts');
	}

}

/*
        DB::table('texts')->insert(array(
            'userid'        => '2',
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'userid'        => '2',
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
      ));
*/
<?php

class Admin_Create_Testdata_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{/*
		// add database schema: testdata
		Schema::create('testdata', function($table)
        {
            $table->increments('id');
            $table->string('title', 200)->unique();
            $table->string('body', 1000);
            $table->string('user', 32);
            $table->timestamps();
        }); */
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{/*
		// drop database schema: admins
		Schema::drop('testdata');
	*/}

}
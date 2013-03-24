<?php

class Admin_Create_Image_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: images
		Schema::create('images', function($table){

            $table->increments('id')->unique();

            $table->integer('userid');

            $table->string('desc', 64)->nullable();
            $table->string('path', 64);

            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: images
		Schema::drop('images');
	}

}


/*
        DB::table('cards')->insert(array(
            'serialnumber'  => '28120123',
            'userid'        => '3',
            'cardtype'      => '6',
            'errortype'     => '7',
            'status'        => '4',
            'failure'       => '6',
            'ausort'        => '1',
            'testdate'      => '21.12.2012',
      ));

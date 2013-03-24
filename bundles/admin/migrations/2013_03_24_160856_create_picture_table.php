<?php

class Admin_Create_Picture_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: pictures
		Schema::create('pictures', function($table){

            $table->increments('id')->unique();

            $table->integer('userid');

            $table->string('desc', 64)->nullable();
            $table->string('path', 64);

            $table->timestamps();
        });

        DB::table('pictures')->insert(array(
            'userid'        => '2',
            'desc'      	=> 'Beautiful placeholder',
            'path' 		    => 'http://placehold.it/64x64',
      ));


	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: pictures
		Schema::drop('pictures');
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
*/
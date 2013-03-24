<?php

class Admin_Create_Page_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: 
		Schema::create('pages', function($table){

            $table->increments('id')->unique();

            $table->integer('userid');

            $table->string('title', 12);
            $table->string('style', 64);
            $table->string('desc', 64)->nullable();

            $table->integer('texts')	->nullable();
            $table->integer('images')	->nullable();
            $table->integer('movies')	->nullable();
            
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
		// drop database schema: pages
		Schema::drop('pages');
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

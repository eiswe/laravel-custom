<?php

class Admin_Create_Histories_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		// add database schema: histories
		Schema::create('histories', function($table){
            $table->increments('id')->unique();
            $table->string('cardid', 16);
            $table->string('userid', 16);
            $table->string('action', 64);
            $table->string('fields', 1024);
            $table->string('values', 1024);
            $table->timestamps();
        });

		// create a short array with changed fields - for testing
		$fields	= array( 'sn', 'cardid', 'userid' );
        //convert array to string - reolve with explode()
        $fieldstr = implode(",", $fields);

		// create a short array with changed values - for testing
		$values	= array( '28124567', '1', '1' );
        $valuestr = implode(",", $values);

        DB::table('histories')->insert(array(
        	'cardid'		=> '1',
        	'userid'		=> '1',
        	'action'		=> 'insert',
        	'fields'		=> $fieldstr,
        	'values'		=> $valuestr,
        ));

		// create a short array with changed values - for testing
		$values	= array( '28120123', '1', '2' );
        $valuestr = implode(",", $values);

        DB::table('histories')->insert(array(
        	'cardid'		=> '1',
        	'userid'		=> '2',
        	'action'		=> 'update',
        	'fields'		=> $fieldstr,
        	'values'		=> $valuestr,
        ));        
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop histories table
		Schema::drop('histories');
	}

}

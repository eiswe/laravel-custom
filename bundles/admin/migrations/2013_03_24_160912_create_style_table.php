<?php

class Admin_Create_Style_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: styles
		Schema::create('styles', function($table){

	        $table->increments('id')->unique();

	        $table->string('desc', 64)->nullable();
	        $table->string('name', 32)->nullable();
	        $table->string('structure', 2048)->nullable();		// {title,desc,image,text}

	        $table->timestamps();
	    });

		// create a short array with only one item xD - for testing
		$structure	= array( 'title', 'text' );
        $structurestr = implode(",", $structure);

        DB::table('styles')->insert(array(
            'desc'  		=> 'only text',
            'name'        	=> 'Text',
            'structure'    => $structurestr,
      	));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: styles
		Schema::drop('styles');
	}

}


/*
		// create a short array with changed values - for testing
		$values	= array( '28124567', '1', '1' );
        $valuestr = implode(",", $values);

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
<?php

class Admin_Create_Bone_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: bones
		Schema::create('bones', function($table){

	        $table->increments('id')->unique();
	        $table->string('name', 32)->nullable();
	        $table->string('desc', 128)->nullable();
	        $table->string('fieldName', 32)->nullable();		// {title,desc,image,text}
	        $table->string('fieldType', 32)->nullable();		// {title,desc,image,text}
	        $table->integer('weight')->nullable();				// {title,desc,image,text}
	        $table->string('relation', 32)->nullable();		// {title,desc,image,text}

	        $table->timestamps();
	    });

        DB::table('bones')->insert(array( 			// insert testdata: Text
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'Titel',
            'fieldType'    	=> 'text',
            'weight'        => 1,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'weight'        => 2,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'text',
            'fieldType'    	=> 'textarea',
            'weight'        => 3,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array( 			// insert testdata: Gallery
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert Title',
            'fieldName'    	=> 'Titel',
            'fieldType'    	=> 'text',
            'weight'        => 1,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert description',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'weight'        => 2,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'name'        	=> 'Gallery',
            'desc'  		=> 'Want Pictures?',
            'fieldName'    	=> 'Display Pictures',
            'fieldType'    	=> 'boolean',
            'weight'        => 3,
            'relation'     	=> 'pictures',
      	));



       //  DB::table('styles')->insert(array(
       //      'name'        	=> 'Profile',
       //      'desc'  		=> 'only text',
       //      'fieldName'    	=> 'Titel',
       //      'fieldType'    	=> 'text',
       //      'weight'        => 5,
       //      'relation'     	=> 'username',
      	// ));

       //  DB::table('styles')->insert(array(
       //      'name'        	=> 'Profile',
       //      'desc'  		=> 'only text',
       //      'fieldName'    	=> 'Desc',
       //      'fieldType'    	=> 'text',
       //      'weight'        => 5,
       //      'relation'     	=> '',
      	// ));
       //  DB::table('styles')->insert(array(
       //      'name'        	=> 'Profile',
       //      'desc'  		=> 'only text',
       //      'fieldName'    	=> 'Titel',
       //      'fieldType'    	=> 'text',
       //      'weight'        => 5,
       //      'relation'     	=> '',
      	// ));
       //  DB::table('styles')->insert(array(
       //      'name'        	=> 'Profile',
       //      'desc'  		=> 'only text',
       //      'fieldName'    	=> 'Titel',
       //      'fieldType'    	=> 'text',
       //      'weight'        => 5,
       //      'relation'     	=> '',
      	// ));


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
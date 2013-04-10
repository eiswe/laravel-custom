<?php

class Admin_Create_Bonelist_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		// add database schema: bonelist
		Schema::create('bonelist', function($table){

	        $table->increments('id')->unique();
            $table->integer('admin_id');
	        $table->string('name', 32)->nullable();
	        $table->string('desc', 128)->nullable();
	        $table->integer('weight')->nullable();

	        $table->timestamps();
	    });

        DB::table('bonelist')->insert(array( 			// insert testdata: Text
            'admin_id'  	=> 2,            
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'weight'        => 1,
      	));

        DB::table('bonelist')->insert(array( 			// insert testdata: Gallery
            'admin_id'  	=> 2,
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert Title',
            'weight'        => 1,
      	));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: bonelist
		Schema::drop('bonelist');	}
}




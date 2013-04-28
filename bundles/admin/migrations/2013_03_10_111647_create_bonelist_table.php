<?php

class Admin_Create_Bonelist_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: bonelists
		Schema::create('bonelists', function($table){

            $table->engine = 'InnoDB';
            
	        $table->increments('id')->unique();
            
            $table->integer('admin_id')->unsigned();
	        
            $table->foreign('admin_id')->references('id')->on('admins')->on_delete('cascade');
            
            $table->string('name', 32)->nullable();
	        $table->string('desc', 128)->nullable();
	        $table->integer('weight')->nullable();

	        $table->timestamps();
	    });

        DB::table('bonelists')->insert(array( 			// insert testdata: Text
            'admin_id'  	=> 2,            
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Gallery
            'admin_id'  	=> 2,
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert Title',
            'weight'        => 1,
      	));

      	DB::table('bonelists')->insert(array( 			// insert testdata: Text
            'admin_id'  	=> 1,            
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Gallery
            'admin_id'  	=> 1,
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert Title',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Text
            'admin_id'  	=> 3,            
            'name'        	=> 'Text',
            'desc'  		=> 'only text',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Gallery
            'admin_id'  	=> 3,
            'name'        	=> 'Gallery',
            'desc'  		=> 'insert Title',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Text
            'admin_id'  	=> 2,            
            'name'        	=> 'Foto',
            'desc'  		=> 'only Foto',
            'weight'        => 1,
      	));

        DB::table('bonelists')->insert(array( 			// insert testdata: Gallery
            'admin_id'  	=> 4,
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
	public function down() {
		// drop database schema: bonelists
		Schema::drop('bonelists');	
	}
}




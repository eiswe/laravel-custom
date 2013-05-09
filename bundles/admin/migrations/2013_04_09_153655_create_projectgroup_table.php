<?php

class Admin_Create_Projectgroup_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: projectgroups
		Schema::create('projectgroups', function($table){

            $table->engine = 'InnoDB';
            
	        $table->increments('id')		->unique();
            
            $table->integer('admin_id')    	->unsigned();
            
            $table
            	->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('title', 32);                // title    20
            $table->string('desc', 64)      ->nullable();         // desc     64

	        $table->timestamps();
	    });

        DB::table('projectgroups')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 2,
            'title'  			=> 'QuadroCopter',
            'desc'  			=> 'My first Project',
      	));
	    
        DB::table('projectgroups')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 1,
            'title'  			=> 'QuadroCopter',
            'desc'  			=> 'My first Project',            
      	));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: projectgroups
		Schema::drop('projectgroups');	
	}

}
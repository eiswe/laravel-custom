<?php

class Admin_Create_Project_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: projects
		Schema::create('projects', function($table){

            $table->engine = 'InnoDB';
            
	        $table->increments('id')		->unique();
            
            $table->integer('admin_id')    	->unsigned();
            $table->integer('page_id') 		->unsigned();
            $table->integer('projectgroup_id')      ->unsigned();            

            $table
            	->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table
            	->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table
            	->foreign('projectgroup_id')
                ->references('id')
                ->on('projectgroups')
                ->on_delete('restrict')
                ->on_update('cascade');

	        $table->timestamps();
	    });

        DB::table('projects')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 2,
            'page_id'  			=> 2,
            'projectgroup_id'  	=> 2,
      	));
	    
        DB::table('projects')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 2,
            'page_id'  			=> 5,
            'projectgroup_id'  	=> 2,            
      	));
	    
        DB::table('projects')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 2,
            'page_id'  			=> 4,
            'projectgroup_id'  	=> 2,            
      	));
	    
        DB::table('projects')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 1,
            'page_id'  			=> 2,
            'projectgroup_id'  	=> 1,            
      	));
	    
        DB::table('projects')->insert(array( 			// insert testdata: Text
            'admin_id'  		=> 1,
            'page_id'  			=> 3,
            'projectgroup_id'  	=> 1,
      	));
	    
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: projects
		Schema::drop('projects');	
	}

}
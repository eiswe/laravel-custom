<?php

class Admin_Create_Hobbie_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
        // add database schema: hobbies
		Schema::create('hobbies', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->string('hobbie', 200);
            $table->boolean('active');

            $table->timestamps();
        });

        DB::table('hobbies')->insert(array(
			
            'admin_id'	=> '2',

        	'hobbie'	=> 'Coding',
        	'active'	=> true,
        ));

        DB::table('hobbies')->insert(array(
			
            'admin_id'	=> '2',

        	'hobbie'	=> 'QuadroCopter',
        	'active'	=> true,
        ));
 
        DB::table('hobbies')->insert(array(
        	
            'admin_id'	=> '2',

        	'hobbie'	=> 'Tauchen',
        	'active'	=> true,
        ));
 
        DB::table('hobbies')->insert(array(
        	
            'admin_id'	=> '2',

        	'hobbie'	=> 'Sizilien',
        	'active'	=> true,
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: hobbies
		Schema::drop('hobbies');
	}
}
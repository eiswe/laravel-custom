<?php

class Admin_Create_Language_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
		// add database schema: languages
		Schema::create('languages', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');
            
            $table->string('language', 200);
            $table->boolean('mother');

            $table->timestamps();
        });

        DB::table('languages')->insert(array(
			'admin_id'	=> '2',
        	'language'	=> 'italia',
        	'mother'	=> false,
        ));
 
        DB::table('languages')->insert(array(
        	'admin_id'	=> '2',
        	'language'	=> 'deutschland',
        	'mother'	=> true,
        ));
 
        DB::table('languages')->insert(array(
        	'admin_id'	=> '3',
        	'language'	=> 'deutschland',
        	'mother'	=> true,
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: languages
		Schema::drop('languages');
	}

}
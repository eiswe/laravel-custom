<?php

class Admin_Create_Countrie_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
		// add database schema: countries
		Schema::create('countries', function($table){
            
            $table->increments('id')->unique();

            $table->integer('admin_id')	->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');
            
            $table->string('countrie', 200);
            $table->boolean('born');

            $table->timestamps();
        });

        DB::table('countries')->insert(array(
			'admin_id'	=> '2',
        	'countrie'	=> 'italia',
        	'born'		=> false,
        ));
 
        DB::table('countries')->insert(array(
        	'admin_id'	=> '2',
        	'countrie'	=> 'deutschland',
        	'born'		=> true,
        ));
 
        DB::table('countries')->insert(array(
        	'admin_id'	=> '3',
        	'countrie'	=> 'deutschland',
        	'born'		=> true,
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: countries
		Schema::drop('countries');
	}
}
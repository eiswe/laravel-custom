<?php

class Admin_Create_Tel_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: tels
		Schema::create('tels', function($table){
            
            $table->increments('id')        ->unique();

            $table->integer('admin_id')    ->unsigned();
            $table->integer('telgroup_id') ->unsigned();
            
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->foreign('telgroup_id')
                ->references('id')
                ->on('telgroups')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->integer('tel');
            $table->string('type', 200);    // type of phone - to list?

            $table->timestamps();
        });

        DB::table('tels')->insert(array(
        	'admin_id'      => '2',
            'telgroup_id'  => '2',
            'tel'		   => '0171123456',
        	'type'		   => 'Handy',
        ));
 
        DB::table('tels')->insert(array(
        	'admin_id'	   => '1',
            'telgroup_id'  => '2',
        	'tel'		   => '017512433',
        	'type'		   => 'Ĥandy',
        ));
 
        DB::table('tels')->insert(array(
        	'admin_id'	   => '3',
            'telgroup_id'  => '2',
        	'tel'		   => '0143234325',
        	'type'		   => 'Haus',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: tels
		Schema::drop('tels');
	}
}
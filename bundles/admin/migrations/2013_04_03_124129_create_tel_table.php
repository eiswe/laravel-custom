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

            $table->engine = 'InnoDB';
            
            $table->increments('id')        ->unique();

            $table->integer('admin_id')    ->unsigned();
            $table->integer('adress_id') ->unsigned();
            
            $table->foreign('admin_id') // with admin all his data will lost...
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->foreign('adress_id') // if telgroup dies numbers will kept!
                ->references('id')
                ->on('adress')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->integer('tel');
            $table->string('type', 200);    // type of phone - to list?

            $table->timestamps();
        });

        DB::table('tels')->insert(array(
        	'admin_id'      => '2',
            'adress_id'  => '2',
            'tel'		   => '0171123456',
        	'type'		   => 'Handy',
        ));
 
        DB::table('tels')->insert(array(
        	'admin_id'	   => '1',
            'adress_id'  => '2',
        	'tel'		   => '017512433',
        	'type'		   => 'Ĥandy',
        ));
 
        DB::table('tels')->insert(array(
        	'admin_id'	   => '3',
            'adress_id'  => '2',
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
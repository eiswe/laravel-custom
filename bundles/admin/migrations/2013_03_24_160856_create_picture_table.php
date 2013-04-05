<?php

class Admin_Create_Picture_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: pictures
		Schema::create('pictures', function($table){

            $table->increments('id')->unique();

            $table->integer('admin_id');

            $table->string('desc', 64)->nullable();
            $table->string('path', 64);
            $table->string('size', 64);

            $table->timestamps();
        });

        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/950x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/950x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/950x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/950x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));


	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: pictures
		Schema::drop('pictures');
	}

}


/*
        DB::table('cards')->insert(array(
            'serialnumber'  => '28120123',
            'admin_id'        => '3',
            'cardtype'      => '6',
            'errortype'     => '7',
            'status'        => '4',
            'failure'       => '6',
            'ausort'        => '1',
            'testdate'      => '21.12.2012',
      ));
*/
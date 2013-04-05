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

/* Pictures of No 2 */
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'First big Picture of David!',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Second big Picture of David!',
            'path'          => 'http://placehold.it/890x350',
            'size'          => 'big',
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Third big Picture of David!',
            'path'          => 'http://placehold.it/930x350',
            'size'          => 'big',
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Some of Davids small Pictures',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Some of Davids small Pictures',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Some of Davids small Pictures',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
        DB::table('pictures')->insert(array(
            'admin_id'      => '2',
            'desc'          => 'Some of Davids small Pictures',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
/* Pictures of No 2 */

/* Pictures of No 3 */
        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
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
            'admin_id'      => '3',
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
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '3',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
/* Pictures of No 3 */

/* Pictures of No 4 */
        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
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
            'admin_id'      => '4',
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
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '4',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
/* Pictures of No 4 */

/* Pictures of No 5 */
        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
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
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
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
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
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
            'path'          => 'http://placehold.it/850x350',
            'size'          => 'big',
        ));

        DB::table('pictures')->insert(array(
            'admin_id'      => '5',
            'desc'          => 'Beautiful placeholder',
            'path'          => 'http://placehold.it/64x64',
            'size'          => 'small'
        ));
/* Pictures of No 5 */


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
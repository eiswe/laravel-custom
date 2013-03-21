<?php

class Admin_Create_Cardtype_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: cardtypes
		Schema::create('cardtypes', function($table){
            $table->increments('id')->unique();
            $table->string('title', 20)->unique();
            $table->string('prerev', 64);
            $table->string('presn', 9);
            $table->timestamps();
        });

        DB::table('cardtypes')->insert(array(
            'id'            => '0',
        	'title'			=> 'V4R3 Atomix',
        	'prerev'		=> 'some rev...',
        	'presn'			=> '27',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'V4R3 DCI',
        	'prerev'		=> '9.17.19.2',
        	'presn'			=> '28',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Atomix LT 4BNC',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '42',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Atomix LT 5BNC',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '41',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Atomix HDMI',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Atomix HDMI passiv',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28xy8',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Digilab',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'JPEG',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28xy8',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Hugo',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Eddy',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28xy8',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Lucy E2',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'Lucy LT',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28xy8',
        ));
        
        DB::table('cardtypes')->insert(array(
        	'title'			=> 'RR1.2',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28',
        ));

        DB::table('cardtypes')->insert(array(
        	'title'			=> 'RR1',
        	'prerev'		=> 'some rev..',
        	'presn'			=> '28xy8',
        ));
        
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: cardstypes
		Schema::drop('cardtypes');
	}

}
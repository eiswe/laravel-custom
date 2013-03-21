<?php

class Admin_Create_Cards_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: cards
		Schema::create('cards', function($table){

            $table->increments('id')->unique();

            $table->integer('serialnumber');
            $table->integer('userid');
            $table->integer('cardtype');
            $table->integer('errortype');
            $table->integer('status');
            $table->integer('failure');

            $table->boolean('ausort')->nullable(); // boolean: 0 def, 1 ok

            $table->string('testdate', 12)->nullable();
            $table->string('time', 12)->nullable();
            $table->string('revision', 12)->nullable();
            $table->string('comment', 1024)->nullable();
            $table->string('excomment', 1024)->nullable();
            $table->string('datawe', 12)->nullable();
            $table->string('otrs', 12)->nullable();
            $table->string('pa', 12)->nullable();
            $table->string('distributor', 64)->nullable();
            $table->string('rla', 12)->nullable();
            $table->string('cpld', 8)->nullable();
            $table->string('firmware', 64)->nullable();
            $table->string('sdk', 12)->nullable();
            $table->string('hwtest', 12)->nullable();

            $table->timestamps();
        });

        DB::table('cards')->insert(array(
            'serialnumber'  => '28120123',
            'userid'        => '3',
            'cardtype'      => '6',
            'errortype'     => '7',
            'status'        => '4',
            'failure'       => '6',
            'ausort'        => '1',
            'testdate'      => '21.12.2012',
            'time'          => '3:00',
            'revision'      => '8.17.19.2', 
            'comment'       => 'Some comment!',
            'excomment'     => 'Wont open!',
            'datawe'        => '12.06.2012',
            'otrs'          => 'DVS#123456789',
            'pa'            => 'LA-29123',
            'distributor'   => 'Rohde & Schwarz Company',
            'rla'           => '54321',
            'cpld'          => '7.0.4',
            'firmware'      => '7.4.0.22_2.0.5_7.0.4',
            'sdk'           => '4.3.0.10',
            'hwtest'        => '2.1.16.4'
        ));

        DB::table('cards')->insert(array(
            'serialnumber'  => '28128123',
            'userid'        => '2',
            'cardtype'      => '3',
            'errortype'     => '8',
            'status'        => '4',            
            'failure'       => '4',
            'ausort'        => '1',
            'testdate'      => '21.12.2013',
            'time'          => '3:00',
            'revision'      => '8.17.19.2', 
            'comment'       => 'Some comment!',
            'excomment'     => 'Will not shown in Device Manager',
            'datawe'        => '12.06.2013',
            'otrs'          => 'DVS#123456789',
            'pa'            => 'LA-29123',
            'distributor'   => 'Rohde & Schwarz Company',
            'rla'           => '54321',
            'cpld'          => '7.0.4',
            'firmware'      => '7.4.0.22_2.0.5_7.0.4',
            'sdk'           => '4.3.0.10',
            'hwtest'        => '2.1.16.4'
        ));

        DB::table('cards')->insert(array(
            'serialnumber'  => '28128123',
            'userid'        => '3',
            'cardtype'      => '2',
            'errortype'     => '2',
            'status'        => '3',
            'failure'       => '8',
            'ausort'        => '0',
            'testdate'      => '21.12.2012',
            'time'          => '3:00',
            'revision'      => '8.17.19.2', 
            'comment'       => 'Some comment!',
            'excomment'     => 'Will not shown in Device Manager',
            'datawe'        => '12.06.2012',
            'otrs'          => 'DVS#123456789',
            'pa'            => 'LA-29123',
            'distributor'   => 'Rohde & Schwarz Company',
            'rla'           => '54321',
            'cpld'          => '7.0.4',
            'firmware'      => '7.4.0.22_2.0.5_7.0.4',
            'sdk'           => '4.3.0.10',
            'hwtest'        => '2.1.16.4'
        ));

        DB::table('cards')->insert(array(
            'serialnumber'  => '41130123',
            'userid'        => '5',
            'cardtype'      => '2',
            'errortype'     => '6',
            'status'        => '3',
            'failure'       => '3',
            'ausort'        => '1',
            'testdate'      => '21.12.2013',
            'time'          => '2:00',
            'revision'      => '4.7.0.20', 
            'comment'       => 'Some comment!',
            'excomment'     => 'Will not shown in Device Manager',
            'datawe'        => '12.06.2013',
            'otrs'          => 'DVS#123456789',
            'pa'            => 'LA-29123',
            'distributor'   => 'Rohde & Schwarz Company',
            'rla'           => '54321',
            'cpld'          => '7.0.4',
            'firmware'      => '7.4.0.22_2.0.5_7.0.4',
            'sdk'           => '4.3.0.10',
            'hwtest'        => '2.1.16.4'
        ));

            /**
              * UserID
              * -> will set ID of user who added/update the card
              *
              * Testdate
              * -> will add timepicker!
              */ 
        
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: pages
		Schema::drop('cards');
	}
}

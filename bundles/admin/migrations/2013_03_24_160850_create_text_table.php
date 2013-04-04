<?php

class Admin_Create_Text_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// add database schema: texts
		Schema::create('texts', function($table){

            $table->increments('id')->unique();

            $table->integer('admin_id');

            $table->string('text', 2048)->nullable();

            $table->timestamps();
        });

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => '3th incredible long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => '4th incredible long text free from the energy of my copy action!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => '5th long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => '6th incredible long text free from the energy of my copy action!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => '7th incredible long text free from the energy of my inspiration!',
      ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: texts
		Schema::drop('texts');
	}

}

/*
        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
      ));

        DB::table('texts')->insert(array(
            'admin_id'        => '2',
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
      ));
*/
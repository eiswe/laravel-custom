<?php

class Admin_Create_Text_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
        
		// add database schema: texts
		Schema::create('texts', function($table){

            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->on_delete('restrict')
                ->on_update('cascade');

            $table->text('text')->nullable();

            $table->timestamps();
        });

        $uid = 1;
        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '3th incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '4th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '5th long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '6th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '7th incredible long text free from the energy of my inspiration!',
        ));

        $uid = 2;
        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '3th incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '4th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '5th long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '6th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '7th incredible long text free from the energy of my inspiration!',
        ));

        $uid = 3;
        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '3th incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '4th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '5th long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '6th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '7th incredible long text free from the energy of my inspiration!',
        ));

        $uid = 4;
        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '3th incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '4th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '5th long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '6th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '7th incredible long text free from the energy of my inspiration!',
        ));

        $uid = 5;
        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => 'Some other incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '3th incredible long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '4th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '5th long text free from the energy of my inspiration!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '6th incredible long text free from the energy of my copy action!',
        ));

        DB::table('texts')->insert(array(
            'admin_id'        => $uid,
            'text'          => '7th incredible long text free from the energy of my inspiration!',
        ));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: texts
		Schema::drop('texts');
	}
}
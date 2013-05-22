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

            $table->engine = 'InnoDB';

            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id')  // if admin id change cascade to its texts!
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->integer('page_id')->unsigned()->nullable();

            $table->foreign('page_id')  // if page will destroyed -> destroy text of this site!
                ->references('id')
                ->on('pages')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->text('text')->nullable();

            $table->timestamps();
        });

        $user = array( 2,1,3,4 );
        foreach ($user as $key ) {
            for ($i=1; $i <= 15; $i++) { 

                DB::table('texts')->insert(array(
                    'admin_id'  => $key,
                    'page_id'   => $i,
                    'text'      => $i.'th incredible long text free from the energy of my '.$i.'th Copy inspiration! From User'.$key,
                ));

            }
        }

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
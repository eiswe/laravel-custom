<?php

class Admin_Create_Skill_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {
		
        // add database schema: skills
		Schema::create('skills', function($table){

            $table->engine = 'InnoDB';
            
            $table->increments('id')->unique();

            $table->integer('admin_id')->unsigned();
            
            $table->foreign('admin_id') // with admin all his data will lost...
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');
            
            $table->string('skill', 200);
            $table->boolean('active');

            $table->timestamps();
        });

        DB::table('skills')->insert(array(
			'admin_id'	=> '2',
            
        	'skill'		=> 'PHP',
        	'active'	=> true,
        ));

        DB::table('skills')->insert(array(
			'admin_id'	=> '2',
            
        	'skill'		=> 'Laravel',
        	'active'	=> true,
        ));
 
        DB::table('skills')->insert(array(
        	'admin_id'	=> '2',
            
        	'skill'		=> 'HTML',
        	'active'	=> true,
        ));
 
        DB::table('skills')->insert(array(
        	'admin_id'	=> '3',
            
        	'skill'		=> 'Python',
        	'active'	=> true,
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// Drop Schema: skills
		Schema::drop('skills');
	}
}
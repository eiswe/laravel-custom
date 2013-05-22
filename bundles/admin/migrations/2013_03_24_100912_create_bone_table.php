<?php

class Admin_Create_Bone_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up() {

		// add database schema: bones
		Schema::create('bones', function($table){

            $table->engine = 'InnoDB';
            
	        $table->increments('id')->unique();
	      
            $table->integer('bonelist_id')  ->unsigned();       // bonelist_id  64

            $table->foreign('bonelist_id') // with bonelist all his data will lost...
                ->references('id')
                ->on('bonelists')
                ->on_delete('cascade')
                ->on_update('cascade');

            $table->integer('admin_id')->unsigned();

            $table->foreign('admin_id') // if admin dies also his bookmarkgroups would useless
                ->references('id')
                ->on('admins')
                ->on_delete('cascade')
                ->on_update('cascade');

	        $table->string('desc', 128)->nullable();
            $table->string('dbName', 32);
            $table->string('fieldName', 32);
	        $table->string('fieldType', 32);
            $table->string('rules', 200);
	        $table->integer('weight')->nullable();				// {title,desc,image,text}
	        $table->string('relation', 32)->nullable();		// {title,desc,image,text}

	        $table->timestamps();
	      });

        DB::table('bones')->insert(array( 			// insert testdata: Text
            'bonelist_id'        	=> '1',
            'admin_id'      => '2',
            'desc'  		=> 'only text',
            'dbName'     => 'title',
            'fieldName'     => 'Titel',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:32',
            'weight'          => 1,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '1',
            'admin_id'      => '2',
            'desc'  		=> 'only text',
            'dbName'     => 'desc',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:64',
            'weight'          => 2,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '1',
            'admin_id'      => '2',
            'desc'  		=> 'only text',
            'dbName'     => 'text',
            'fieldName'    	=> 'Text',
            'fieldType'    	=> 'textarea',
            'rules'           => 'required|max:2048',   
            'weight'          => 3,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array( 			// insert testdata: Gallery
            'bonelist_id'        	=> '2',
            'admin_id'      => '2',
            'desc'  		=> 'insert Title',
            'dbName'     => 'titel',
            'fieldName'    	=> 'Titel',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:32',
            'weight'          => 1,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '2',
            'admin_id'      => '2',
            'desc'  		=> 'insert description',
            'dbName'     => 'desc',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:64',
            'weight'          => 2,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '2',
            'admin_id'      => '2',
            'desc'  		=> 'Want Pictures?',
            'dbName'     => 'foto',
            'fieldName'    	=> 'Display Pictures',
            'fieldType'    	=> 'boolean',
            'rules'           => 'required|max:2048',
            'weight'          => 3,
            'relation'     	=> 'pictures',
      	));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down() {
		// drop database schema: styles
		Schema::drop('bones');
	}
}


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

	        $table->increments('id')->unique();
	      
            $table->integer('bonelist_id')  ->unsigned();       // bonelist_id  64

            $table->foreign('bonelist_id')
                ->references('id')
                ->on('bonelists')
                ->on_delete('restrict')
                ->on_update('cascade');

	        $table->string('desc', 128)->nullable();
	        $table->string('fieldName', 32);
	        $table->string('fieldType', 32);
            $table->string('rules', 200);
	        $table->integer('weight')->nullable();				// {title,desc,image,text}
	        $table->string('relation', 32)->nullable();		// {title,desc,image,text}

	        $table->timestamps();
	      });

        DB::table('bones')->insert(array( 			// insert testdata: Text
            'bonelist_id'        	=> '1',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'Titel',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:32',
            'weight'          => 1,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '1',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:64',
            'weight'          => 2,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '1',
            'desc'  		=> 'only text',
            'fieldName'    	=> 'text',
            'fieldType'    	=> 'textarea',
            'rules'           => 'required|max:2048',   
            'weight'          => 3,
            'relation'     	=> '',
      	));

        DB::table('bones')->insert(array( 			// insert testdata: Gallery
            'bonelist_id'        	=> '2',
            'desc'  		=> 'insert Title',
            'fieldName'    	=> 'Titel',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:32',
            'weight'          => 1,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '2',
            'desc'  		=> 'insert description',
            'fieldName'    	=> 'Desc',
            'fieldType'    	=> 'text',
            'rules'           => 'required|max:64',
            'weight'          => 2,
            'relation'     	=> '',
      	));
        DB::table('bones')->insert(array(
            'bonelist_id'        	=> '2',
            'desc'  		=> 'Want Pictures?',
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


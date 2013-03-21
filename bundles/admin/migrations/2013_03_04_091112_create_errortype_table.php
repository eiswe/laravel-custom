<?php

class Admin_Create_Errortype_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){

		// add database schema: errortypes
		Schema::create('errortypes', function($table){
            $table->increments('id')->unique();
            $table->string('name', 20)->unique();
            $table->string('description', 64);
            $table->timestamps();
        });

        DB::table('errortypes')->insert(array(
        	'name'			=> 'leichter Fehler',
        	'description'	=> 'reparaturaufwand max. 4std',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'schwerer Fehler',
        	'description'	=> 'reparaturaufwand max. 8std',
        ));
        
        DB::table('errortypes')->insert(array(
            'name'          => 'repariert',
            'description'   => 'Repariert und oder getestet',
        ));

        DB::table('errortypes')->insert(array(
            'name'          => 'übergabe',
            'description'   => 'Karte wurde übergeben, muss bearbeitet werden',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'Entwicklung',
        	'description'	=> 'Reparatur erfolglos, unterstützung nötig!',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'sporadisch',
        	'description'	=> 'z.B. Wackelkontakt, unregelmäßige Fehler',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'mechanisch',
        	'description'	=> 'z.B. Pad abgerissen',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'nicht Reparabel',
        	'description'	=> 'Benetzungsproblem oder dicke Leiterplatte',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'nicht befundet',
        	'description'	=> 'noch nicht befundet',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'unReparabel Pro',
        	'description'	=> 'Benetzungsproblem oder dicke Leiterplatte',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'IA',
        	'description'	=> 'in einem IA',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'neuReklamation',
        	'description'	=> 'neu aus Reklamation nicht befundet',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'neuBestücker',
        	'description'	=> 'neu vom Bestücker nicht befundet',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'neuDemo',
        	'description'	=> 'neu aus DemoSystem nicht befundet',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'zurück',
        	'description'	=> 'wieder beim bestücker',
        ));
        
        DB::table('errortypes')->insert(array(
        	'name'			=> 'VS',
        	'description'	=> 'verschrottet',
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop database schema: errortypes
		Schema::drop('errortypes');
	}

}
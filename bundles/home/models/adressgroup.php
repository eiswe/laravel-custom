<?php 
class Adressgroup extends Eloquent {

	public static $table = 'adressgroups';
	public static $timestamps = true;

/*	public function admin() {
		return $this->belongs_to('Admin');
	}
*/	

	public function adress(){
		return $this->has_one('Adress');
	}		
	
}

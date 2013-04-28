<?php 
class Adress extends Eloquent {

	public static $table = 'adress';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function adressgroup() {
		return $this->belongs_to('Adressgroup');
	}
	
	// public function userid() {
	// 	return $this->has_one('Admin', 'userid');
	// }
	
}

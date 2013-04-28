<?php 
class Countrie extends Eloquent {

	public static $table = 'countries';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	// public function userid() {
	// 	return $this->has_one('Admin', 'userid');
	// }
	
}

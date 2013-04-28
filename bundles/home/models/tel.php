<?php 
class Tel extends Eloquent {

	public static $table = 'tels';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	public function telgroup() {
		return $this->belongs_to('Telgroup');
	}
	// public function userid() {
	// 	return $this->has_one('Admin', 'userid');
	// }
	
}

<?php 
class Notegroup extends Eloquent {

	public static $table = 'notegroups';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function note() {
		return $this->belongs_to('Note');
	}	
		
	// public function userid() {
	// 	return $this->has_one('Admin', 'userid');
	// }
	
}

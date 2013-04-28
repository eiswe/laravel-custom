<?php 
class Todo extends Eloquent {

	public static $table = 'todos';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function todostatus() {
		return $this->belongs_to('Todostatus');
	}
	// public function userid() {
	// 	return $this->has_one('Admin', 'userid');
	// }
	
}

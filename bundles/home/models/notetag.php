<?php 
class Notetag extends Eloquent {

	public static $table = 'notetags';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	public function note() {
		return $this->belongs_to('Note');
	}	
}

<?php 
class Note extends Eloquent {

	public static $table = 'notes';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	public function notetag(){
		return $this->has_one('Notetag');
	}	

	public function notegroup(){
		return $this->has_one('Notegroup');
	}
	
}

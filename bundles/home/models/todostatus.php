<?php 
class Todostatus extends Eloquent {

	public static $table = 'todostatus';
	public static $timestamps = true;

/*	public function admin() {
		return $this->belongs_to('Admin');
	}
*/	
	
	public function todo(){
		return $this->has_one('Todo');
	}		
}

<?php 
class Role extends Eloquent {

	public static $table = 'roles';
	public static $timestamps = true;

/*	public function admin() {
		return $this->belongs_to('Admin');
	}
*/	
	public function profile(){
		return $this->has_one('Profile');
	}	
	
}

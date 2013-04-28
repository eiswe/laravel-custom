<?php 
class Telgroup extends Eloquent {

	public static $table = 'telgroups';
	public static $timestamps = true;

	public function tel(){
		return $this->has_one('Tel');
	}	
}

<?php 
class Bone extends Eloquent {

	public static $table = 'bones';
	public static $timestamps = true;

	public function admin(){
		return $this->belongs_to('Admin');
	}
	
}

// print '<span class="label label-warning">Admin::styles</span>&nbsp;';
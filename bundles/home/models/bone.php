<?php 
class Bone extends Eloquent {

	public static $table = 'bones';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	public function bonelist(){
		return $this->belongs_to('Bonelist');
	}
	
}

// print '<span class="label label-warning">Admin::styles</span>&nbsp;';

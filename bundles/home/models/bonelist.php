<?php 
class Bonelist extends Eloquent {

	public static $table = 'bonelists';
	public static $timestamps = true;

	public function admin(){
		return $this->belongs_to('Admin');  //  cant find admin?
	}
	
	public function bone(){
		return $this->has_many('Bone');
	}	

	public function page(){
		return $this->has_one('page');
	}	
}

// print '<span class="label label-warning">Admin::styles</span>&nbsp;';

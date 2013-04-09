<?php 
class Style extends Eloquent {

	public static $table = 'styles';
	public static $timestamps = true;

	public function admin(){
		return $this->belongs_to('Admin');
	}
	
}

// print '<span class="label label-warning">Admin::styles</span>&nbsp;';
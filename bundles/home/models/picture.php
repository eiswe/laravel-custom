<?php 
class Picture extends Eloquent {

	public static $table = 'pictures';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
}

// print '<span class="label label-warning">Admin::pictures</span>&nbsp;';
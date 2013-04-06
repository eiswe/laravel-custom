<?php 
class Text extends Eloquent {

	public static $table = 'texts';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
}

// print '<span class="label label-warning">Admin::texts</span>&nbsp;';
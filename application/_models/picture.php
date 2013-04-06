<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Picture extends Eloquent {

	public static $table = 'pictures';
	public static $timestamps = true;

	public function page(){
		return $this->belongs_to('Page');
	}
	
}

// print '<span class="label label-warning">Admin::pictures</span>&nbsp;';
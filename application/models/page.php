<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Page extends Eloquent {

	public static $table = 'pages';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	public function userid() {
		return $this->has_one('Admin', 'userid');
	}
	
}

// print '<span class="label label-warning">Admin::Page</span>&nbsp;';
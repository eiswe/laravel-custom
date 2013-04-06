<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Movie extends Eloquent {

	public static $table = 'movies';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
}

// print '<span class="label label-warning">Admin::movies</span>&nbsp;';
<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Style extends Eloquent {

	public static $table = 'styles';
	public static $timestamps = true;

	public function page(){
		return $this->belongs_to('Page');
	}
	
}

// print '<span class="label label-warning">Admin::styles</span>&nbsp;';
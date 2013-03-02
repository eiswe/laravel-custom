<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;
class Admin extends Eloquent {

	public static $table = 'admins';
	public static $timestamps = true;

	public function page(){
		return $this->has_many('page');
	}
	
}

print '&nbsp;<span class="label label-info">load Models:</span>&nbsp;<span class="label label-warning">Admin::admin</span>&nbsp;';
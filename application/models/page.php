<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class page extends Aware {

	public static $table = 'pages';
	public static $timestamps = true;

	public function admins(){
		return $this->belongs_to('Admin');
	}
	
}

print '<span class="label label-warning">Application::page</span>&nbsp;';
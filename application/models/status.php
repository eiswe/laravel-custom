<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Status extends Eloquent {

	public static $table = 'status';
	public static $timestamps = true;

	public function card(){
		return $this->belongs_to('Card');
	}
	
}

print '<span class="label label-warning">Application::status</span>&nbsp;';
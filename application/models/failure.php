<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Failure extends Eloquent {

	public static $table = 'failure';
	public static $timestamps = true;

	public function card(){
		return $this->belongs_to('Card');
	}
	
}

// print '<span class="label label-warning">Application::failure</span>&nbsp;';
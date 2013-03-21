<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Errortype extends Eloquent {

	public static $table = 'errortypes';
	public static $timestamps = true;

	public function card(){
		return $this->belongs_to('Card');
	}
	
}

// print '<span class="label label-warning">Application::errortype</span>&nbsp;';
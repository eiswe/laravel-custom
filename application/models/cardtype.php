<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Cardtype extends Eloquent {

	public static $table = 'cardtypes';
	public static $timestamps = true;

	public function card(){
		return $this->belongs_to('Card');
	}
	
}

// print '<span class="label label-warning">Application::cardtype</span>&nbsp;';
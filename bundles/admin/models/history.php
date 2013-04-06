<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class History extends Eloquent {

	public static $table = 'histories';
	public static $timestamps = true;

	public function card(){
		return $this->belongs_to('Card');
	}
	
}

// print '<span class="label label-warning">Application::history</span>&nbsp;';
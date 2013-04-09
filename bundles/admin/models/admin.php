<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;
class Admin extends Eloquent {

	public static $table = 'admins';
	public static $timestamps = true;

	public function card(){
		return $this->has_many('card');
	}

	public function page(){
		return $this->has_one('page');
	}

	public function style(){
		return $this->has_one('style');
	}	

	public function picture(){
		return $this->has_one('picture');
	}

	public function text(){
		return $this->has_one('text');
	}	

	public function movie(){
		return $this->has_one('movie');
	}

	public function get_created(){		// rename db field! ^^
	    return $this->get_attribute('created_at');
	}
	
}

// print '&nbsp;<span class="label label-info">load Models:</span>&nbsp;<span class="label label-warning">Admin::admin</span>&nbsp;';
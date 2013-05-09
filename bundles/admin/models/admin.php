<?php 
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;
class Admin extends Eloquent {

	public static $table = 'admins';
	public static $timestamps = true;

	public function bonelist(){
		return $this->has_many('Bonelist');
	}	

	public function profile(){
		return $this->has_one('Profile');
	}

	public function page(){
		return $this->has_many('Page');
	}

	public function picture(){
		return $this->has_many('Picture');
	}

	public function text(){
		return $this->has_many('Text');
	}	

	public function movie(){
		return $this->has_many('Movie');
	}

	public function note(){
		return $this->has_many('Note');
	}

	public function task(){
		return $this->has_many('Task');
	}	

	public function bookmark(){
		return $this->has_many('Bookmark');
	}

	public function adress(){
		return $this->has_many('Adress');
	}

	public function tel(){
		return $this->has_many('Tel');
	}	

	public function countrie(){
		return $this->has_many('Countrie');
	}

	public function language(){
		return $this->has_many('Language');
	}

	public function skill(){
		return $this->has_many('Skill');
	}	

	public function hobbie(){
		return $this->has_many('Hobbie');
	}	

	public function todo(){
		return $this->has_many('Todo');
	}	

	public function project(){
		return $this->has_many('Project');
	}	

	public function projectgroup(){
		return $this->has_many('Projectgroup');
	}	

	public function get_created(){		// rename db field! ^^
	    return $this->get_attribute('created_at');
	}
	
}

// print '&nbsp;<span class="label label-info">load Models:</span>&nbsp;<span class="label label-warning">Admin::admin</span>&nbsp;';
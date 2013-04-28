<?php 
class Profile extends Eloquent {

	public static $table = 'profiles';
	public static $timestamps = true;

	public function admin(){
		return $this->belongs_to('Admin');
	}

	public function role(){
		return $this->belongs_to('Role');
	}
	
}

// print '<span class="label label-warning">Application::profile</span>&nbsp;';

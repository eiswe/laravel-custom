<?php 
class Profile extends Eloquent {

	public static $table = 'profiles';
	public static $timestamps = true;

	public function page(){
		return $this->belongs_to('Page');
	}
	
}

// print '<span class="label label-warning">Application::profile</span>&nbsp;';
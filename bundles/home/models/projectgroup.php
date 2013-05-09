<?php 
class Projectgroup extends Eloquent {

	public static $table = 'projectgroups';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function Project() {
		return $this->has_many('Project');
	}
}

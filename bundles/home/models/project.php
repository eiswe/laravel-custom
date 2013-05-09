<?php 
class Project extends Eloquent {

	public static $table = 'projects';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function page() {
		return $this->has_many('Page');
	}
}

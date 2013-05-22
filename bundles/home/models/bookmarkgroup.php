<?php 
class Bookmarkgroup extends Eloquent {

	public static $table = 'bookmarkgroups';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}

	public function bookmarkgroup() {
		return $this->belongs_to('Bookmarkgroup');
	}
}

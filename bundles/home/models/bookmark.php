<?php 
class Bookmark extends Eloquent {

	public static $table = 'bookmarks';
	public static $timestamps = true;

	public function admin() {
		return $this->belongs_to('Admin');
	}
	
	public function bookmarkgroup(){
		return $this->has_one('Bookmarkgroup');
	}
	
}

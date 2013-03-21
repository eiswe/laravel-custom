<?php 
//namespace Admin\Models;
// use \Laravel\Database\Eloquent\Model as Eloquent;
class Card extends Eloquent {

	public static $table = 'cards';
	public static $timestamps = true;

	public function admin() {
		return $this->has_one('Admin', 'userid');
	}

	// need has_one relations to all databases!
	// each card has one userid
	// each user has many cards
	
}

//print '<span class="label label-warning">Application::card</span>&nbsp;';
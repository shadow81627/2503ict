<?php
class Friend extends Eloquent {
   
    /**
	 * Declears the many to many relationship between a user and user.
	 * A user has many Users as friends.
	 */
	/*public function friends(){
	 	return $this->belongsToMany('User', 'user_friend','friend_id', 'user_id');
	}*/
	
	/**
	 * Declears the many to many relationship between a user and user.
	 * A user has many Users as friends.
	 */
	public function friends(){
	 	return $this->belongsToMany('User');
	}
}
    
    

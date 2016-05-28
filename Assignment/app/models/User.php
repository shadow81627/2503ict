<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	/**
	 * Declears the one to many relationship between a user and posts.
	 * A user has many Posts.
	 */
	function post() {
        return $this->hasMany('Post');
    }
    
    /**
	 * Declears the many to many relationship between a user and user.
	 * A user has many Users as friends.
	 */
    /*function users() {
		//return $this->belongsToMany('User');
		return $this->belongsToMany('User', 'user_friends', 'user_id', 'friend_id');
	}*/
	
	/**
	 * Declears the many to many relationship between a user and user.
	 * A user has many Users as friends.
	 */
	/*public function friends(){
	 	return $this->belongsToMany('Friend', 'user_friend','user_id', 'friend_id');
	}*/
	
	/**
	 * Declears the many to many relationship between a user and user.
	 * A user has many Users as friends.
	 */
	public function friends(){
	 	return $this->belongsToMany('Friend');
	}
}

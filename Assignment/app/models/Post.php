<?php
class Post extends Eloquent {
    
    /**
     * The set of constrains placed on the columns of the posts table.
     */
    public static $rules = array(
        'title' => 'required',
        'message' => 'required',
        'post_name' => 'required',
        'privacy' => 'required'
    );
    
    /**
	 * Declears the one to many relationship between a post and comments.
	 * A Post has many Comments.
	 */
    function comment() {
        return $this->hasMany('Comment');
    }
    
    /**
	 * Declears the one to many relationship between a user and posts.
	 * A post has one User.
	 */
    function user() {
        return $this->belongsTo('User');
    }
}

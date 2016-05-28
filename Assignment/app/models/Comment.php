<?php
class Comment extends Eloquent {
    
    /**
     * The set of constrains placed on the columns of the comments table.
     */
    public static $rules = array(
        'post_ID' => 'required',
        'comment' => 'required',
        'comment_name' => 'required',
        'post_name' => 'required'
    );
    
    /**
	 * Declears the one to many relationship between a post and comments.
	 * A comment has one Post.
	 */
    function post() {
        return $this->belongsTo('Post');
    }
    
    /**
	 * Declears the one to many relationship between a User and Comments.
	 * A User has many Commentss.
	 */
    function user() {
        return $this->belongsTo('User');
    }
}

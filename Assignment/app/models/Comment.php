<?php
class Post extends Eloquent {
    public static $rules = array(
        'post_ID' => 'required',
        'comment' => 'required',
        'comment_name' => 'required',
        'post_name' => 'required'
    );
}

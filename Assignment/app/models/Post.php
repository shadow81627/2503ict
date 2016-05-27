<?php
class Post extends Eloquent {
    public static $rules = array(
        'title' => 'required',
        'message' => 'required',
        'post_name' => 'required',
    );
}

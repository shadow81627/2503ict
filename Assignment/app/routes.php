<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  return Redirect::to(url("home"));
});

Route::get('implemention', function()
{
	return View::make('social.implementation');
});


Route::get('home', function()
{
	$posts = get_posts();
	return View::make('social.home')->withPosts($posts);
});

Route::get('posts_comments/{id}', function($id)
{
    $post = get_post($id);
    $comments = get_comments($id);
	return View::make('social.posts_comments')->withPost($post)->withComments($comments);
});
/*
 * Adds the input of text fields to the database as a new post
 */
Route::post('add_post_action', function()
{
  $title = Input::get('title');
  $name = Input::get('name');
  $message = Input::get('message');
  
  if($title != NULL && $name != NULL && $message != NULL){
     $id = add_post($title, $name, $message);
  }else {
     die("Ensure all fields are filled");
  }

  // If successfully created then display newly created item
  if ($id) 
  {
    return Redirect::to(url("posts_comments/$id"));
  } 
  else
  {
    die("Error adding item");
  }
});

Route::post('add_comment_action', function()
{
  $post_id = Input::get('id');
  $name = Input::get('name');
  $comment = Input::get('comment');
  
  if($post_id != NULL && $name != NULL && $comment != NULL){
     add_comment($post_id, $name, $comment);
  }else {
     die("Ensure all fields are filled");
  }

  // If successfully created then display newly created item
  if ($post_id) 
  {
    return Redirect::to(url("posts_comments/$post_id"));
  } 
  else
  {
    die("Error adding item");
  }
});

Route::get('posts_edit/{id}', function($id)
{
    $post = get_post($id);
	return View::make('social.posts_edit')->withPost($post);
});

Route::post('edit_post_action', function()
{
    $title = Input::get('title');
    $name = Input::get('name');
    $message = Input::get('message');
    $id = Input::get('id');

     if($title != NULL && $name != NULL && $message != NULL){
        $id = update_item($id, $title, $name, $message);
    }else {
        die("Ensure all fields are filled");
    }
  
    if ($id) 
    {
        return Redirect::to(url("posts_comments/$id"));
    } 
     else
    {
        die("Error updating item");
    }
});

Route::get('posts_delete_action/{id}', function($id)
{
  delete_post($id);
  return Redirect::to(url("home"));
});

Route::get('comment_delete_action/{id}', function($id)
{
  $post = delete_comment($id);
  return Redirect::to(url("posts_comments/$post->post_ID"));
});


Route::resource('post', 'PostController'); 

/*
 * Gets all of the columns and counts the number of comments for each post from the Posts table.
 */
function get_posts()
{
    $sql = "SELECT COUNT(comments.comment_ID) AS numComments, * FROM posts LEFT JOIN comments ON posts.ID = comments.post_ID
    group by posts.ID order by posts.ID desc";
    $posts = DB::select($sql);
    //print_r($posts);
    return $posts;
}

/*
 * Gets post with the given id
 */
function get_post($id)
{
	$sql = "SELECT * FROM posts WHERE ID = ?";
	$posts = DB::select($sql, array($id));

	// If we get more than one item or no items display an error
	if (count($posts) != 1) 
	{
    die("Invalid query or result: $query\n");
  }

	// Extract the first item (which should be the only item)
  $post = $posts[0];
	return $post;
}
/*
 * gets all the comments for a post
 */
function get_comments($id)
{
	$sql = "SELECT * FROM comments WHERE post_ID = ?";
	$comments = DB::select($sql, array($id));
	//print_r($comments);
	return $comments;
}
/*
 * adds a new post with the given details
 */
function add_post($title, $name, $message) 
{
  $sql = "insert into posts(title, post_name, message) values (?, ?, ?)";

  DB::insert($sql, array($title, $name, $message));

  $id = DB::getPdo()->lastInsertId();

  return $id;
}

/*
 * adds a new comment with the given details
 */
function add_comment($post_id, $name, $comment) 
{
  $sql = "insert into comments(post_ID, comment_name, comment) values (?, ?, ?)";

  DB::insert($sql, array($post_id, $name, $comment));
}

/*
 * updates a post with the given details
 */
function update_item($id, $title, $name, $message) 
{
  $sql = "update posts set title = ?, post_name = ?, message = ? where id = ?";
  DB::update($sql, array($title, $name, $message, $id));
  return $id;
}

/*
 * Deletes the post of given ID
 */
function delete_post($id) 
{
  $sql = "delete from posts where ID = ?";
  DB::delete($sql, array($id));
} 

/*
 * Deletes the comment with the given ID and returns the post it was on
 */
function delete_comment($id) 
{
  $getPostSQL = "SELECT post_ID FROM comments WHERE comment_ID = ?";
  $posts = DB::select($getPostSQL, array($id));
  $sql = "delete from comments where comment_ID = ?";
  DB::delete($sql, array($id));
    //print_r($posts);
    
    // If we get more than one item or no items display an error
	
	if (count($posts) != 1) 
	{
    die("Invalid query or result: $query\n");
  }

	// Extract the first item (which should be the only item)
  $post = $posts[0];
     // print_r($post->post_ID);
	return $post;
} 

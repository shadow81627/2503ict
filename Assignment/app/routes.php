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
	$posts = get_posts();
	return View::make('social.home')->withPosts($posts);
});

Route::get('page2', function()
{
	$posts = get_posts();
	return View::make('social.page2')->withPosts($posts);
});

Route::get('posts_comments/{id}', function($id)
{
    $post = get_post($id);
	return View::make('social.posts_comments')->withPost($post);
});
/*
 * Adds the input of text fields to the database as a new post
 */
Route::post('add_item_action', function()
{
  $title = Input::get('title');
  $name = Input::get('name');
  $message = Input::get('message');
  
  if($title != NULL && $name != NULL && $message != NULL){
     $id = add_item($title, $name, $message);
  }else {
     die("Ensure all fields are filled");
  }

  // If successfully created then display newly created item
  if ($id) 
  {
    return Redirect::to(url("post_comments/$id"));
  } 
  else
  {
    die("Error adding item");
  }
});

Route::get('posts_edit/{id}', function($id)
{
	return View::make('social.posts_edit')->withPosts($posts);
});

Route::get('delete_item_action/{id}', function($id)
{
  delete_post($id);
  return Redirect::to(url("page2"));
});

/*
 * Gets all of the columns and counts the number of comments for each post from the Posts table.
 */
function get_posts()
{
    $sql = "SELECT COUNT(comments.comment_ID) AS numComments, * FROM posts LEFT JOIN comments ON posts.post_ID = comments.post_ID
    group by posts.post_ID order by posts.post_ID desc";
    $posts = DB::select($sql);
    print_r($posts);
    return $posts;
}

/*
 * Gets post with the given id
 */
function get_post($id)
{
	$sql = "SELECT * FROM posts WHERE post_ID = ?";
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

function add_item($title, $name, $message) 
{
  $sql = "insert into POSTS(TITLE, NAME, MESSAGE) values (?, ?, ?)";

  DB::insert($sql, array($title, $name, $message));

  $id = DB::getPdo()->lastInsertId();

  return $id;
}

function update_item($id, $summary, $details) 
{
  $sql = "update item set summary = ?, details = ? where id = ?";
  DB::update($sql, array($summary, $details, $id));
  return $id;
}

function delete_post($id) 
{
  $sql = "delete from POSTS where ID = ?";
  DB::delete($sql, array($id));
} 


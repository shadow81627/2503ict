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

Route::get('/page2', function()
{
	$posts = get_posts();
	return View::make('social.page2')->withPosts($posts);
});

/*
 * Gets all of the columns from the Posts table.
 */
function get_posts()
{
  $sql = "select p.TITLE, p.ICON, p.MESSAGE, p.NAME, COUNT(c.POST_ID) AS NUNCOMMENTS, * from POSTS AS p, COMMENTS AS c WHERE c.POST_ID = p.ID";
  $posts = DB::select($sql);
  return $posts;
  //print_r($posts);
}


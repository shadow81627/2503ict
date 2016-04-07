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

/* Load sample data, an array of associative arrays. */
require "models/Users.php";


// Display search form
Route::get('/', function()
{
	return View::make('users.query');
});

// Perform search and display results
Route::get('search', function()
{
  $search = Input::get('search');

  $results = search($search);

	return View::make('users.results')->withUsers($results)->withSearch($search);
});


/* Functions for user database example. */

/* Search sample data for $name or $year or $state from form. */
function search($search) {
    $users = getUsers(); 
	
	if(!empty($search)){
		$words = explode ( " " , $search);
		foreach($words as $word){
			 // Filter $users by $search
			$results = array();
			foreach ($users as $user) {
			    if (stripos($user['name'], $word) !== FALSE ||
			    	strpos($user['address'], $word) !== FALSE || 
			        strpos($user['phone'], $word) !== FALSE ||
			        stripos($user['email'], $word) !== FALSE){
			        $results[] = $user;
				}
			}
		}
		$users = $results;
		return $users;
	}
}
?>

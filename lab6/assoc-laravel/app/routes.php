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
	
	if(!empty($search)){
		$sql = "select * from pms where name like ? OR start like ? 
		OR finish like ? OR state like ?";
		$pms = DB:: select($sql, array("%$search%", "%$search%", "%$search%", "%$search%"));
		/*$queries = DB::getQuearyLog();
		print_r($queries);
		print_r($pms);
		exit;*/
	}
	return $pms;
}
?>

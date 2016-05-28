<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
		//return View::make('social.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	function store(){
		// if (!Auth::check()) return Redirect::route(‘product.index’);
		 
		 $input = Input::all();
		$v = Validator::make($input, User::$rules);
		if ($v->passes()){
		 //$password = $input['password'];
		 $encrypted = Hash::make($input['password']);
		 $user = new User;
		 $user->username = $input['username'];
		 $user->password = $encrypted;
		 $user->birthdate = $input['birthdate'];
		 $user->fullname = $input['fullname'];
		 $user->remember_token = 'default';
		 $user->save();
		 return Redirect::route('product.index');
		}else{
			return Redirect::action('UserController@create')->withErrors($v);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id = null, $username = null){
		if($id != null){
			$sql = "SELECT * FROM users WHERE id = ?";
			$users = DB::select($sql, array($id));
		
			// If we get more than one item or no items display an error
			if (count($users) != 1) 
			{
		    die("Invalid query or result: $query\n");
			 }
		
			// Extract the first item (which should be the only item)
		  	$user = $users[0];
			return $user;
			
		}else if($username != null) {
			$sql = "SELECT * FROM users WHERE username = ?";
			$users = DB::select($sql, array($username));
			//print_r($users);
			return $users;
		}else {
			$sql = "SELECT * FROM users";
			$users = DB::select($sql);
			//print_r($users);
			return $users;
		}
		
		
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * log a user in
	 *
	 * @return Response
	 */
	public function login()
	{
		$userdata = array(
			'username' =>Input::get('username'),
			'password' =>Input::get('password')
			);
		
		if ( Auth::attempt($userdata) ) {
			Session::put('login_error', '');
			return Redirect::to(URL::previous());
		}else{
			Session::put('login_error', 'Login failed');
			return Redirect::to(URL::previous())->withInput();
		}
		
	}

	/**
	 * Log a user out
	 *
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::action('ProductController@index');
	}


}

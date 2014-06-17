<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
        return View::make('users/index', ['users' => $users]);

	}


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function vehicles()
    {
        $users = User::all();
        return View::make('users/index', ['users' => $users]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function team()
    {
        return View::make('users/team');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function reports()
    {
        return View::make('users/reports');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function journeys()
    {
        return View::make('users/journeys');
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = new User;
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        return Redirect::route('users.create');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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


}

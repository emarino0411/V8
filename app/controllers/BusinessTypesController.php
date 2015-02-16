<?php

class BusinessTypesController extends \CtgBaseController {

	/**
	 * Display a listing of businesstypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$businesstypes = Businesstype::all();

		return View::make('businesstypes.index', compact('businesstypes'));
	}

	/**
	 * Show the form for creating a new businesstype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('businesstypes.create');
	}

	/**
	 * Store a newly created businesstype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Businesstype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Businesstype::create($data);

		return Redirect::route('businesstypes.index');
	}

	/**
	 * Display the specified businesstype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$businesstype = Businesstype::findOrFail($id);

		return View::make('businesstypes.show', compact('businesstype'));
	}

	/**
	 * Show the form for editing the specified businesstype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$businesstype = Businesstype::find($id);

		return View::make('businesstypes.edit', compact('businesstype'));
	}

	/**
	 * Update the specified businesstype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$businesstype = Businesstype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Businesstype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$businesstype->update($data);

		return Redirect::route('businesstypes.index');
	}

	/**
	 * Remove the specified businesstype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Businesstype::destroy($id);

		return Redirect::route('businesstypes.index');
	}

}

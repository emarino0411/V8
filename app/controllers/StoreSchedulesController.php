<?php

class StoreSchedulesController extends \CtgBaseController {

	/**
	 * Display a listing of storeschedules
	 *
	 * @return Response
	 */
	public function index()
	{
		$storeschedules = Storeschedule::all();

		return View::make('storeschedules.index', compact('storeschedules'));
	}

	/**
	 * Show the form for creating a new storeschedule
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('storeschedules.create');
	}

	/**
	 * Store a newly created storeschedule in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Storeschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Storeschedule::create($data);

		return Redirect::route('storeschedules.index');
	}

	/**
	 * Display the specified storeschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$storeschedule = Storeschedule::findOrFail($id);

		return View::make('storeschedules.show', compact('storeschedule'));
	}

	/**
	 * Show the form for editing the specified storeschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$storeschedule = Storeschedule::find($id);

		return View::make('storeschedules.edit', compact('storeschedule'));
	}

	/**
	 * Update the specified storeschedule in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$storeschedule = Storeschedule::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Storeschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$storeschedule->update($data);

		return Redirect::route('storeschedules.index');
	}

	/**
	 * Remove the specified storeschedule from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Storeschedule::destroy($id);

		return Redirect::route('storeschedules.index');
	}

}

<?php

class CrowdieSchedulesController extends \CtgBaseController {

	/**
	 * Display a listing of crowdieschedules
	 *
	 * @return Response
	 */
	public function index()
	{
		$crowdieschedules = Crowdieschedule::all();

		return View::make('crowdieschedules.index', compact('crowdieschedules'));
	}

	/**
	 * Show the form for creating a new crowdieschedule
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('crowdieschedules.create');
	}

	/**
	 * Store a newly created crowdieschedule in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Crowdieschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Crowdieschedule::create($data);

		return Redirect::route('crowdieschedules.index');
	}

	/**
	 * Display the specified crowdieschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$crowdieschedule = Crowdieschedule::findOrFail($id);

		return View::make('crowdieschedules.show', compact('crowdieschedule'));
	}

	/**
	 * Show the form for editing the specified crowdieschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crowdieschedule = Crowdieschedule::find($id);

		return View::make('crowdieschedules.edit', compact('crowdieschedule'));
	}

	/**
	 * Update the specified crowdieschedule in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$crowdieschedule = Crowdieschedule::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Crowdieschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$crowdieschedule->update($data);

		return Redirect::route('crowdieschedules.index');
	}

	/**
	 * Remove the specified crowdieschedule from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Crowdieschedule::destroy($id);

		return Redirect::route('crowdieschedules.index');
	}

}

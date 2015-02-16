<?php

class CrowdieLocationHistoriesController extends \CtgBaseController {

	/**
	 * Display a listing of crowdielocationhistories
	 *
	 * @return Response
	 */
	public function index()
	{
		$crowdielocationhistories = Crowdielocationhistory::all();

		return View::make('crowdielocationhistories.index', compact('crowdielocationhistories'));
	}

	/**
	 * Show the form for creating a new crowdielocationhistory
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('crowdielocationhistories.create');
	}

	/**
	 * Store a newly created crowdielocationhistory in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Crowdielocationhistory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Crowdielocationhistory::create($data);

		return Redirect::route('crowdielocationhistories.index');
	}

	/**
	 * Display the specified crowdielocationhistory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$crowdielocationhistory = Crowdielocationhistory::findOrFail($id);

		return View::make('crowdielocationhistories.show', compact('crowdielocationhistory'));
	}

	/**
	 * Show the form for editing the specified crowdielocationhistory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crowdielocationhistory = Crowdielocationhistory::find($id);

		return View::make('crowdielocationhistories.edit', compact('crowdielocationhistory'));
	}

	/**
	 * Update the specified crowdielocationhistory in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$crowdielocationhistory = Crowdielocationhistory::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Crowdielocationhistory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$crowdielocationhistory->update($data);

		return Redirect::route('crowdielocationhistories.index');
	}

	/**
	 * Remove the specified crowdielocationhistory from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Crowdielocationhistory::destroy($id);

		return Redirect::route('crowdielocationhistories.index');
	}

}

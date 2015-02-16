<?php

class CrowdieCurrentLocationsController extends \CtgBaseController {

	/**
	 * Display a listing of crowdiecurrentlocations
	 *
	 * @return Response
	 */
	public function index()
	{
		$crowdiecurrentlocations = Crowdiecurrentlocation::all();

		return View::make('crowdiecurrentlocations.index', compact('crowdiecurrentlocations'));
	}

	/**
	 * Show the form for creating a new crowdiecurrentlocation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('crowdiecurrentlocations.create');
	}

	/**
	 * Store a newly created crowdiecurrentlocation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Crowdiecurrentlocation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Crowdiecurrentlocation::create($data);

		return Redirect::route('crowdiecurrentlocations.index');
	}

	/**
	 * Display the specified crowdiecurrentlocation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$crowdiecurrentlocation = Crowdiecurrentlocation::findOrFail($id);

		return View::make('crowdiecurrentlocations.show', compact('crowdiecurrentlocation'));
	}

	/**
	 * Show the form for editing the specified crowdiecurrentlocation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crowdiecurrentlocation = Crowdiecurrentlocation::find($id);

		return View::make('crowdiecurrentlocations.edit', compact('crowdiecurrentlocation'));
	}

	/**
	 * Update the specified crowdiecurrentlocation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$crowdiecurrentlocation = Crowdiecurrentlocation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Crowdiecurrentlocation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$crowdiecurrentlocation->update($data);

		return Redirect::route('crowdiecurrentlocations.index');
	}

	/**
	 * Remove the specified crowdiecurrentlocation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Crowdiecurrentlocation::destroy($id);

		return Redirect::route('crowdiecurrentlocations.index');
	}

}

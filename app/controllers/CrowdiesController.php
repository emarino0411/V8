<?php

class CrowdiesController extends \CtgBaseController {

	/**
	 * Display a listing of crowdies
	 *
	 * @return Response
	 */
	public function index()
	{
		$crowdies = Crowdy::all();

		return View::make('crowdies.index', compact('crowdies'));
	}

	/**
	 * Show the form for creating a new crowdy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('crowdies.create');
	}

	/**
	 * Store a newly created crowdy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Crowdy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Crowdy::create($data);

		return Redirect::route('crowdies.index');
	}

	/**
	 * Display the specified crowdy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$crowdy = Crowdy::findOrFail($id);

		return View::make('crowdies.show', compact('crowdy'));
	}

	/**
	 * Show the form for editing the specified crowdy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$crowdy = Crowdy::find($id);

		return View::make('crowdies.edit', compact('crowdy'));
	}

	/**
	 * Update the specified crowdy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$crowdy = Crowdy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Crowdy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$crowdy->update($data);

		return Redirect::route('crowdies.index');
	}

	/**
	 * Remove the specified crowdy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Crowdy::destroy($id);

		return Redirect::route('crowdies.index');
	}

}

<?php

class DeliveriesController extends \CtgBaseController {

	/**
	 * Display a listing of deliveries
	 *
	 * @return Response
	 */
	public function index()
	{
		$deliveries = Delivery::all();

		return View::make('deliveries.index', compact('deliveries'));
	}

	/**
	 * Show the form for creating a new delivery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('deliveries.create');
	}

	/**
	 * Store a newly created delivery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Delivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Delivery::create($data);

		return Redirect::route('deliveries.index');
	}

	/**
	 * Display the specified delivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$delivery = Delivery::findOrFail($id);

		return View::make('deliveries.show', compact('delivery'));
	}

	/**
	 * Show the form for editing the specified delivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$delivery = Delivery::find($id);

		return View::make('deliveries.edit', compact('delivery'));
	}

	/**
	 * Update the specified delivery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$delivery = Delivery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Delivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$delivery->update($data);

		return Redirect::route('deliveries.index');
	}

	/**
	 * Remove the specified delivery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Delivery::destroy($id);

		return Redirect::route('deliveries.index');
	}

}

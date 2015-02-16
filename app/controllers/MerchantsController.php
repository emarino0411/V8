<?php

class MerchantsController extends \CtgBaseController {

	/**
	 * Display a listing of merchants
	 *
	 * @return Response
	 */
	public function index()
	{
		$merchants = Merchant::all();

		return View::make('merchants.index', compact('merchants'));
	}

	/**
	 * Show the form for creating a new merchant
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('merchants.create');
	}

	/**
	 * Store a newly created merchant in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Merchant::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Merchant::create($data);

		return Redirect::route('merchants.index');
	}

	/**
	 * Display the specified merchant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$merchant = Merchant::findOrFail($id);

		return View::make('merchants.show', compact('merchant'));
	}

	/**
	 * Show the form for editing the specified merchant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$merchant = Merchant::find($id);

		return View::make('merchants.edit', compact('merchant'));
	}

	/**
	 * Update the specified merchant in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$merchant = Merchant::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Merchant::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$merchant->update($data);

		return Redirect::route('merchants.index');
	}

	/**
	 * Remove the specified merchant from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Merchant::destroy($id);

		return Redirect::route('merchants.index');
	}

}

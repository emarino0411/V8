<?php

class RegisterCrowdiesController extends \CtgBaseController {

	/**
	 * Display a listing of registercrowdies
	 *
	 * @return Response
	 */
	public function index()
	{
    	$data = array('data'=>'Data');
    	$data1 = array('data1'=>'Data1');
		return View::make('registercrowdies.index',$data)
					->nest('body', 'template.body',$data1)
					->nest('header', 'template.header_sign_up',$data1);
		// $view = View::make('greeting')->nest('child', 'child.view', $data);
	}

	/**
	 * Show the form for creating a new registercrowdy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registercrowdies.create');
	}

	/**
	 * Store a newly created registercrowdy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Registercrowdy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Registercrowdy::create($data);

		return Redirect::route('registercrowdies.index');
	}

	/**
	 * Display the specified registercrowdy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$registercrowdy = Registercrowdy::findOrFail($id);

		return View::make('registercrowdies.show', compact('registercrowdy'));
	}

	/**
	 * Show the form for editing the specified registercrowdy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$registercrowdy = Registercrowdy::find($id);

		return View::make('registercrowdies.edit', compact('registercrowdy'));
	}

	/**
	 * Update the specified registercrowdy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$registercrowdy = Registercrowdy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Registercrowdy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$registercrowdy->update($data);

		return Redirect::route('registercrowdies.index');
	}

	/**
	 * Remove the specified registercrowdy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Registercrowdy::destroy($id);

		return Redirect::route('registercrowdies.index');
	}

}

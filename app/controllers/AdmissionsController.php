<?php

class AdmissionsController extends \BaseController {

	/**
	 * Display a listing of admissions
	 *
	 * @return Response
	 */
	public function index()
	{
		$admissions = Admission::all();

		return View::make('admissions.index', compact('admissions'));
	}

	/**
	 * Show the form for creating a new admission
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admissions.create');
	}

	/**
	 * Store a newly created admission in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Admission::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$admission = new Admission;

		$admission->name = Input::get('name');
		$admission->date = date('Y-m-d');
		$admission->id_number = Input::get('id_number');
		$admission->place_of_death = Input::get('place_of_death');
		$admission->cause_of_death = Input::get('cause_of_death');
		$admission->certificate_no = Input::get('certificate_no');
		$admission->category = Input::get('category');
		$admission->admission_no = Admission::getAdmissionNumber();
		$admission->kin_name = Input::get('kin_name');
		$admission->kin_phone = Input::get('kin_phone');
		$admission->kin_id_number = Input::get('kin_id_number');
		$admission->save();

		return Redirect::route('admissions.index');
	}

	/**
	 * Display the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$admission = Admission::findOrFail($id);

		return View::make('admissions.show', compact('admission'));
	}

	/**
	 * Show the form for editing the specified admission.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$admission = Admission::find($id);

		return View::make('admissions.edit', compact('admission'));
	}

	/**
	 * Update the specified admission in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$admission = Admission::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Admission::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$admission->name = Input::get('name');
		$admission->id_number = Input::get('id_number');
		$admission->place_of_death = Input::get('place_of_death');
		$admission->cause_of_death = Input::get('cause_of_death');
		$admission->certificate_no = Input::get('certificate_no');
		$admission->category = Input::get('category');
		$admission->admission_no = Admission::getAdmissionNumber();
		$admission->kin_name = Input::get('kin_name');
		$admission->kin_phone = Input::get('kin_phone');
		$admission->kin_id_number = Input::get('kin_id_number');
		$admission->update();


		return Redirect::route('admissions.index');
	}

	/**
	 * Remove the specified admission from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Admission::destroy($id);

		return Redirect::route('admissions.index');
	}


	public function release($id)
	{
		$admission = Admission::find($id);

		$admission->date_released = date('Y-m-d');
		$admission->status = 'released';
		$admission->update();

		return Redirect::route('admissions.index');
	}

}

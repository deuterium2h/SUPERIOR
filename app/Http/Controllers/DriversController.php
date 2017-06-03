<?php

namespace App\Http\Controllers;

use App\Driver;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class DriversController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$query = $request->get('q');
		$drivers = $query 
		? Driver::where('last_name', 'LIKE', "%$query%")
				->orWhere('first_name', 'LIKE', "%$query%")
				->orWhere('middle_name', 'LIKE', "%$query%")
				->orWhere('id', 'LIKE', "%$query%")
				->paginate(10)
		: Driver::latest('updated_at')->paginate(10);
		return view('pages.drivers.index', compact('drivers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.drivers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$driver = new Driver($request->all());
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$driver->avatar = $fileName;
		}
		$driver->save();
		flash('Member Registered', 'Driver\'s Information has been Added.');
		return redirect('drivers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$driver = Driver::findOrFail($id);

		if(is_null($driver)){
			abort(404);
		}

		return view('pages.drivers.show', compact('driver'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$driver = Driver::findOrFail($id);

		if(is_null($driver)){
			abort(404);
		}

		return view('pages.drivers.edit', compact('driver'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$driver = Driver::findOrFail($id);
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$driver->avatar = $fileName;
		}
		$driver->update($request->all());
		flash('Member Updated', 'Driver\'s Information has been Updated.');
		return redirect('drivers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Driver::findOrFail($id)->delete();

		return redirect('drivers');
	}

	public function print($id)
	{
		$driver = Driver::findOrFail($id);
		$pdf = PDF::loadView('layouts.pdf.driver', compact('driver'));
		return $pdf->stream($driver->id.'-'.$driver->last_name.'.pdf');
	}
	
	public function export($id)
	{
		$driver = Driver::findOrFail($id);
		$pdf = PDF::loadView('layouts.pdf.driver', compact('driver'));
		return $pdf->download($driver->id.'-'.$driver->last_name.'.pdf');
	}
}

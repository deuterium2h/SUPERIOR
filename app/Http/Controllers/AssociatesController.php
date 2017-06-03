<?php

namespace App\Http\Controllers;

use App\Associate;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class AssociatesController extends Controller
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
		$associates = $query 
		? Associate::where('last_name', 'LIKE', "%$query%")
				->orWhere('first_name', 'LIKE', "%$query%")
				->orWhere('middle_name', 'LIKE', "%$query%")
				->orWhere('id', 'LIKE', "%$query%")
				->paginate(10)
		: Associate::latest('updated_at')->paginate(10);
		return view('pages.associates.index', compact('associates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.associates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$associate = new Associate($request->all());
		if ($request->file('avatar')){
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$associate->avatar = $fileName;
		}
		$associate->save();
		flash('Member Registered', 'Associate Member\'s Information has been Added.');
		return redirect('associates');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$associate = Associate::findOrFail($id);

		if(is_null($associate)){
			abort(404);
		}

		return view('pages.associates.show', compact('associate'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$associate = Associate::findOrFail($id);

		if(is_null($associate)){
			abort(404);
		}

		return view('pages.associates.edit', compact('associate'));
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
		$associate = Associate::findOrFail($id);
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$associate->avatar = $fileName;
		}
		$associate->update($request->all());
		flash('Member Updated', 'Associate Member\'s Information has been Updated.');
		return redirect('associates');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Associate::findOrFail($id)->delete();

		return redirect('associates');
	}

	public function print($id)
	{
		$associate = Associate::findOrFail($id);
		$pdf = PDF::loadView('layouts.pdf.associate', compact('associate'));
		return $pdf->stream($associate->id.'-'.$associate->last_name.'.pdf');
	}
	
	public function export($id)
	{
		$associate = Associate::findOrFail($id);
		$pdf = PDF::loadView('layouts.pdf.associate', compact('associate'));
		return $pdf->download($associate->id.'-'.$associate->last_name.'.pdf');
	}
}

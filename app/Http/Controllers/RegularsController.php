<?php

namespace App\Http\Controllers;

use App\Regular;
use Illuminate\Http\Request;
use PDF;

class RegularsController extends Controller
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
		$regulars = $query 
		? Regular::where('last_name', 'LIKE', "%$query%")
				->orWhere('first_name', 'LIKE', "%$query%")
				->orWhere('middle_name', 'LIKE', "%$query%")
				->orWhere('id', 'LIKE', "%$query%")
				->paginate(10)
		: Regular::latest('updated_at')->paginate(10);
		return view('pages.regulars.index', compact('regulars'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.regulars.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$regular = new Regular($request->all());
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$regular->avatar = $fileName;
		}
		$regular->save();
		flash('Member Registered', 'Regular Member\'s Information has been Added.');
		return redirect('regulars');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$regular = Regular::findOrFail($id);

		if(is_null($regular)){
			abort(404);
		}

		return view('pages.regulars.show', compact('regular'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$regular = Regular::findOrFail($id);

		if(is_null($regular)){
			abort(404);
		}

		return view('pages.regulars.edit', compact('regular'));
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
		$regular = Regular::findOrFail($id);
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$regular->avatar = $fileName;
		}
		$regular->update($request->all());
		flash('Member Updated', 'Regular Member\'s Information has been Updated.');
		return redirect('regulars');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Regular::findOrFail($id)->delete();

		return redirect('regulars');
	}

	public function print($id)
	{
		return 'hello';
	}
	
	public function export($id)
	{
		// return view('layouts.pdf.regular', compact('regular'));
		// $pdf = App::make('dompdf.wrapper');
		// $pdf->loadHTML('<h1>Test</h1>');
		$regular = Regular::findOrFail($id);
		$pdf = PDF::loadView('layouts.pdf.regular', compact('regular'));
		return $pdf->stream('reg.pdf');
	}
}

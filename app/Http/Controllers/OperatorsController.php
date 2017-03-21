<?php

namespace App\Http\Controllers;

use App\Operator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OperatorsController extends Controller
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
		$operators = $query 
		? Operator::where('last_name', 'LIKE', "%$query%")
				->orWhere('first_name', 'LIKE', "%$query%")
				->orWhere('middle_name', 'LIKE', "%$query%")
				->orWhere('id', 'LIKE', "%$query%")
				->paginate(10)
		: Operator::latest('updated_at')->paginate(10);
		return view('pages.operators.index', compact('operators'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.operators.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$operator = new Operator($request->all());
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$operator->avatar = $fileName;
		}
		$operator->save();
		flash('Member Registered', 'Operator\'s Information has been Added.');
		return redirect('operators');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$operator = Operator::findOrFail($id);

		if(is_null($operator)){
			abort(404);
		}

		return view('pages.operators.show', compact('operator'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$operator = Operator::findOrFail($id);

		if(is_null($operator)){
			abort(404);
		}

		return view('pages.operators.edit', compact('operator'));
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
		$operator = Operator::findOrFail($id);
		if ($request->file('avatar')) {
			$file = $request->file('avatar');
			$fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$request->file('avatar')->move('photos/members', $fileName);
			$operator->avatar = $fileName;
		}
		$operator->update($request->all());
		flash('Member Updated', 'Operator\'s Information has been Updated.');
		return redirect('operators');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Operator::findOrFail($id)->delete();

		return redirect('operators');
	}
}

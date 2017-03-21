<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;
use App\VehiclePhoto;
use App\Operator;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\VehicleRequest;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
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
		$vehicles = $query 
		? Vehicle::where('plate_num', 'LIKE', "%$query%")
				->orWhere('chasis_num', '==', "%$query%")
				->orWhere('opr_name', 'LIKE', "%$query%")
				->orWhere('body_type', 'LIKE', "%$query%")
				->orWhere('make', 'LIKE', "%$query%")
				->paginate(10)
		: Vehicle::latest('updated_at')->paginate(10);
		return view('pages.vehicles.index', compact('vehicles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.vehicles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(VehicleRequest $request)
	{
		Vehicle::create($request->all());
		//flash message
		flash('Vehicle Registered', 'Vehicle Information has been added to the database.');
		return redirect('vehicles');
	}

	public function addPhoto($plate_num, Request $request)
	{
		$photo = VehiclePhoto::fromFile($request->file('photo'));

		Vehicle::plateNumber($plate_num)->addPhoto($photo);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($plate_num)
	{
		$vehicle = Vehicle::plateNumber($plate_num);
		return view('pages.vehicles.show', compact('vehicle'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($plate_num)
	{
		$vehicle = Vehicle::plateNumber($plate_num);
		return view('pages.vehicles.edit', compact('vehicle'));
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
		$vehicle = Vehicle::findOrFail($id);
		$vehicle->update($request->all());
		flash('Vehicle Updated', 'Vehicle Information has been Updated.');
		return redirect('vehicles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Vehicle::findOrFail($id)->delete();

		return redirect('vehicles');
	}
	public function destroyPhoto($id)
	{
		VehiclePhoto::findOrFail($id)->delete();

		return back();
	}
}

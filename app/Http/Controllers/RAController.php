<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RAController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function createReg()
	{
		return view('pages.create.regular');
	}
	
	public function createAsc()
	{
		return view('pages.create.associate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showReg($id)
	{
		//
	}

	public function showAsc($id)
	{
		//
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function editReg($id)
	{
		//
	}

	public function editAsc($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function updateReg(Request $request, $id)
	{
		//
	}

	public function updateAsc(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroyReg($id)
	{
		//
	}

	public function destroyAsc($id)
	{
		//
	}

}

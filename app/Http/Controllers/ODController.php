<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Operators;
use App\Drivers;

class ODController extends Controller
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
    public function createOpr()
    {
        return view('pages.create.operator');
    }

    public function createDrv()
    {
        return view('pages.create.driver');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOpr()
    {
        $input = Request::all();

        return $input;
    }

    public function storeDrv(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOpr(/*$id*/)
    {
        return view('pages.show.mod');
    }

    public function showDrv(/*$id*/)
    {
        return view('pages.show.mod');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editOpr($id)
    {
        //
    }

    public function editDrv($id)
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
    public function updateOpr(Request $request, $id)
    {
        //
    }

    public function updateDrv(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyOpr($id)
    {
        //
    }

    public function destroyDrv($id)
    {
        //
    }
}

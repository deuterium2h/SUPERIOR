<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Regular;

use App\Associate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regulars = Regular::whereColumn('amount_paid', '<', 'amount_total')->paginate(8);
        $associates = Associate::whereColumn('amount_paid', '<', 'amount_total')->paginate(8);
        return view('home', compact('regulars', 'associates'));
    }
}

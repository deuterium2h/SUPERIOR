<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_member_rg()
    {
    	return view('forms.addra');
    }

    public function add_member_as()
    {
    	return view('forms.addra');
    }

    public function add_member_op()
    {
    	return view('forms.addod');
    }

    public function add_member_dr()
    {
    	return view('forms.addod');
    }
}

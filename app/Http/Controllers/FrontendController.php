<?php

namespace euro_hms\Http\Controllers;

use Illuminate\Http\Request;

use euro_hms\Http\Requests;

class FrontendController extends Controller
{
    public function index()
    {	
        flash()->success('Welcome to Laraspace');
        return view('front.index');
    }
}

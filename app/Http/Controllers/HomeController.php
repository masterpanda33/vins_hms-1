<?php

namespace euro_hms\Http\Controllers;

use Illuminate\Http\Request;
use euro_hms\Contracts\TournamentContract;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Todo: Login User We passed for Display Manage User Section
       $userName = \Auth::user()['username'];

        $tournamentServiceObj = app()->make('euro_hms\Contracts\TournamentContract')->index();
        $tournamentObjArray = $tournamentServiceObj['data']->toarray();
        $tournamentObj = $tournamentObjArray;

        // \JavaScript::put([
        //  'user_name' => $userName,
        //  'tournamentList' => $tournamentObj,
        // ]);

        return view('home.index1');
    }
}

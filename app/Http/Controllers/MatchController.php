<?php

namespace euro_hms\Http\Controllers;

use Illuminate\Http\Request;
use euro_hms\Contracts\ApiContract;

class MatchController extends Controller
{
    // use Helpers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiContract $apiObj)
    {
        $this->apiObj = $apiObj;
        // $this->middleware('auth');
        // $this->middleware('jwt.auth');
    }

    /**
     * Show the Matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = $this->apiObj->api->get('matches');
        
        return view('match.index')->with('matches', $matches);
    }

    public function create()
    {
        $dispatcher = $this->apiObj->getDispacther();

        $matchData = [
            'goal_score1' => '1', 'goal_score2' => '3',
            'match_status' => 'full-time', 'winner' => 'test1',
            'location_id' => '1', 'referee_id' => '1',
            'notes' => 'test Notes',
        ];
        $match = $dispatcher->with($matchData)->post('match/create');
    }

    public function deleteMatch($deleteId)
    {
        $dispatcher = $this->apiObj->getDispacther();

        $match = $dispatcher->post('match/delete/'.$deleteId);
    }
}

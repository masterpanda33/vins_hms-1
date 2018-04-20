<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;

class opdController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveData(Request $request)
    {
        dd($request->all());
    }
}

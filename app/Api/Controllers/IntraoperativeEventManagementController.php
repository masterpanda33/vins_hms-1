<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\intraoperativeEventManagement ;
use DB;

class IntraoperativeEventManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/intraoperativeEventManagement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['intraoperativeEventManagementData'];
      // dd($data);
      $intraoperativeEventManagementCreate = IntraoperativeEventManagement::create([
        // 'date' => $request->date,
        // 'time' => $request->time,
        'event_01' => $data['event_01'],
        'management_01' => $data['management_01'],
        'event_02' => $data['event_02'],
        'management_02' => $data['management_02'],
        'event_03' => $data['event_03'],
        'management_03' => $data['management_03'],
        'event_04' => $data['event_04'],
        'management_04' => $data['management_04'],
        'event_05' => $data['event_05'],
        'management_05' => $data['management_05'],
        'event_06' => $data['event_06'],
        'management_06' => $data['management_06'],
        'remarks' => $data['remarks'],
      ]);
      if ($intraoperativeEventManagementCreate) {
          return ['code' => '200','intraoperativeEventManagementData'=>$intraoperativeEventManagementCreate->id, 'message' => 'Data Sucessfully InCreate'];
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

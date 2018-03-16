<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\DischargeGatepass;
use DB;

class DischargeGatepassController extends Controller
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
        //
        return view('/dischargeGatepass');
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
        // echo "<pre>";print_r($request->all());echo "</pre>";
        // dd($request->all());
        $data = $request->all()['dischargeGatepassData'];
        // dd($data);
        $dischargeGatepassCreate = DischargeGatepass::create([
          // 'date' => $request->date,
          // 'time' => $request->time,
          'patients_name'=> $data['patients_name'],
          'room_details'=> $data['room_details'],
          'dr_name'=> $data['dr_name'],
          'address'=> $data['address'],
          'patients_file'=> $data['patients_file'],
          'contact_name'=> $data['contact_name'],
          'contact_no'=> $data['contact_no'],
          'bill_no'=> $data['bill_no'],
          'doa'=> $data['doa'],
          'discharge_sheet'=> $data['discharge_sheet'],
          'dod'=> $data['dod'],
          'remarks'=> $data['remarks'],
        ]);
      if ($dischargeGatepassCreate) {
            return ['code' => '200','dischargeGatepassData'=>$dischargeGatepassCreate->id, 'message' => 'Data Sucessfully Inserted'];
        }
        // return view('\index');
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

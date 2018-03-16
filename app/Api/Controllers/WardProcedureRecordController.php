<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\WardProcedureRecord;
use DB;

class WardProcedureRecordController extends Controller
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
        return view('/WardProcedureRecord');
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
        $data = $request->all()['wardProcedureRecordData'];
        // dd($data);
        $wardProcedureRecordCreate = WardProcedureRecord::create([
          // 'date' => $request->date,
          // 'time' => $request->time,
          'time' => $data['time'],
          'multipara_monitoring_less6' => $data['multipara_monitoring_less6'],
          'multipara_monitoring_more6' => $data['multipara_monitoring_more6'],
          'oxygen_upto12' => $data['oxygen_upto12'],
          'oxygen_more12' => $data['oxygen_more12'],
          'pulse_intermittent' => $data['pulse_intermittent'],
          'pulse_continuous' => $data['pulse_continuous'],
          'ventilator_bipap' => $data['ventilator_bipap'],
          'nebulization' => $data['nebulization'],
          'blood_transfusion' => $data['blood_transfusion'],
          'rbs' => $data['rbs'],
          'ecg' => $data['ecg'],
          'bed_charges' => $data['bed_charges'],
          'traction' => $data['traction'],
          'dressing' => $data['dressing'],
          'spcl_dressing' => $data['spcl_dressing'],
          'tube_insertion' => $data['tube_insertion'],
          'catheterisation' => $data['catheterisation'],
          'suture_removal' => $data['suture_removal'],
          'clw_suturing' => $data['clw_suturing'],
          'diet_consultation' => $data['diet_consultation'],
          'enema' => $data['enema'],
          'syringe_pump' => $data['syringe_pump'],
          'echo' => $data['echo'],
          'urine_sugar' => $data['urine_sugar'],
          'peripheral_line' => $data['peripheral_line'],
          'central_line' => $data['central_line'],
          'lumbar_puncture' => $data['lumbar_puncture'],
          'csf_manometry' => $data['csf_manometry'],
          'intubation' => $data['intubation'],
          'code_blue' => $data['code_blue'],
          'resuscitation' => $data['resuscitation'],
          'ambulance_charges' => $data['ambulance_charges'],
          'escort_ventilator' => $data['escort_ventilator'],
          'escort_without' => $data['escort_without'],
          'mlc_inside_city' => $data['mlc_inside_city'],
          'mlc_outside_city' => $data['mlc_outside_city'],
          'defibrillator_charges' => $data['defibrillator_charges'],
          'physiotherapy' => $data['physiotherapy'],
        ]);
        if ($wardProcedureRecordCreate) {
            return ['code' => '200','wardProcedureRecordData'=>$wardProcedureRecordCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

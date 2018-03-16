<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use euro_hms\Models\User;
use euro_hms\Models\VentilatorChargesheet;
use DB;

class VentilatorChargesheetController extends Controller
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
        return('/ventilatorChargeSheet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // echo "<pre>";print_r($request->all());echo "</pre>";
      // dd($request->all());
      $data = $request->all()['ventilatorChargeSheetData'];
      $ventilatorChargesheetCreate = VentilatorChargeSheet::create([
        // 'date' => $request->date,
        // 'time' => $request->time,
        'id' =>$data['id'],
        'ipd' +$data['ipd'],
        'name' =>$data['name'],
        'age' =>$data['age'],
        'sex' =>$data['sex'],
        'bed_no' =>$data['bed_no'],
        'bed_no' =>$data['bed_no'],
        'time' =>$data['time'],
        'date' =>$data['date'],
        'time_slot01' =>$data['time_slot01'],
        'time_slot02' =>$data['time_slot02'],
        'time_slot03' =>$data['time_slot03'],
        'time_slot04' =>$data['time_slot04'],
        'mode' =>$data['mode'],
        'tidal_volume' =>$data['tidal_volume'],
        'freq_controlled' =>$data['freq_controlled'],
        'freq_simv' =>$data['freq_simv'],
        'pressure_control' =>$data['pressure_control'],
        'pressure_support' =>$data['pressure_support'],
        'peep_cpap' =>$data['peep_cpap'],
        'flo2' =>$data['flo2'],
        'triggering' =>$data['triggering'],
        'inp_tv' =>$data['inp_tv'],
        'exp_tv' =>$data['exp_tv'],
        'exp_mv' =>$data['exp_mv'],
        'measured_freq' =>$data['measured_freq'],
        'peak_pressure' =>$data['peak_pressure'],
        'mean_pressure' =>$data['mean_pressure'],
        'end_exp' =>$data['end_exp'],
        'pressure_low' =>$data['pressure_low'],
        'volume_high_mv' =>$data['volume_high_mv'],
        'volume_low_mv' =>$data['volume_low_mv'],
        'gas_supply' =>$data['gas_supply'],
        'power_failure' =>$data['power_failure'],
        'position' =>$data['position'],
        'et_tstomy' =>$data['et_tstomy'],
        'oral' =>$data['oral'],
        'chest_physio' =>$data['chest_physio'],
        'abg' =>$data['abg'],
        'xray_chest' =>$data['xray_chest'],
        'catheter_mount' =>$data['catheter_mount'],
        'filter' =>$data['filter'],
        'ventilator_circuit' =>$data['ventilator_circuit'],
        'et_tube' =>$data['et_tube'],
      ]);
    if ($ventilatorChargesheetCreate) {
          return ['code' => '200','ventilatorChargeSheetData'=>$ventilatorChargesheetCreate->id, 'message' => 'Data Sucessfully Inserted'];
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

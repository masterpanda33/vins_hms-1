<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use euro_hms\Models\SurgicalSafetyChecklist ;

class SurgicalSafetyChecklistController extends Controller
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
        return view('/surgicalSafetyChecklist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all()['surgicalSafetyChecklistData'];
      // dd($data);
      $surgicalSafetyChecklistCreate = SurgicalSafetyChecklist::create([
        // 'date' => $request->date,
        // 'time' => $request->time,
        'identity' => $data['identity'],
        'site' => $data['site'],
        'proced' => $data['proced'],
        'consent' => $data['consent'],
        'site_marked' => $data['site_marked'],
        'anesthesia_check' => $data['anesthesia_check'],
        'all_monitors_functioning' => $data['all_monitors_functioning'],
        'allergy' => $data['allergy'],
        'airway_risk' => $data['airway_risk'],
        'risk_blood_loss' => $data['risk_blood_loss'],
        'team_member_intro' => $data['team_member_intro'],
        'surgeon_nurse_confirm' => $data['surgeon_nurse_confirm'],
        'surgeon_reviews' => $data['surgeon_reviews'],
        'anesthesia_reviews' => $data['anesthesia_reviews'],
        'nursing_reviews' => $data['nursing_reviews'],
        'antibiotic_given' => $data['antibiotic_given'],
        'essential_imaging' => $data['essential_imaging'],
        'pressure_points_padded' => $data['pressure_points_padded'],
        'confirm_patient_position' => $data['confirm_patient_position'],
        'anesthetist_airway_lines' => $data['anesthetist_airway_lines'],
        'parts_prepped' => $data['parts_prepped'],
        'cautery' => $data['cautery'],
        'patient_electrode_connected' => $data['patient_electrode_connected'],
        'instruments_checked' => $data['instruments_checked'],
        'procedure_name_recorded' => $data['procedure_name_recorded'],
        'instrument_count' => $data['instrument_count'],
        'specimen_labelled' => $data['specimen_labelled'],
        'equipment_problems' => $data['equipment_problems'],
        'surgeon_review_key_concepts' => $data['surgeon_review_key_concepts'],
        'anesthetist_confirm' => $data['anesthetist_confirm'],
        'surgeon_name' => $data['surgeon_name'],
        'anesthetist_name' => $data['anesthetist_name'],
      ]);
      if ($surgicalSafetyChecklistCreate) {
          return ['code' => '200','surgicalSafetyChecklistData'=>$surgicalSafetyChecklistCreate->id, 'message' => 'Data Sucessfully InCreate'];
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

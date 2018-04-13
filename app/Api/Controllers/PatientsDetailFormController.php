<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\IpdDetails;
use euro_hms\Models\OpdDetails;


use DB;
use Carbon\Carbon;

class PatientsDetailFormController extends Controller
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
        return view('/PatientsDetailForm');
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
        $data = $request->all()['patientData']['patientData'];
        $patientType = $request->all()['patientData']['patientType'];
        $uhid="VM";
        $year = date('y');
        // dd($patientUHId);

        if($data['case'] == 'new') {
           $patientD =  PatientDetailsForm::get()->last();
           $lastPatientId=$patientD->id;
           $newPatNo = sprintf("%03d",++$lastPatientId);
           $insertedPatientId=$uhid.$year.$newPatNo;

            $patientData = PatientDetailsForm::create([
           // 'date' => $request->date,
           // 'time' => $request->time,
          'uhid_no'=> $insertedPatientId,
          'first_name' => $data['fname'],
          'middle_name' => $data['mname'],
          'last_name' => $data['lname'],
          'dob' => $data['dob'],
          'gender' => $data['gender'],
          'address' => $data['address'],
          'ph_no' => $data['ph_no'],
          'mob_no' => $data['mob_no'],
          'references' => $data['reference_dr'],
          'consultant' => isset($data['consulting_dr'])?$data['consulting_dr']: '' ,
          'case_type' => $data['case'],
        ]);    
         $patientId = $patientData->id;
        } else {
            $patientId = 0;
            $patientData = PatientDetailsForm::where('first_name',$data['fname'])->where('dob',$data['dob'])->first();
            if($patientData) {
                $patientId = $patientData->id;
            } else {
                 return ['code' => '300','patientData'=>'', 'message' => 'Record not found'];
            }

        }
        if ($patientId) {
            if($patientType == "opd"){
                $caseData = OpdDetails::create([
                    'patient_id'=> $patientId,
                    'uhid_no'=> $patientData->uhid_no,
                    'admit_datetime' =>  Carbon::now() 
                ]);
                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'opdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }    
            }
            else{
                 $caseData = IpdDetails::create([
                    'patient_id'=> $patientId,
                    'admit_datetime' =>  Carbon::now()
                ]);
                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'ipdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }
            }

        }
        return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
        
        
        // return view('\index');
    }

    /**
     * get all details of patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDetails($id)
    {
        // echo "<pre>";print_r($id);echo "</pre>";exit;
        if($id!='') {
            $details = IpdDetails::with('patientDetails')->where('id',$id)->first();
            // dd($details);
            if ($details) {
                return ['code' => '200','data'=>$details, 'message' => 'Record Sucessfully created'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
        }
    }
    public function getAllPatientName() {
        $ipdDetails = IpdDetails::with('patientDetails')->get();
        if ($ipdDetails) {
                return ['code' => '200','data'=>$ipdDetails, 'message' => 'Record Sucessfully created'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
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
